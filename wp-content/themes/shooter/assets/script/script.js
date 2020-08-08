
function link(){
  document.getElementById('burger').classList.toggle('menu-link-active');
  document.getElementById('nav-ul').classList.toggle('nav-ul-link');
  document.getElementById("body").classList.toggle("scroll");
}
var buttonClick = document.getElementsByClassName('button-modal');
for (i=0; i< buttonClick.length; i++)
buttonClick[i].onclick = function()
{ modal();
};
function modal(){
document.getElementById("modal-window").classList.toggle("modal-active");
};
var p=document.getElementById("modal");
p.onclick=function(){
 document.getElementById("modal-window").classList.remove("modal-active");
};
document.getElementById('burger').onclick=function(){
  link();
  };