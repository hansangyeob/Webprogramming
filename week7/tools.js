
function calcuatePrice(){
    alert("Calculate Price")
}

function calcuatePrice2(){
    alert("Calculate Price2")
}

function clickP3(){
    alert("Calculate Price3")
}

var myButton= document.getElementById("price2");
myButton.onclick = calcuatePrice2;

var myButton= document.getElementById("price3");
myButton.addEventListener("click",calcuatePrice2);

var myp3 = document.getElementById("p3");
myp3.addEventListener("click",clickP3,true);