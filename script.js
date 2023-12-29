const nav = document.getElementById('menu');
const btn = document.getElementById('btn-menu-mobile');

btn-menu-mobile.addEventListener('click', animar);

function animar(){
    nav.classList.toggle('abrir');
    btn.classList.toggle('ativo');
}