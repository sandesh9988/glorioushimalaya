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
       
});

