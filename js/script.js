let imgs = ["/img/porsche.png", "/img/mustang.png", "/img/nissan.png", "/img/mazda.png", "/img/toyota.png",];

let cars = document.querySelector('.img'),
    left = document.querySelector('.left'),
    right = document.querySelector('.right');

let i = 1,
    ii = 0;

right.addEventListener('click', () => {
    cars.src = `murabo`;
    i++;
    if (i > imgs.length - 1) {
        i = 0;
    }
})

left.addEventListener('click', () => {
    cars.src = `${imgs[ii]}`;
    ii--;
    if (ii <= 1) {
        ii = imgs.length - 1;
    }
})