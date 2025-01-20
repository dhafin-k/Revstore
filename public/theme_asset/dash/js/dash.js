let sideMenu = document.querySelector("#menu"); // side menu
let menuToggler = document.querySelector("#hideshow"); // hamburger icon
let menuTogglerLg = document.querySelector(".menu-toggle-btn.lg"); // hamburger icon for large device
let menuWrap = document.querySelector(".insideScroll"); // menu wrapper
let overlay = document.querySelector(".responsive-overlay"); // responsive overlay
let tabWidth = window.matchMedia("(max-width: 768px)"); // tablet width

menuTogglerLg.addEventListener("click", () => {
  sideMenu.classList.toggle("hide-lg");
});

menuToggler.addEventListener("click", () => {
  sideMenu.classList.toggle("hide");

  if (tabWidth.matches) {
    overlay.classList.toggle("show");
  }
});

overlay.addEventListener("click", () => {
  if (tabWidth.matches) {
    sideMenu.classList.add("hide");
    overlay.classList.remove("show");
  }
});

function overlayHide() {
  if (sideMenu.classList.contains("hide")) {
    overlay.classList.remove("show");
  }
}

// side menu and close icon auto hide on tablet device
window.addEventListener("resize", function () {
  if (window.innerWidth < 768) {
    sideMenu.classList.add("hide"); // side menu
  } else {
    sideMenu.classList.remove("hide");
  }

  overlayHide();
});

function initActiveMenu() {
  // === following js will activate the menu in left side bar based on url ====
  $(".insideScroll a").each(function () {
    var pageUrl = window.location.href.split(/[?#]/)[0];
    if (this.href == pageUrl) {
      $(this).addClass("active");
      $(this).parent().addClass("mm-active"); // add active to li of the current link
      $(this).parent().parent().addClass("mm-show");
      $(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
      $(this).parent().parent().parent().addClass("mm-active");
      $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
      $(this)
        .parent()
        .parent()
        .parent()
        .parent()
        .parent()
        .addClass("mm-active");
    }
  });
}

initActiveMenu();

// jquery for toggle sub menus

$(document).ready(function () {
  $(".sub-btn").click(function () {
    $(this).next(".sub-menu").slideToggle();
    $(this).find(".dropdown").toggleClass("rotate");
  });
});

// jquery for toggle sub menu 2

$(document).ready(function () {
  $(".sub-btn-two").click(function () {
    $(this).next(".sub-menu-two").slideToggle();
    $(this).find(".dropdown").toggleClass("rotate");
  });
});