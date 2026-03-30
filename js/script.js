const bodyElm = document.querySelector('body');
const hamBtn = document.getElementById('js-ham-btn');
hamBtn.addEventListener('click', () => {
  bodyElm.classList.toggle('is-open');
});

// document.addEventListener('DOMContentLoaded', () => {
//   const bodyElm = document.querySelector('body');
//   const hamBtn = document.getElementById('js-ham-btn');
//   if (hamBtn) {
//     hamBtn.addEventListener('click', () => {
//       bodyElm.classList.toggle('is-open');
//     });
//   }
// });