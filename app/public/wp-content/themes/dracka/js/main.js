const openBtn = document.querySelector('.hamburger');
const closeBtn = document.querySelector('.overlay-close');
const overlay = document.querySelector('.mobile-overlay');

openBtn.addEventListener('click', () => {
  overlay.classList.add('is-open');
  document.body.classList.add('no-scroll');
});

closeBtn.addEventListener('click', () => {
  overlay.classList.remove('is-open');
  document.body.classList.remove('no-scroll');
});
