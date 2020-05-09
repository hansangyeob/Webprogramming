/*Topnav bar */
let NavLinks = document.querySelectorAll("nav ul li a");
let Sections = document.querySelectorAll("section");

let lastId;
let cur = [];

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  NavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("current");
    } else {
      link.classList.remove("current");
    }
  });
});


/* buttons on syn 
var date1 = new Date("2020-05-06T16:00");
document.getElementById("button1").innerHTML = date1;
*/


/* 
function movieSchdule() {
  var now = new Date();
  var dateLimit = new Date("2020-06-10T15:00:00")
  if (now > dateLimit) {
      document.getElementById("button1").disabled = true;
  }
}

function adultNum(){
var 

}

*/
