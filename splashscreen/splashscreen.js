let halfWidth = (window.innerWidth-100)/2;
let halfHeight = (window.innerHeight-100)/2;

document.getElementById('splashCube').style.transform = 'translateX(' + halfWidth + 'px) translateY(-100px) rotate(-90deg)';

anime({
    targets: 'section',
    translateX: [
        { value: halfWidth, duration: 1000, elasticity: 0, delay: 250 },
        { value: 500, duration: 500, elasticity: 0, delay: 1100 }
    ],
    translateY: [
        { value: halfHeight, duration: 1000, elasticity: 100, delay: 250 }
    ],
    rotate: [
        { value: 0, duration: 1000, elasticity:100, delay: 250 }
    ],
    scaleX: [
        { value: [1, 1.75], duration: 500, delay: 2000 },
    ],
    scaleY: [
        { value: [1, 0.25], duration: 500, delay: 2000 },
    ],
    backgroundSize: [
        { value: [0, 75], duration: 500, delay: 1000 },
        { value: [75, 0], duration: 500, delay: 250 },
    ],
    borderRadius: [
        { value: [0, 10], duration: 1000, delay: 500 },
    ]
});

window.setTimeout(function() {
    window.location = 'search';
}, 3000);