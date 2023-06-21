// Burger menus
document.addEventListener('DOMContentLoaded', function () {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }



});


window.addEventListener('DOMContentLoaded', function() {
    var pieces = document.querySelectorAll('.piece');
    pieces.forEach(function(piece) {
        var randomDelay = Math.random() * 1; // 0 ila 3 saniye arasında rastgele bir gecikme süresi
        piece.style.display = 'block';
        piece.style.animationDelay = randomDelay + 's';
    });
});

// document.addEventListener('scroll', function () {
//     let scroll = window.scrollY;
//
//     // hero effect
//     let hero = document.querySelector('.hero');
//     hero.style.backgroundPositionY = scroll / 4 + 'px';
// })

// details page
// let hero = document.getElementsByClassName('hero');
// new simpleParallax(hero);

let bottom_hero = document.getElementsByClassName('bottom-hero');
new simpleParallax(bottom_hero, {
    orientation: 'down'
});

