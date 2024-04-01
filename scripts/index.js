const navItems = document.querySelector('.nav_items');
const openNavBtn = document.querySelector('#nav_open-btn');
const closeNavBtn = document.querySelector('#nav_close-btn');

const openNav = () => {
    navItems.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';
};
openNavBtn.addEventListener('click', openNav);

const closeNav = () => {
    navItems.style.display = 'none';
    closeNavBtn.style.display = 'none';
    openNavBtn.style.display = 'inline-block'
}
closeNavBtn.addEventListener('click', closeNav);

//Code to toggle the side bar in mobile screen sizes
const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show_sidebar');
const hideSidebarBtn = document.querySelector('#hide_sidebar');

const showSideBar = () => {
    sidebar.style.left= '0';
    showSidebarBtn.style.display='none';
    hideSidebarBtn.style.display= 'inline-block';
}
showSidebarBtn.addEventListener('click', showSideBar);

const hideSideBar = () => {
    sidebar.style.left= '-100%';
    showSidebarBtn.style.display='inline-block';
    hideSidebarBtn.style.display= 'none';
}
hideSidebarBtn.addEventListener('click', hideSideBar);