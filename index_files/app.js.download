// Initialize Wow
AOS.init();

// sticky nav on scroll start

var navBar = document.getElementById('navBar');

window.onscroll = function () {

   if (window.scrollY > 60) {

      navBar.classList.add('scrolled');

   } else {

      navBar.classList.remove('scrolled');

   }

}
// sticky nav on scroll end

// modern nav start

const openNAvMenu = document.querySelector(".open-nav"),

   closeNAvMenu = document.querySelector(".close-nav"),

   NavMenu = document.querySelector(".nav-menu"),

   menuOverlay = document.querySelector(".menu-overlay"),

   mediaSize = 1024;



openNAvMenu.addEventListener("click", toggleNav);

closeNAvMenu.addEventListener("click", toggleNav);

menuOverlay.addEventListener("click", toggleNav);

function toggleNav() {

   NavMenu.classList.toggle("open");

   menuOverlay.classList.toggle("active");

   document.body.classList.toggle("hidden-scrolling");

}

NavMenu.addEventListener("click", (event) => {

   if (event.target.hasAttribute("data-toggle") &&

      window.innerWidth <= mediaSize) {

      const menuitemhaschildren = event.target.parentElement;

      if (menuitemhaschildren.classList.contains("active")) {

         collapseSubMenu();

      } else {

         if (NavMenu.querySelector(".menu-item-has-children.active")) {

            collapseSubMenu();

         }

         menuitemhaschildren.classList.add("active");

         const subMenu = menuitemhaschildren.querySelector(".sub-menu");

         subMenu.style.maxHeight = subMenu.scrollHeight + "px";

      }

   }



});

function collapseSubMenu() {

   NavMenu.querySelector(".menu-item-has-children.active .sub-menu")

      .removeAttribute("style");

   NavMenu.querySelector(".menu-item-has-children.active")

      .classList.remove("active");

}

// modern nav end






// tab form start

const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})
// tab form end




// Lazy Loader start
$(function () {
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy",
  });
});

// Lazy Loader end

// faqs

const accSingleTriggers = document.querySelectorAll('.js-acc-single-trigger');

accSingleTriggers.forEach(trigger => trigger.addEventListener('click', toggleAccordion));

function toggleAccordion() {
  const items = document.querySelectorAll('.js-acc-item');
  const thisItem = this.parentNode;

  items.forEach(item => {
    if (thisItem == item) {
      thisItem.classList.toggle('is-open');
      return;
    }
    item.classList.remove('is-open');
  });
}



// slick-slider

$('.partner-log').slick({
   dots: false,
   slidesToShow: 2,
   slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 1000,
  dots: false,
  arrows: false,
   responsive: [
     {
       breakpoint: 1024,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 1,
         infinite: true,
         dots: true
       }
     },
     {
       breakpoint: 700,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
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

 $('.partner-logo1').slick({
   dots: false,
   slidesToShow: 3,
   slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  dots: true,
  arrows: true
});

// counter

$(document).ready(function() {

  var counters = $(".count");
  var countersQuantity = counters.length;
  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function(start, value, id) {
    var localStart = start;
    setInterval(function() {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 4);
  }

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});


