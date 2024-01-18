document.addEventListener('DOMContentLoaded', function () {
    var documentosLink = document.getElementById('bar2');
    var submenuDocumentos = document.getElementById('submenuDocumentos');
    var dropdownicon = documentosLink.querySelector('.dropdown-icon');

    documentosLink.addEventListener('click', function () {
      // Alterna a classe para aplicar ou remover a animação do submenu
      submenuDocumentos.classList.toggle('submenu-hidden');

      // Alterna a classe para aplicar ou remover a animação do ícone de dropdown
      dropdownicon.classList.toggle('dropdown-up');
    });
  });
