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
//slider for fancy section

  $('.fancy__slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 2,
    nextArrow: ".icon-LA",
    prevArrow: ".icon-RA",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
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
      reviewsToggle.textContent = "Load Less Reviews";
      show.forEach((collapsible) => {
        collapsible.style.display = "block";
      });
    }
  });

//rating 

document.querySelector('#rating-3').addEventListener('click', () => {
  document.querySelector('#rating-3').checked = true;
});

//rating accordion
const reviewsItems = document.querySelectorAll(".reviews__link");

  reviewsItems.forEach((item) => {
    const reviewsTitle = item.querySelector("#reviewsAccordion");
    const reviewsContent = item.querySelector(".reviews__link-form");
    reviewsTitle.addEventListener("click", () => {
      reviewsContent.style.display =
        reviewsContent.style.display === "block" ? "none" : "block";
    });
  });

//header search field

const searchItems = document.querySelectorAll(".header__search");

  faqItems.forEach((item) => {
    const searchBtn = item.querySelector(".header__search-button");
    const searchInput = item.querySelector(".header__search-field");
    searchBtn.addEventListener("click", () => {
      searchInput.style.display === "block" ? "none" : "block";
    });
  });

});
