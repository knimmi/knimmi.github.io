/* main js file for my portfolio*/

const button = document.querySelector(".theme-changer")

button.addEventListener("click", function(){for (let i = 0; i< elements.length; i++) { 
    const element= elements[i];
    element.classList.toggle("light-theme");
}})
    const elements = document.querySelectorAll(".theme")