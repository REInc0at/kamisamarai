let video = document.querySelector("#videoElement");
var div = document.getElementById('videoElement');
var display = 0;

if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function (stream) {
            video.srcObject = stream;
        })
        .catch (function (error) {
        console.log("There is an Error!");
        })
} else {
    console.log("getUserMedia not supported!");

}

let toggle = document.querySelector(".toggle");
let text = document.querySelector(".text");

function Animatedtoggle(){
    toggle.classList.toggle("active");

    if(toggle.classList.contains("active")){
        text.innerHTML = "OFF";
    }
    else{
        text.innerHTML = "ON";
    }
}

let title = (message)=>
{
    let msg=document.querySelector("#changeText");
    msg.innerText=message;
}
let first=document.querySelector("#Admin");
    first.addEventListener('click', function(){
        title("Admin Information");
    });
let second=document.querySelector("#Activity");
    second.addEventListener('click', function(){
        title("Admin's Activity");
    });
let third=document.querySelector("#Reports");
    third.addEventListener('click', function(){
        title("Reports");
    });
let fourth=document.querySelector("#Management");
    fourth.addEventListener('click', function(){
        title("Management");
    });

function hideShow()
{
    if(display == 1)
    {
    div.style.display = 'block';
    display = 0;
    }
    else
    {
    div.style.display = 'none';
    display = 1;
    }
}





