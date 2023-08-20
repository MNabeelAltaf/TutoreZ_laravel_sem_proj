

//  opening admin panel for pressing a for 5 times
var c = 0;

function openAdmin() {


  document.addEventListener('keydown', function (e) {
    e.preventDefault();
    
    if (e.keyCode == 65) {

      c++;
      if (c == 5) {
        //key code for 'press a for 5 times'


        window.open('../AdminPanel/login.html');
        
        reloadThis();

      }
    }
  })
}

function reloadThis()
{
  window.location.reload();
}






// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", () => {
  navbar.classList.toggle("showInput");
  if (navbar.classList.contains("showInput")) {
    searchBox.classList.replace("bx-search", "bx-x");
  } else {
    searchBox.classList.replace("bx-x", "bx-search");
  }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function () {
  navLinks.style.left = "0";
}
menuCloseBtn.onclick = function () {
  navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function () {
  navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function () {
  navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function () {
  navLinks.classList.toggle("show3");
}




// ====== login

function login() {


  window.open('login.php');

}


// ===== register
function register() {
  window.open('register.php');
}
