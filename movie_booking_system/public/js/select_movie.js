var TrandingSlider = new Swiper('.tranding-slider', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2.5,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

const buttons = document.querySelectorAll('.date-button');
let selectedButton = null;

function toggleColor(element) {
  if (selectedButton !== null && selectedButton != element) {
      selectedButton.classList.remove('selected');
  }

  element.classList.toggle('selected');
  selectedButton = element.classList.contains('selected') ? element : null;

  // get the index of the clicked button
  const index = parseInt(element.dataset.index);
  console.log('Clicked button index:', index);
}

// add event listener to each button
buttons.forEach(button => {
  button.addEventListener('click', () => {
      toggleColor(button);
  });
});

const buttons2 = document.querySelectorAll('.time-button');
let selectedButton2 = null;

function toggleColor2(element) {
  if (selectedButton2 !== null && selectedButton2 != element) {
      selectedButton2.classList.remove('selected');
  }

  element.classList.toggle('selected');
  selectedButton2 = element.classList.contains('selected') ? element : null;

  // get the index of the clicked button
  const index = parseInt(element.dataset.index);
  console.log('Clicked button index:', index);
}

// add event listener to each button
buttons2.forEach(button => {
  button.addEventListener('click', () => {
      toggleColor2(button);
  });
});