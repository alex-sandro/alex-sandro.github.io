// Efeito no Nav na Rolagem
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if(window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Menu Mobile
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const navItems = document.querySelectorAll('.nav-links li');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    
    // Animação ícone hamburger para 'X' (opcional)
    const icon = hamburger.querySelector('i');
    if (navLinks.classList.contains('active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
    } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
});

navItems.forEach(item => {
    item.addEventListener('click', () => {
        navLinks.classList.remove('active');
        const icon = hamburger.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    });
});

// Typing Text Effect no Hero
const typedTextElement = document.querySelector('.typing-text');
const originalText = typedTextElement.innerText;
typedTextElement.innerText = '';
let i = 0;

function typeWriter() {
    if (i < originalText.length) {
        typedTextElement.innerHTML = originalText.substring(0, i+1) + '<span aria-hidden="true" style="border-right: 2px solid var(--accent-color); animation: blink 1s step-end infinite;"></span>';
        i++;
        setTimeout(typeWriter, 50); // Velocidade da digitação
    } else {
        // Remover cursor piscante após concluir
        typedTextElement.innerHTML = originalText;
    }
}

// Inicia digitação logo que carrega
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(typeWriter, 400); // delay inicial
});

// Adiciona uma keyframe para piscar o cursor via JS (Ou posso usar CSS)
const style = document.createElement('style');
style.innerHTML = `
@keyframes blink {
    0%, 100% { border-color: transparent }
    50% { border-color: var(--accent-color); }
}`;
document.head.appendChild(style);


// Formulário de Contato Fake Submit
const form = document.querySelector('.contact-form');
if (form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = form.querySelector('.submit-btn');
        const originalBtnText = btn.innerHTML;
        
        btn.innerHTML = 'Enviando... <i class="fas fa-spinner fa-spin"></i>';
        
        // Simular envio
        setTimeout(() => {
            btn.innerHTML = 'Mensagem Enviada! <i class="fas fa-check"></i>';
            btn.style.background = '#10b981'; // Cor verde de sucesso
            btn.style.boxShadow = '0 4px 15px rgba(16, 185, 129, 0.5)';
            form.reset();
            
            // Voltar botão ao estado original
            setTimeout(() => {
                btn.innerHTML = originalBtnText;
                btn.style.background = '';
                btn.style.boxShadow = '';
            }, 4000);
            
        }, 1500);
    });
}
