const sienceBtn = document.getElementById('si')
let sienceContent = document.querySelectorAll('.sience');

const cultureBtn = document.getElementById('cu')
let cultureContent = document.querySelectorAll('.culture');

const sportBtn = document.getElementById('sp')
let sportContent = document.querySelectorAll('.sport');

const techBtn = document.getElementById('te')
let techContent = document.querySelectorAll('.tech');

const DevelopersBtn = document.getElementById('de')
let  devContent = document.querySelectorAll('.devlopers');

const displayNone = (a,b,c,d) =>{

    for(let x of a) {
        x.style.display = "none";
    }
    for (let y of b) {
        y.style.display = "none";
    }
    for (let z of c) {
        z.style.display = "none";
    }
    for (let v of d) {
        v.style.display = "none";
    }

} 
/* for (let xs of x){
    //xs.style.display ="none";
} */

sienceBtn.onclick = function(){
    displayNone(cultureContent, sportContent, techContent, devContent);
    for (let sienceCon of sienceContent) {
        sienceCon.style.display = "block";
    }
}
cultureBtn.onclick = function () {
    displayNone(sienceContent, sportContent, techContent, devContent);
    for (let cultureCon of cultureContent) {
        cultureCon.style.display = "block";
    }

}
sportBtn.onclick = function () {
    displayNone(sienceContent, cultureContent, techContent, devContent);
    for (let sportCon of sportContent) {
        sportCon.style.display = "block";
    }


}
techBtn.onclick = function () {
    displayNone(sienceContent, sportContent, cultureContent, devContent);
    for (let techCon of techContent) {
        techCon.style.display = "block";
    }
}
DevelopersBtn.onclick = function () {
    displayNone(sienceContent, sportContent, techContent, cultureContent);
    for (let devCont of devContent) {
        devCont.style.display = "block";
    }
}