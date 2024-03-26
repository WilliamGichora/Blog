const navItems = document.querySelector('.nav_items');
const openNavBtn = document.querySelector('#nav_open-btn');
const closeNavBtn = document.querySelector('#nav_close-btn');

const openNav = () => {
    navItems.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';
};
openNavBtn.addEventListener('click', openNav);

const closeNav=()=>{
    navItems.style.display= 'none';
    closeNavBtn.style.display='none';
    openNavBtn.style.display = 'inline-block'
}
closeNavBtn.addEventListener('click', closeNav);