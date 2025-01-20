// header on scroll background
const header = document.querySelector("#header");
const resMenu = document.querySelector(".nav-links");

// toggle responsive menu
const navToggler = document.querySelector(".nav-toggler");
const toggleIcon = document.querySelector(".nav-toggler i");
const backdrop = document.querySelector(".backdrop-filter");

navToggler.addEventListener('click', () => {
  toggleIcon.classList.toggle('bx-x');
  resMenu.classList.toggle('show');
  backdrop.classList.toggle('show');
})

backdrop.addEventListener('click', () => {
  toggleIcon.classList.remove('bx-x');
  resMenu.classList.remove('show');
  backdrop.classList.remove('show');
})

//news ticker

document.addEventListener('DOMContentLoaded', function () {
  var newsItems = document.querySelectorAll('.news-item');
  var currentIndex = 0;

  function showNextNewsItem() {
      var nextIndex = (currentIndex + 1) % newsItems.length;

      newsItems[currentIndex].style.opacity = 0;

      setTimeout(function () {
          newsItems[currentIndex].style.display = 'none';
          newsItems[nextIndex].style.display = 'block';
          newsItems[nextIndex].style.opacity = 1;
          currentIndex = nextIndex;
      }, 500);

      setTimeout(showNextNewsItem, 5000);
  }

  showNextNewsItem();
});
