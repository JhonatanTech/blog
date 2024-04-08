// Selecionar elementos
const menuMobile = document.querySelector('.menu-mobile');
const nav = document.querySelector('#menu-menu');

// Adicionar evento de clique ao ícone de menu
menuMobile.addEventListener('click', function() {
    // Alternar classe "show" para mostrar ou ocultar o menu
    nav.classList.toggle('show');
});