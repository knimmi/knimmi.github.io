//display en buttons declareren
const buttons = document.querySelectorAll("button");
const display = document.querySelector(".display");

buttons.forEach(function(button) {

  button.addEventListener("click", calculate);

});
  //De som laten zien on de display
function calculate(event) {

  const clickedButtonValue = event.target.value;

  if (clickedButtonValue === "=") {

    if (display.value !== "") {

      display.value = eval(display.value);

    }
    
    //Calculator display leeg halen
  } else if (clickedButtonValue === "C") {

    display.value = " ";

  } else {

    display.value += clickedButtonValue;
  }
}