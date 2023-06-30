var TrandingSlider = new Swiper(".tranding-slider", {
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
          }s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li"
);
mobileNavbar.init();

var slides = [
  {
    img: "imagens/streaming/air.png",
    text: "Air: A História por Trás do Logo",
  },
  {
    img: "imagens/streaming/creed3.png",
    text: "Creed III",
  },
  {
    img: "imagens/streaming/excluidos.png",
    text: "Excluídos",
  },
  {
    img: "imagens/streaming/luther1.png",
    text: "Luther - o Cair da Noite",
  },
];

var currentSlide = 0

function slidePass() {
  var text = document.getElementById("slidertext");
  var img = document.getElementById("sliderimg");
  text.textContent = slides[currentSlide].text;
  img.setAttribute("src", slides[currentSlide].img);
  currentSlide++;
  if (currentSlide >= 4) {
    currentSlide = 0;
  }
  

  setTimeout(slidePass, 8000);
}

onload = slidePass;