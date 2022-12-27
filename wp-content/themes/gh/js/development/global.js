$(function () {
  $(".hero__slider").slick({
    infinite: true,
    slidesToShow: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    nextArrow: ".icon-icon-left-arrow",
    prevArrow: ".icon-icon-right-arrow",
  });

  $('.fancy__slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 2,
    nextArrow: ".icon-icon_arrow-circle-left",
    prevArrow: ".icon-icon_arrow-circle-right",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  const hamburgerButton = document.querySelector(".menuBar__container");
  const popupMenu = document.querySelector(".header__navList");

  hamburgerButton.addEventListener("click", () => {
    popupMenu.classList.toggle("open");
  });

  const accordionItems = document.querySelectorAll(
    ".accordion__heading-wrapper"
  );

  accordionItems.forEach((item) => {
    const title = item.querySelector(".accordion__heading");
    const content = item.querySelector(".accordion__content");
    title.addEventListener("click", () => {
      content.style.display =
        content.style.display === "flex" ? "none" : "flex";
    });
  });

  //expand all and collapse all

  const expandAndCollapse = document.getElementById("expandCollapse");
  const collapses = document.querySelectorAll(".accordion__content");

  let isExpand = false;

  expandAndCollapse.addEventListener("click", () => {
    isExpand = !isExpand;

    if (isExpand) {
      expandAndCollapse.textContent = "Collapse All";
      collapses.forEach((collapsible) => {
        collapsible.style.display = "flex";
      });
    } else {
      expandAndCollapse.textContent = "Expand All";
      collapses.forEach((collapsible) => {
        collapsible.style.display = "none";
      });
    }
  });

  //popup image

  document
    .getElementById("popup-button")
    .addEventListener("click", function () {
      var popupImage = document.getElementById("popup-image");
      if (popupImage.style.display === "none") {
        popupImage.style.display = "block";
      } else {
        popupImage.style.display = "none";
      }
    });

  //faq section expand all and collapse js

  const expandCollapseButton = document.getElementById("expandCollapseButton");
  const collapsibles = document.querySelectorAll(".faq__content-description");

  let isExpanded = false;

  expandCollapseButton.addEventListener("click", () => {
    isExpanded = !isExpanded;

    if (isExpanded) {
      expandCollapseButton.textContent = "Collapse All";
      collapsibles.forEach((collapsible) => {
        collapsible.style.display = "block";
      });
    } else {
      expandCollapseButton.textContent = "Expand All";
      collapsibles.forEach((collapsible) => {
        collapsible.style.display = "none";
      });
    }
  });

  //js for faq accordion
  const faqItems = document.querySelectorAll(".faq__content");

  faqItems.forEach((item) => {
    const faqTitle = item.querySelector(".faq__content-heading");
    const faqContent = item.querySelector(".faq__content-description");
    faqTitle.addEventListener("click", () => {
      faqContent.style.display =
        faqContent.style.display === "block" ? "none" : "block";
    });
  });

  //review less and more

  const reviewsToggle = document.getElementById("reviewsToggle");
  const show = document.querySelectorAll(".reviews__more-comments");

  let isReview = false;

  reviewsToggle.addEventListener("click", () => {
    isReview = !isReview;

    if (isReview) {
      reviewsToggle.textContent = "Load More Reviews(30)";
      show.forEach((collapsible) => {
        collapsible.style.display = "none";
      });
    } else {
      reviewsToggle.textContent = "Load Less Reviews(30)";
      show.forEach((collapsible) => {
        collapsible.style.display = "block";
      });
    }
  });

  //active class of nav bar

  $(document).ready(function () {
    $(".tab-bar__link").click(function () {
      $(this).toggleClass("active");
    });
  });

  //slider for fancy section

});
