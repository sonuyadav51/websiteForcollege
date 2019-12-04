$(document).ready(function(){
   $('.togglerbtn').on('click',function(){
       $('.toggle-content').toggleClass("d-none"); 
   });
    $('.about').on('click',function(){
        $(this).addClass("act");
        $('.home').removeClass("act");
        $('.career').removeClass("act");
       
       $('.aboutmenu').toggleClass("d-none"); 
        $('.careermenu').addClass("d-none"); 
    });
     $('.career').on('click',function(){
         $(this).addClass("act");
        $('.home').removeClass("act");
          $('.about').removeClass("act");
       $('.careermenu').toggleClass("d-none"); 
         $('.aboutmenu').addClass("d-none"); 
    });
    $('.home').click(function(){
         $(this).addClass("act");
        $('.about').removeClass("act");
        $('.career').removeClass("act");
         $('.aboutmenu').addClass("d-none"); 
         $('.careermenu').addClass("d-none"); 
    });
    
  
   
});