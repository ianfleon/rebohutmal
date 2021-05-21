const nav = document.getElementById('navku');
const navColl = document.getElementById('navbarNav');
const navTogg = document.querySelector('.navbar-toggler');
// console.log(nav);

navTogg.addEventListener('click', () => {
    nav.classList.add('bg-teal');
});

window.onscroll = () => {
    let s = window.scrollY;
    // console.log(s);
    if (s >= 104) {
        nav.classList.add('bg-teal');
    } else {
        nav.classList.remove('bg-teal');
    }
}