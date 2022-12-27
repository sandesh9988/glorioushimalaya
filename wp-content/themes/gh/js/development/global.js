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

const expandAndCollapse = document.getElementById('expandCollapse');
const collapses = document.querySelectorAll('.accordion__content');

let isExpand = false;

expandAndCollapse.addEventListener('click', () => {
  isExpand = !isExpand;

  if (isExpand) {
    expandAndCollapse.textContent = 'Collapse All';
    collapses.forEach(collapsible => {
      collapsible.style.display = 'flex';
    });
  } else {
    expandAndCollapse.textContent = 'Expand All';
    collapses.forEach(collapsible => {
      collapsible.style.display = 'none';
    });
  }
});








//popup image

document.getElementById('popup-button').addEventListener('click', function() {
  var popupImage = document.getElementById('popup-image');
  if (popupImage.style.display === 'none') {
    popupImage.style.display = 'block';
  } else {
    popupImage.style.display = 'none';
  }
});



//faq section expand all and collapse js

const expandCollapseButton = document.getElementById('expandCollapseButton');
const collapsibles = document.querySelectorAll('.faq__content-description');

let isExpanded = false;

expandCollapseButton.addEventListener('click', () => {
  isExpanded = !isExpanded;

  if (isExpanded) {
    expandCollapseButton.textContent = 'Collapse All';
    collapsibles.forEach(collapsible => {
      collapsible.style.display = 'block';
    });
  } else {
    expandCollapseButton.textContent = 'Expand All';
    collapsibles.forEach(collapsible => {
      collapsible.style.display = 'none';
    });
  }
});


//js for faq accordion
const faqItems = document.querySelectorAll('.faq__content');

faqItems.forEach(item => {
  const faqTitle = item.querySelector('.faq__content-heading');
  const faqContent = item.querySelector('.faq__content-description');
  faqTitle.addEventListener('click', () => {
    faqContent.style.display = faqContent.style.display === 'block' ? 'none' : 'block';
  });
});

});

