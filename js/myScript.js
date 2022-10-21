let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nvaBar');


menu.onclick= () =>{
menu.classList.toggle('fa-times');
menu.classList.toggle('active');


}




// service starts 

window.onclick = () =>{
    menu.classList.remove('fa-times');
    menu.classList.remove('active');
    
    
    }


// service ends 


//home slide
var swiper = new Swiper(".home-slider", {
      loop:true,
      navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });




  //STAR READING OBJEXT HERE 

  // starReadin object , where everything is passed to ...
  var starRead = (function (){

     var starRead = function(args){


      var self = this;
      self.container = jQuery( '#' + args.containerId);
      self.containerId = args.containerId;
      self.starWidth = args.starWidth;
      self.starHeight = args.starHeight;
      self.ratingPercent = args.ratingPercent;


      self.containerWidth = args.starWidth;
      self.newRating = 0;
      self.canRate = args.canRate;
      self.starClass = 'sr-star' + self.containerId;



      self.draw();

  };

   starRating.prototype.draw = function(){

    var self = this;
    var pointerStyle = (self.canRate ? 'cursor:pointer': '');
     var startImg = '<img src = "star-5-256.png" style="width:' +self.starWidth+ 'px" />';
     var html = '<div style = "width :' + self.containerWidth + 'px; height : '+ self.starHeight + 'px; position:relative;'
      + pointerStyle + '">';

      
html = '< class="sr-star-bar '+self.containerWidth +'style = " width: '+self.ratingPercent+ ';background:#FFD700; height:100%;position:absolute; " > </div>';



  for ( var i = 0 ; i <5 ; i++ ) {


    var currStarStyle = 'position:absolute; margin-left: '+ self.starWidth + i + 'px';
    html +='<div class = "' +self.starClass + '"data-stars="' + (i +1 ) + '"style"'+
    currStarStyle+ '">' + startImg + '</div>';
  }
     html += '</div>';
     self.container.html(html);


   };




  return starRead;
  
}) ();

$( function(){

  var rating = new starRead({

    //parameters 

    containerId: 'stardiv',
    starWidth :100,
    starHeight:100,
    ratingPercent:'50%',
    canRate:false,
    onRate: function(){


              console.log(rating);
              alert('You rated' + rating.newRating + 'stars');

           }

 

  });

});



