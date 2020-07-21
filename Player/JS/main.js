window.onresize = RemoveMobileMenu;
function RemoveMobileMenu(){
    if(window.innerWidth > 615){
        document.querySelector(".mobile-nav").style.display = "none";
    }
}

function MenuOnOff() {
    const nav = document.querySelector(".mobile-nav");
    if(nav.style.display === "block"){ 
        nav.style.display = "none";
    }
    else{
        nav.style.display = "block";
    }
}
/*function SearchOnOff {

}*/

// *** AUDIO PLAYER *** AUDIO PLAYER *** AUDIO PLAYER *** AUDIO PLAYER ***

// REPEAT BUTTON (FUNKTIONIERT NICHT!!!)
/*
document.getElementById("sound").onplaying = X;
function X(){
const sou = document.getElementById("sound");
const pla = document.getElementById("play");
const pau = document.getElementById("pause");
const repeat = document.getElementById("repeat");
if (sou.currentTime < sou.duration) {
    pla.style.display = "none";
    pau.style.display = "none";
    repeat.style.display = "block";
} else {}
}
*/

function playerOn() {
    const player = document.getElementById("audio-container");
    const sou = document.getElementById("sound");
    const sta = document.getElementById("start");
    const equ = document.getElementById("equalizer");
    player.style.display = "block";
    sta.style.display = "none";
    equ.style.display = "block";
    document.body.style.paddingBottom = player.offsetHeight + "px";
    /*da der Player in css fixed ist, muss man die Höhe des Players 
    als bottom-padding festlegen, damit alles sichtbar ist*/
    sou.play(); //automatisches Abspielen beim Klicken

}

function playerOff() {
    const player = document.getElementById("audio-container");
    const sou = document.getElementById("sound");
    const sta = document.getElementById("start");
    const equ = document.getElementById("equalizer");
    const pla = document.getElementById("play");
    const pau = document.getElementById("pause");
    pla.style.display = "none"; // weil 
    pau.style.display = "block"; //
    player.style.display = "none";
    sta.style.display = "block";
    equ.style.display = "none";
    document.body.style.paddingBottom = player.offsetHeight + "px";
    //entfernt den bottom-padding; plus, weil der player nun 0 px hoch ist und das soll dazuaddiert werden
    sou.pause();

}

function playerPlay() {
    const sou = document.getElementById("sound");
    const pla = document.getElementById("play");
    const pau = document.getElementById("pause");
    pla.style.display = "none";
    pau.style.display = "block";
    sou.play();

}

function playerPause() {
    const sou = document.getElementById("sound");
    const pla = document.getElementById("play");
    const pau = document.getElementById("pause");
    pla.style.display = "block";
    pau.style.display = "none";
    sou.pause();
}

function replay(){
    const sou = document.getElementById("sound");
    sou.currentTime -= 10; 
}

function forward(){
    const sou = document.getElementById("sound");
    sou.currentTime += 10; 
}
