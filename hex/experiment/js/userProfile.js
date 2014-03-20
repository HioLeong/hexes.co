$(document).ready(function() {

var leftColumnHeight = $('#leftColumn').height();
document.getElementById("rightColumn").style.height = leftColumnHeight-119+"px";

document.getElementById("scaleDiv").style.height = leftColumnHeight-119+"px";

$( "#blogsList" ).click(function() {
	document.getElementById("blogsListDiv").style.maxHeight = leftColumnHeight+1019+"px";
});


$( ".newBlogButton" ).click(function() {
	if ( $( ".viewBlogs" ).is( ":hidden" ) ) {
    	$( ".viewBlogs" ).slideDown( "slow" );
		$( ".newBlogs" ).hide();
  	} else {
		$( ".hideBR" ).css('display','none');
		$( ".newBlogs" ).css('visibility','visible');
		$( ".newBlogs" ).slideDown( "slow" );
    	$( ".viewBlogs" ).hide();
  	}
});

});
