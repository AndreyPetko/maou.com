$(document).ready(function() {

	var owl = $("#owl-demo");


  if(!owl.empty()) {
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

  // // Custom Navigation Events
  // $(".next").click(function(){
  // 	owl.trigger('owl.next');
  // })
  // $(".prev").click(function(){
  // 	owl.trigger('owl.prev');
  // })

  $( "#nav-mob-button" ).click(function() {
    $( "#nav-mob ul" ).toggle("slow");
  });
  $( ".dropdown-right" ).click(function() {
    $( this ).next().toggle();
  });
  $( "#nav-mob > ul li" ).click(function() {
    event.preventDefault();
    if($( this ).next().is('div')){
      $( this ).next().toggle('slow');
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


  // for(i=0; i<dropNav.length; i++){
  //   dropNav[i].addEventListener('mouseover', function(){
  //   alert(1);
// var dropNavDiv = this.nextSibling.nextSibling;
// console.log(dropNavDiv);
// dropNavDiv.style.display = "block";
// })
 // }
 
});