$(document).ready(function() {
  $( "#nav-btn" ).click(function() {
	$( "nav" ).toggle( "slow" );
  });
  
  $('#userAccordion>li:gt(0)').find('h2 span').html('+').end()
	.find('div').hide();
	$('#userAccordion>li:eq(0)').addClass('open')
	.find('h2 span').html('&ndash;');
	
	var clickedImage = false;
	$('#userAccordion>li').on('click',function(){
		$("img").on('click',function(){
			clickedImage = true;
		});
		$("#blogsListDiv").on('click',function(){
			clickedImage = true;
		});
		if (clickedImage == false) {	
		  $('.open div').slideUp().removeClass('open');
		  $(this).addClass('open')
		  .find('h2 span').html('&ndash;').end()
		  .children('div').slideDown().end()
		  .siblings().removeClass('open')
		  .find('h2 span').html('+');
		}
		clickedImage = false;
  });  
  
// genderToggle fix
var genderWidth = $('.email').width();
genderWidth = (genderWidth / 2)*0.98;

alert(genderWidth+"lololol");
$(".register>form>fieldset>#leftProfile>.toggle>.toggle-label").css('width',genderWidth);

  
  
  // photo slider JS
  
	  var Slider = function(){
	  var total, $images, $slider, sliderWidth, increment = 100;
	  var rotation = 40;
	  var on = function(){
		$slider = $("slider");
		$images = $("slider img"),
		sliderWidth = $slider.width(),
		total = $images.length;
		position(); 
	  }
	  
	  var position = function(){
	   
		var sign, half = $(".active").index(), x = 0, z = 0, zindex,scaleX = 1.5,scaleY = 1.5, transformOrigin;
		 
		$images.each(function(index, element){
		  scaleX = scaleY = 1;
		  transformOrigin = sliderWidth/2;
		  if(index < half){
			sign = 1;
			zindex = index+1;
			x = sliderWidth/2 - increment*(half-index+1); 
			z =  -increment*(half-index+1);
			 
		  }else if(index > half){
			sign = -1
			zindex = total-index;
			x = sliderWidth/2 + increment*(index-half+1);
			z =  -increment*(index-half+1); 
	
		  }else{
			sign = 0; 
			zindex = total;
			x = sliderWidth/2;
			z = 1;
			scaleX = scaleY = 1.5;
			transformOrigin = "initial";
	
		  }  
		   
		  $(element).css(
			{ 
			  "transform": "rotate3d(0,"+sign+",0,"+rotation+"deg) translate3d("+calculateX(x, sign, 300)+"px,0,"+z+"px) scale3d("+scaleX+","+scaleY+",1)",
			  "z-index": zindex,
			  "transform-origin-x": transformOrigin
			} 
		  );   
		  
		});
	  };
	  
	  
	  var calculateX = function(position, sign, width){
		switch(sign){
		  case 1:
		  case 0: return position-width/2;
		  case -1: return position-width/2; 
		}
	  }
	  var imageSize = function(){
		 return $slider.width()/3;
	  }   
	  
	  var recalculateSizes = function(){      
		sliderWidth = $slider.width();
		position(); 
	  }
	  var clickedImage = function(){
		$(".active").removeClass("active");
		$(this).addClass("active");
		position();
	  }
	  var addEvents = function(){
		$( window ).resize(recalculateSizes);
		$(document).on("click","img", clickedImage);
	  }
	 
	  return {
			init: function() {
				on();
				addEvents();
			}
	
		};
	}();
	
	$(function(){
	  var slider = Slider.init();
	})
	
	
});
