

function changestate_one(){
 document.getElementById("login").style.display = "block";
 document.getElementById("signup").style.display = "none";
 document.getElementById("login").style.animationName = "scrollside";
 document.getElementById("login").style.animationDuration = "0.30s";
 document.getElementById("loginbutton").style.borderBottom = "1px solid rgba(128, 128, 128, 0.288)";
 document.getElementById("signupbutton").style.borderBottom = "none";
}

function changestate_two(){
 document.getElementById("login").style.display = "none";
 document.getElementById("signup").style.display = "block";
 document.getElementById("signup").style.animationName = "scrollside";
 document.getElementById("signup").style.animationDuration = "0.30s";
 document.getElementById("loginbutton").style.borderBottom = "none";
 document.getElementById("signupbutton").style.borderBottom = "1px solid rgba(128, 128, 128, 0.288)";
}