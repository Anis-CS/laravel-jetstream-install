let nav = document.querySelector('.header-section');

// Create placeholder for smooth scroll
let placeholder = document.createElement('div');
placeholder.style.height = nav.offsetHeight + 'px';
placeholder.style.display = 'none';
nav.parentNode.insertBefore(placeholder, nav.nextSibling);

window.onscroll = function () {
    const scrollPoint = 100; // Fixed scroll point

    if (document.documentElement.scrollTop > scrollPoint) {
        nav.classList.add('is-sticky');
        placeholder.style.display = 'block'; // maintain space
    } else {
        nav.classList.remove('is-sticky');
        placeholder.style.display = 'none';
    }
}


