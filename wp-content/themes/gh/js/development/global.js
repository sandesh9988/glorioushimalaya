$(function () {
   
    $(".menu-btn").click(
        function() {
          $(".menuBar__container").toggleClass("disBtn");
          
          $(".menuBar__container").toggleClass("enCross");
          
          $('.container').toggleClass('showPanel');
        }
      );
      
       
});