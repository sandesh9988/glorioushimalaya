$(function () {
   
  $('.hero__slider').slick({
    infinite: true,
    slidesToShow: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    nextArrow: '.icon-icon-left-arrow',
    prevArrow: '.icon-icon-right-arrow'
}); 

const hamburgerButton = document.querySelector('.menuBar__container');
const popupMenu = document.querySelector('.header__navList');

hamburgerButton.addEventListener('click', () => {
  popupMenu.classList.toggle('open');
});

const accordionItems = document.querySelectorAll('.accordion__heading-wrapper');

accordionItems.forEach(item => {
  const title = item.querySelector('.accordion__heading');
  const content = item.querySelector('.accordion__content');
  title.addEventListener('click', () => {
    content.style.display = content.style.display === 'flex' ? 'none' : 'flex';
  });
});

//expand all and collapse all
const accordionHeaders = document.querySelectorAll('.accordion__heading');
const accordionContents = document.querySelectorAll('.accordion__content');

accordionHeaders.forEach(header => {
  header.addEventListener('click', e => {
    const content = header.nextElementSibling;
    content.classList.toggle('expanded');
  });
});

document.getElementById('expand-all').addEventListener('click', e => {
  accordionContents.forEach(content => {
    content.classList.add('expanded');
  });
});

document.getElementById('collapse-all').addEventListener('click', e => {
  accordionContents.forEach(content => {
    content.classList.remove('expanded');
  });

//change in buttons
const toggleButton = document.getElementById('expand-all');

toggleButton.addEventListener('click', function() {
  // Toggle the label of the button
  if (this.innerHTML === 'Expand All') {
    this.innerHTML = 'Collapse All';
  } else {
    this.innerHTML = 'Expand All';
  }

  // Expand or collapse the content
  const contentElements = document.querySelectorAll('.content');
  for (const element of contentElements) {
    if (element.style.display === 'none') {
      element.style.display = 'block';
    } else {
      element.style.display = 'none';
    }
  }
});

});







});