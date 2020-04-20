
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
myButton.addEventListener("click",calculatePrice);
myButton.addEventListener("click",calculatePrice2);

var myP3 = document.getElementById("p3");
myp3.addEventListener("click",clickP3);