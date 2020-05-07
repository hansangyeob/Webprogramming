
function clickp3(){
    alert("click p3 ditected");
    event.stopImmediatePropagation();
    /* stopImmediatePropagation it will stop after everything after this function*/
}

var myP3 = document.getElementById("p3");
myP3.addEventListener("click",clickp3,true);