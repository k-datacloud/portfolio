
const text = "S.K PORTFOLIO";
const TitleDummy = document.querySelector('.mainvisual__title--dummy');
const splittext = text.split('');
for (let x = 0; x < splittext.length; x++) {
    const span = document.createElement("span");

    // <span> 要素に文字を設定
    span.textContent = splittext[x];

    if (x < 3) {
        span.classList.add("mainvisual__item--large")
    } else {
        span.classList.add("mainvisual__item")
    }

    // <span> 要素を DOM に追加
    TitleDummy.appendChild(span);
};

const frontbody = document.querySelector(".frontbody")
const title = document.querySelector(".mainvisual__title")
const inner = document.querySelector(".mainvisual-inner")
const letters = TitleDummy.querySelectorAll("span");
const header = document.querySelector(".header");
const item = document.querySelector(".scroll-item");
const mainimg = document.querySelector(".mainvisual__img")

// gsap.set(frontbody, {
//     overflow: 'hidden',
// });

gsap.set(header, {
    opacity: 0,
    y: 20,
});

gsap.set(inner, {
    display: 'none',
})

gsap.set(mainimg, {
    x: -70,
});

gsap.set(title, {
    opacity: 0,
    y: 50,
})

gsap.set(item, {
    opacity: 0,
})

const tl = gsap.timeline();

tl.from(letters, {
    opacity: 0, // 非表示から表示へのフェードイン
    y: 20, // 上方向に移動
    stagger: 0.1, // 文字の表示タイミングを設定
    duration: 1.5, // アニメーションの時間
});

tl.to(letters, {
    opacity: 0,
    stagger: 0.1,
    onComplete: function () {
        gsap.set(TitleDummy, {
            display: 'none',
        })
    }
});

tl.to(header, {
    opacity: 1,
    y: 0,
    duration: 1,
});

tl.to(item, {
    opacity: 1,
    duration: 0.3,
    onComplete: function () {
        gsap.set(inner, {
            display: 'flex',
        });
    }
});

tl.to(mainimg, {
    opacity: 1,
    x: 0,
    duration: 1,
    ease: Power1.easeInOut,
});

tl.to(title, {
    opacity: 1,
    y: 0,
    duration: 0.8,
})

const body = document.querySelector(".frontbody");
window.addEventListener('scroll', () => {
    let scrolltop = window.scrollY;

    if (scrolltop > 550 && scrolltop < 1050) {
        body.classList.add("backchange")
    } else {
        body.classList.remove("backchange")
    };
});

const listlink = document.querySelectorAll(".header-list__link")
window.addEventListener('scroll', () => {
    let scrolltop = window.scrollY;
    if (scrolltop > 550) {
        for (let x = 0; x < listlink.length; x++) {
            listlink[x].classList.add("color-black")
        };
    } else {
        for (let x = 0; x < listlink.length; x++) {
            listlink[x].classList.remove("color-black")
        };
    }
});


const img = document.querySelector(".works-img__item");
const imgmask = document.querySelector(".works-img__mask");
window.addEventListener('scroll', () => {
    const scrollworks = window.scrollY;

    if (scrollworks > 1700) {
        img.classList.add('scroll-actY');
        imgmask.classList.add('scroll-actX');
    };
});

