/* main js file for my portfolio*/

//thema switcher
const button = document.querySelector(".theme-changer");
button.addEventListener("click", function(){
    const elements = document.querySelectorAll(".theme");   

for (let i = 0; i< elements.length; i++) { 
    const element= elements[i];
    element.classList.toggle("light-theme");
}}) 