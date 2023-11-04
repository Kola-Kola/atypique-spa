
// let clickMenuCounter = 0;

const handleClickMenu = (event) => {
  const DOMMenu = document.querySelector('.menu-items');

  if (DOMMenu.style.display === 'block') {
    DOMMenu.style.display = 'none';
  } else {
    DOMMenu.style.display = 'block';
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const containerMenu = document.querySelector('#openBtn');

  containerMenu.addEventListener('click', handleClickMenu);
})