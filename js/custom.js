$(function(){
  //change header style when scroll down
  let changeHeader = function(){
   $(window).scroll(function(){
     let scroll = $(window).scrollTop();
 
     if(scroll > 0){
       $(".header").addClass(".smaller");
     } else {
       $(".header").removeClass(".smaller");
     }
   });
 }
 
 
   changeHeader();
 
 });