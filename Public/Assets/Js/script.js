// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Criar elementos do menu se não existirem
    const navbar = document.querySelector('.navbar');
    const navContainer = document.querySelector('.nav-container');
    
    // Adicionar botão hamburguer se não existir
    if (!document.querySelector('.menu-toggle')) {
        const menuToggle = document.createElement('div');
        menuToggle.className = 'menu-toggle';
        menuToggle.innerHTML = '<span></span><span></span><span></span>';
        navContainer.insertBefore(menuToggle, document.querySelector('.nav-menu'));
    }
    
    // Adicionar botão fechar se não existir
    if (!document.querySelector('.close-menu')) {
        const closeMenu = document.createElement('div');
        closeMenu.className = 'close-menu';
        closeMenu.innerHTML = '&times;';
        document.querySelector('.nav-menu').appendChild(closeMenu);
    }
    
    // Adicionar overlay se não existir
    if (!document.querySelector('.menu-overlay')) {
        const overlay = document.createElement('div');
        overlay.className = 'menu-overlay';
        document.body.appendChild(overlay);
    }
    
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const closeMenu = document.querySelector('.close-menu');
    const overlay = document.querySelector('.menu-overlay');
    const body = document.body;
    
    // Função para abrir menu
    function openMenu() {
        navMenu.classList.add('active');
        overlay.classList.add('active');
        body.classList.add('menu-open');
    }
    
    // Função para fechar menu
    function closeMenuFunc() {
        navMenu.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('menu-open');
    }
    
    // Abrir menu
    menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        openMenu();
    });
    
    // Fechar menu pelo botão X
    closeMenu.addEventListener('click', function(e) {
        e.stopPropagation();
        closeMenuFunc();
    });
    
    // Fechar menu pelo overlay
    overlay.addEventListener('click', function() {
        closeMenuFunc();
    });
    
    // Fechar menu ao redimensionar para desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            closeMenuFunc();
        }
    });
    
    // Fechar menu ao clicar em um link
    const menuLinks = document.querySelectorAll('.nav-menu ul li a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            closeMenuFunc();
        });
    });
    
    // Prevenir que cliques dentro do menu fechem ele
    navMenu.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    // Fechar menu com a tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navMenu.classList.contains('active')) {
            closeMenuFunc();
        }
    });
});