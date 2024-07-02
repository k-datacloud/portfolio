const hum = document.querySelector('.humburger')
const nav = document.querySelector('.sp-nav')
const grnav = document.querySelector('.sp-grnav')
const list = document.querySelectorAll('.header-list__item')
const close = document.querySelector('.close')
hum.addEventListener('click', () => {
    nav.classList.toggle('sp-nav-act');
    grnav.classList.toggle('menu-act');
    close.classList.toggle('close-act');

    setTimeout(() => {
        list.forEach((item, index) => {
            setTimeout(() => {
                item.classList.toggle('item-act')
            }, 150 * index)
        })
    }, 700)

    hum.classList.toggle('hm-act')
});


close.addEventListener('click', () => {
    nav.classList.remove('sp-nav-act');
    grnav.classList.remove('menu-act');
    list.forEach((item, index) => {
        item.classList.remove('item-act')
    })
    hum.classList.remove('hm-act')
    close.classList.toggle('close-act')
})


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

const circle = document.querySelector('.circle')
const text = circle.textContent
const angle = 360 / text.length
const radius = 100
circle.textContent = ''

for (let i = 0; i < text.length; i++) {
    const span = document.createElement('span')
    span. classList.add('circle__text')
    span.textContent = text[i]
    span.style.transform = `rotate(${angle * i}deg) translate(${radius}px) rotate(-${angle * i}deg)`
    circle.appendChild(span)
}