$(document).ready(function(){
  $(window).scroll(function(){
    if(this.scrollY > 20){
      $(".navbar").addClass("sticky");
      $(".goTop").fadeIn();
    }
    else{
      $(".navbar").removeClass("sticky");
      $(".goTop").fadeOut();
    }
  });

  $(".goTop").click(function(){scroll(0,0)});

  $('.menu-toggler').click(function(){
    $(this).toggleClass("active");
    $(".navbar-menu").toggleClass("active");
  });

    //thema switcher
  const button = document.querySelector(".theme-changer");
  button.addEventListener("click", function(){
    const elements = document.querySelectorAll(".theme");   

  for (let i = 0; i< elements.length; i++) { 
    const element= elements[i];
    element.classList.toggle("dark1");
}}) 
});

