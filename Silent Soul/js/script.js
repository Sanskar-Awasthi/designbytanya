// JavaScript to switch images every second
let logoImages = document.getElementsByClassName('logoImage'); // Get all elements with the class 'logoImage'

let images = ['img/Website_Logo_01.png', 'img/Website_Logo.png'];
let currentIndex = 0;

setInterval(() => {
    currentIndex = (currentIndex + 1) % images.length;
    // Loop through all elements with class 'logoImage' and change the src
    for (let i = 0; i < logoImages.length; i++) {
        logoImages[i].src = images[currentIndex];
    }
}, 1000);
