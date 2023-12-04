var countDownDate = new Date('dec 25 2023, 00:00:00').getTime();
var x = setInterval(function(){
    var now =new Date().getTime();
    var distance = countDownDate - now; 

    var days = Math.floor(distance / (1000 * 60 * 60 * 24)); 
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
},1000);

function projectdisp() {
    let x = document.getElementById("disp");
    if (x.style.display === 'block' ) {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}

//nav bar
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " resposive";
    } else {
      x.className = "tnav";
    }
  }


function getmenu() {
  let y = document.getElementById("menudtls");
  if (y.style.display == "none") { 
    y.style.display = "flex";  
  } 
  else {
    y.style.display = "none"; 
  }
}