const hum = document.querySelector('.humburger')
const line = document.querySelectorAll('.line')
const headTitle = document.querySelector('.header__link')
const nav = document.querySelector('.grnav')
hum.addEventListener('click', () => {
    nav.classList.toggle('menu-act');
    line[0].classList.toggle('line1-act')
    line[1].classList.toggle('line2-act')
    line[2].classList.toggle('line3-act')
});