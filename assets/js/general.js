window.addEventListener('load', function () {


window.onscroll = function() {myFunction()};

var nav = document.querySelector('.nav-sticky');
var sticky = nav.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
}

});