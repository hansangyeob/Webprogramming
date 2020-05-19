/*Topnav bar */
let NavLinks = document.querySelectorAll("nav ul li a");
let Sections = document.querySelectorAll("section");

let lastId;
let cur = [];

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  NavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if
     (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) 
    {
      link.classList.add("current");
    } 
    else
     {
      link.classList.remove("current");
    }
  });
});

/* changing syn area to joker*/
function booking_joker(){
  var str = document.getElementById("s-title").innerHTML;
  var res = str.replace("Movie title","Joker 18+");
  document.getElementById("s-title").innerHTML = res;
  var str = document.getElementById("s-title1").innerHTML;
  var res = str.replace("Movie title","Joker");
  document.getElementById("s-title1").innerHTML = res;
/*
  var str = document.getElementById("s-plot_description_contents-title").innerHTML;
  var res = str.replace("."," In 1981, party clown and aspiring stand-up comedian Arthur Fleck lives with his mother, Penny, in Gotham City. Gotham is rife with crime and unemployment, leaving swathes of the population disenfranchised and impoverished. Arthur suffers from a medical disorder that causes him to laugh at inappropriate times; he depends on social services for medication. After a gang of delinquents attacks Arthur in an alley, his co-worker, Randall, gives him a gun for protection. Arthur meets his neighbor, single mother Sophie Dumond, and invites her to his upcoming stand-up routine at a nightclub");
  document.getElementById("s-plot_description_contents-title").innerHTML = res1;
*/
 
}

/* changing syn area to terminator*/
function booking_terminator(){
  var str = document.getElementById("s-title").innerHTML;
  var res = str.replace("Movie title","Terminator 15+");
  document.getElementById("s-title").innerHTML = res;
  var str = document.getElementById("s-title1").innerHTML;
  var res = str.replace("Movie title","Terminator");
  document.getElementById("s-title1").innerHTML = res;

  /*
  ////////////////how can i replace ifram?//////////////////
  var iframe = iframe.getElementById("joker-trailer").innerHTML;
  var res = iframe.replace("joker-tailer","terminator-trailer");
  document.getElementById("joker-trailer").innerHTML = res;
*/
}

/* changing syn area to black panther*/
function booking_black_panther(){
  var str = document.getElementById("s-title").innerHTML;
  var res = str.replace("Movie title","Black panther 12+");
  document.getElementById("s-title").innerHTML = res;
  var str = document.getElementById("s-title1").innerHTML;
  var res = str.replace("Movie title","Black panther");
  document.getElementById("s-title1").innerHTML = res;
}

/* changing syn area to black panther*/
function booking_us(){
  var str = document.getElementById("s-title").innerHTML;
  var res = str.replace("Movie title","Us 15+");
  document.getElementById("s-title").innerHTML = res;
  var str = document.getElementById("s-title1").innerHTML;
  var res = str.replace("Movie title","Us");
  document.getElementById("s-title1").innerHTML = res;
}

/* disabling buttons based on condition of time*/ 

/* 
document.getElementById("button1").disabled = true;

function first_button(){
  var movie_time = Date(2020,4,06,18);
  var now_date = movie_time.getTime();
  if(now_date > movi_date) { 
    document.getElementById("button1").innerHTML = d;
    }
};
*/

/* disable buttons based on time*/

function first_booking_button(){

    var todayDate=new Date();
    var date=todayDate.getDate();
    var month=todayDate.getMonth()+1;
    var year=todayDate.getFullYear();
    var hours=todayDate.getHours();
    var movie_time = Date(2020,4,06,18);

    if(year != 2020){
    document.getElementById("button11").disabled = true;
    }else if(month <= 5){
      document.getElementById("button11").disabled = true;
    }else if(date <= 6){
      document.getElementById("button11").disabled = false;
    }else if(hours <= 18){
      document.getElementById("button11").disabled = false;
    }else{
      document.getElementById("button11").disabled = true;
    }

}

function second_booking_button(){
  var str = document.getElementById("movie_date_syn").innerHTML;
  var res = str.replace("date","13/May - 4pm");
  document.getElementById("movie_date_syn").innerHTML = res;


  var todayDate=new Date();
  var date=todayDate.getDate();
  var month=todayDate.getMonth()+1;
  var year=todayDate.getFullYear();
  var hours=todayDate.getHours();
  var movie_time = Date(2020,4,13,16);

  if(year != 2020){
  document.getElementById("button12").disabled = true;
  }else if(month < 5){
    document.getElementById("button12").disabled = true;
  }else if(date <= 13){
    document.getElementById("button12").disabled = false;
  }else if(hours <= 16){
    document.getElementById("button12").disabled = false;
  }else{
    document.getElementById("button12").disabled = true;
  }

}

function third_booking_button(){
  var str = document.getElementById("movie_date_syn").innerHTML;
  var res = str.replace("date","25/May - 7pm");
  document.getElementById("movie_date_syn").innerHTML = res;

  var todayDate=new Date();
  var date=todayDate.getDate();
  var month=todayDate.getMonth()+1;
  var year=todayDate.getFullYear();
  var hours=todayDate.getHours();
  var movie_time = Date(2020,4,25,19);

  if(year != 2020){
  document.getElementById("button13").disabled = true;
  }else if(month < 5){
    document.getElementById("button13").disabled = true;
  }else if(date <= 25){
    document.getElementById("button13").disabled = false;
  }else if(hours <= 19){
    document.getElementById("button13").disabled = false;
  }else{
    document.getElementById("button13").disabled = true;
  }

}

function forth_booking_button(){
  var str = document.getElementById("movie_date_syn").innerHTML;
  var res = str.replace("date","13/Jun - 2pm");
  document.getElementById("movie_date_syn").innerHTML = res;

  var todayDate=new Date();
  var date=todayDate.getDate();
  var month=todayDate.getMonth()+1;
  var year=todayDate.getFullYear();
  var hours=todayDate.getHours();
  var movie_time = Date(2020,5,13,14);

  if(year != 2020){
  document.getElementById("button13").disabled = true;
  }else if(month < 5){
    document.getElementById("button13").disabled = true;
  }else if(date <= 13){
    document.getElementById("button13").disabled = false;
  }else if(hours <= 14){
    document.getElementById("button13").disabled = false;
  }else{
    document.getElementById("button13").disabled = true;
  }

}


/* error message for wroung inputs*/ 
function error_message(){
  alert("Sorry! This is not avaliable anymore!")
}





function protect(){
  var protect_name = document.getElementById("name").innerText;
  document.getElementById("name").innerText = protect_name;

  var protect_email = document.getElementById("email").innerText;
  document.getElementById("email").innerText = protect_email;
  
  var protect_card = document.getElementById("Credit_Card").innerText;
  document.getElementById("Credit_Card").innerText = protect_card;
}
