<?php

namespace AnyComment\Cron;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use AnyComment\Models\AnyCommentEmailQueue;
use AnyComment\Admin\AnyCommentGenericSettings;

class AnyCommentEmailQueueCron {
	/**
	 * AnyCommentEmailCron constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Init class.
	 */
	private function init() {

		add_filter( 'cron_schedules', [ $this, 'add_minute_interval' ] );

		if ( ! wp_next_scheduled( 'anycomment_email_queue_send_cron' ) ) {
			wp_schedule_event( time(), 'every_minute', 'anycomment_email_queue_send_cron' );
		}

		add_action( 'anycomment_email_queue_send_cron', [ $this, 'send_emails' ] );
	}

	/**
	 * Add new every minute interval.
	 *
	 * @param array $schedules List of available schedules.
	 *
	 * @return mixed
	 */
	public function add_minute_interval( $schedules ) {
		$schedules['every_minute'] = array(
			'interval' => 60,
			'display'  => esc_html__( 'Every Minute' ),
		);

		return $schedules;
	}

	/**
	 * Cron tab method to send emails.
	 *
	 * @return bool
	 */
	public function send_emails() {
		$emails = AnyCommentEmailQueue::grab_replies_to_send();

		if ( empty( $emails ) ) {
			return false;
		}

		$successCount = 0;

		/**
		 * @var $email AnyCommentEmailQueue
		 */
		foreach ( $emails as $key => $email ) {

			if ( empty( $email->email ) ) {
				AnyCommentEmailQueue::mark_as_sent( $email->ID );
				continue;
			}

			$headers   = [];
			$headers[] = 'Content-Type: text/html; charset=UTF-8';

			$subject = $email->subject;
			$body    = $email->content;

			// Hook specified sender name from settings
			add_filter( 'wp_mail_from_name', function ($from_name) {
				return AnyCommentGenericSettings::get_notify_email_sender_name();
			}, 99 );

			$isSent = wp_mail( $email->email, $subject, $body, $headers );

			if ( $isSent ) {
				AnyCommentEmailQueue::mark_as_sent( $email->ID );
				$successCount ++;
			}
		}

		return count( $emails ) === $successCount;
	}
}
