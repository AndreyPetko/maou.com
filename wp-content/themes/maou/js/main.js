$(document).ready(function() {


  $( "#nav-mob-button" ).click(function() {
    $( "#nav-mob-button" ).next().children('ul').toggle("slow");
  });
 


$( "#nav-mob ul > li a" ).click(function(event) {
    var nextItem = $(this).next();
    if(nextItem.hasClass('sub-menu')) {
      event.preventDefault();
      nextItem.toggle('slow');
    } ;

  
  });



$( "#right-menu ul > li a" ).click(function(event) {
    var nextItem = $(this).next();

    if(nextItem.hasClass('sub-menu')) {
      event.preventDefault();
      nextItem.toggle('slow');
    } 

  
  });

  var dropNav = document.getElementById('nav');
  var dropNavLi = dropNav.getElementsByTagName('li');
  for(i=0; i<dropNavLi.length; i++){
    dropNavLi[i].addEventListener('mouseover', function(){
     var dropDiv = this.querySelector('ul');
     if(dropDiv){
       dropDiv.style.display = 'block';

       dropDiv.addEventListener('mouseover', function(){
        dropDiv.style.display = 'block';
      })
       dropDiv.addEventListener('mouseout', function(){
        dropDiv.style.display = 'none';
      })
     }
   });
    dropNavLi[i].addEventListener('mouseout', function(){
     var dropDiv = this.querySelector('ul');
     if(dropDiv){
      dropDiv.style.display = 'none';
    }
  })
  }


 
});