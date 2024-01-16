import "./common";
import "bootstrap/js/dist/carousel"
import "bootstrap/js/dist/tab"
window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js')


const faqs = document.querySelectorAll('.faq-title').forEach(function(element) {
    element.addEventListener('click', function (e) {
        const content = this.nextElementSibling;
        content.style.display = 'block';
    });
});

const mobileMenu = document.querySelector('#mobile-menu');
const toggleMenu = document.querySelector('#mobile-toggle');
mobileMenu.addEventListener('click', function (e) {
    toggleMenu.classList.toggle("show");
});

const togglePlus = document.querySelectorAll('.toggle .plus').forEach(function (element) {
    element.addEventListener('click', function (e) {
        const subMenu = this.nextElementSibling;
        subMenu.classList.toggle("show");
    })
});

let url = location.href.replace(/\/$/, '');
if (location.hash) {
    const hash = url.split('#');
    const currentTab = document.querySelector('#myTab a[href="#' + hash[1] + '"]');
    const curTab = new bootstrap.Tab(currentTab);
    curTab.show();
    url = location.href.replace(/\/#/, '#');
    history.replaceState(null, null, url);
    setTimeout(() => {
        window.scrollTop = 0;
    }, 400);
}
// change url based on selected tab
const selectableTabList = [].slice.call(document.querySelectorAll('a[data-bs-toggle="tab"]'));
selectableTabList.forEach((selectableTab) => {
    const selTab = new bootstrap.Tab(selectableTab);
    selectableTab.addEventListener('click', function () {
        var newUrl;
        const hash = selectableTab.getAttribute('href');
        if (hash == '#where-all-tab') {
            newUrl = url.split('#')[0];
        } else {
            newUrl = url.split('#')[0] + hash;
        }
        history.replaceState(null, null, newUrl);
    });
});

