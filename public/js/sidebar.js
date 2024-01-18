var menuIcon = document.querySelector('.menu-icon');
var navbar = document.querySelector('.navbar');
var content = document.querySelector('.dashboardcontent');
var clicked = false;

function toggleMenu() {
  navbar.classList.toggle('menu-visible');
  content.classList.toggle('content-expanded');
}

menuIcon.addEventListener('click', function () {
  clicked = !clicked;

  if (clicked) {
    menuIcon.classList.add('clicked');
    navbar.classList.add('slide-in');
  } else {
    menuIcon.classList.remove('clicked');
    navbar.classList.remove('slide-in');
    navbar.classList.add('slide-out'); // Adicione esta linha para ocultar a barra lateral
  }

  toggleMenu();
});


