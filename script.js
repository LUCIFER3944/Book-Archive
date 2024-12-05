/////////// jQuery/////////////////////////
$(document).ready(function(){
  $('.firsth1').animate({ top: 0 }, 2000); 
  $('.firstp1').animate({ left: 0 }, 2000);
});
/////////// End/////////////////////////


// let body3=document.body.childNodes[7].firstElementChild;
let body3first=document.getElementById("body3first")


body3.addEventListener("click",()=>{
  body3first.style.backgroundColor="black"
  body3first.style.color="white"
})
body3first.addEventListener("dblclick",()=>{
  body3first.style.backgroundColor="#ee9652ad"
  body3first.style.color="black"
})


