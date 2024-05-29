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


document.addEventListener('DOMContentLoaded', function () {
    const Items = document.querySelectorAll('.works-item');
    const linkTexts = document.querySelectorAll('.works-item__link')
    const masks = document.querySelectorAll('.mask')

    Items.forEach((item, index) => {
        item.addEventListener('mouseenter', () => {
            masks[index].style.visibility = 'visible'; 
            masks[index].style.width = '100%';
            masks[index].style.height = '100%';
            linkTexts[index].style.visibility = 'visible';
        });
    });
    

    Items.forEach((item, index) => {
        item.addEventListener('mouseleave', () => {
            masks[index].style.visibility = 'hidden'; 
            masks[index].style.width = '0';
            masks[index].style.height = '0';
            linkTexts[index].style.visibility = 'hidden';
        });
    });
})