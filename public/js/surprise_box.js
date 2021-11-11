document.addEventListener('DOMContentLoaded', () => {

    const box = document.querySelector('.box'),
    emoji = document.querySelector('.emoji');
  
    let boxOpened = false;
  
    box.addEventListener('click', () => {
      if (!boxOpened) {
  
        /* Open box */
        boxOpened = true;
        box.classList.add('box-open');
          // emoji.textContent = '💍';
          box.style.setProperty('--boxFront', `'Veux-tu partir en escapade avec moi ?'`);
      }
    });
  
    if (location.pathname.includes('fullcpgrid')) setTimeout(() => box.click(), 250);
  });   