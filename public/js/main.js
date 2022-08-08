/*
Muda o estilo do NAVBAR quando scrollar para baixo
Mudando o 0 na função:
('window-scroll',window.scrollY > 0)

Podemos modificar quando vai mudar o estilo do NAVBAR
(É por pixels, ou seja, quando tiver a mínima mudança ele irá mudar)
*/

window.addEventListener('scroll', () => { 
    document.querySelector('nav').classList.toggle
    ('window-scroll',window.scrollY > 0)

})


// mostra/esconde a resposta para perguntas frequentes

const perguntas_freq = document.querySelectorAll('.pergunta_freq');

perguntas_freq.forEach(pergunta_freq => {
    pergunta_freq.addEventListener('click', () => {
        pergunta_freq.classList.toggle('open');

        // mudar o ícone(de + para - e - para +)
        const icon = pergunta_freq.querySelector('.pergunta_icon i');
        if(icon.className === 'uil uil-plus-circle'){
            icon.className = "uil uil-minus-circle"
        } else{
            icon.className = "uil uil-plus-circle"
        }
    })
})


// mostra/esconde o menu de navegação
const menu = document.querySelector(".nav_menu")
const menuBtn = document.querySelector("#open-menu-btn")
const closeBtn = document.querySelector("#close-menu-btn")

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})


// fecha o nav menu
const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block"
}

closeBtn.addEventListener('click', closeNav)











// AHHAHJA
const changeThemeBtn = document.querySelector("#change-theme")

// Toggle dark mode
function toggleLightMode() {
    document.body.classList.toggle("light");
}

// Load Light or Light mode
function loadTheme(){
    const LightMode = localStorage.getItem("Light")

    if(LightMode){
        toggleLightMode();
    }
}

loadTheme();

changeThemeBtn.addEventListener("change", function() {
    toggleLightMode();

    //save or remove Light mode
    localStorage.removeItem("Light");

    if (document.body.classList.contains("Light")){
        localStorage.setItem("Light", 1);
    }
});