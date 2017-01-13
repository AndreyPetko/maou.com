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
    var arrowUp = document.getElementById("arrow-up");
  window.onscroll = function() {

    var pageY = window.pageYOffset || document.documentElement.scrollTop;
    if (pageY > 300) {
      arrowUp.style.display ="block";
    }
    else{
      arrowUp.style.display ="none";
    };
  }

  arrowUp.addEventListener('click', function(){
    var body = $("html, body");
    body.stop().animate({scrollTop:0}, '500', 'swing');
  });

  var owl = $("#owl-demo");
  if(owl){
  // if(!owl.empty()) {
    owl.owlCarousel({
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      pagination : true,
      itemsTablet: [600,1], //2 items between 600 and 0
      // navigation: true,
      // navigationText: ['svf', 'vfdv'],
     itemsMobile : [350,1] // itemsMobile disabled - inherit from itemsTablet option
   });
    owl.trigger('owl.play',3000);
  }


});