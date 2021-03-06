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
        $("#slider_infinite").on('click',function(){
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
    $(".register>form>fieldset>#leftProfile>.toggle>.toggle-label").css('width',genderWidth);

    /* photo slider JS*/

!function(a){a.Flader=function(b,c){var d={btns_classe:"",wrap_classe:"",slide_type:"slide",fixe_height:!1,speed:500,easing:"",mouse_event:"click",cycling_slide:!0,auto_slide:!1,auto_slide_delay:5e3,onSlide:function(){}},e=this;e.settings={};var g,h,i,j,k,l,m,n,o,f=a(b),b=b,p=!1,q=["slide","fade"],r=!1;e.init=function(){function o(){r=!1}e.settings=a.extend({},d,c),a.support.transition&&void 0!==a.fn.transition||(a.fn.transition=a.fn.animate),~a.inArray(e.settings.slide_type,q)||(e.settings.slide_type="slide"),e.settings.cycling_slide||"slide"!=e.settings.slide_type||(e.settings.auto_slide=!1),k=a('[data-function="slider_content"]',f).length?a('[data-function="slider_content"]',f):a("<div/>",{"data-function":"slider_content"}),l=a('[data-function="slider_item"]',f).addClass("slider_item"),g=a("<div/>",{"class":"slider_wrap"}),i=a("<button/>",{"class":"slider_nav left"}).addClass(e.settings.btns_classe).on(e.settings.mouse_event,function(){t("prev")}),j=a("<button/>",{"class":"slider_nav right"}).addClass(e.settings.btns_classe).on(e.settings.mouse_event,function(){t("next")}),k.addClass("slider_content"),f.append(g.append(k.append(l))),l.length>1&&f.append(g.append(i,j)),m=l.filter(".active"),(!m.length||m.length>1)&&(m=l.removeClass("active").first().addClass("active")),e.settings.cycling_slide||(h=null,0===m.index()&&(h=i.addClass("hide")),m.index()===l.length-1&&(h=j.addClass("hide")));var b=maxWidth=0,n=m.index();a.each(l,function(c){b=Math.max(b,a(this).outerHeight()),"slide"==e.settings.slide_type&&a(this).css({left:100.05*(c-n)+"%"})}),e.settings.fixe_height&&f.height(b),"mousehold"===e.settings.mouse_event&&(e.settings.easing="linear",i.on({mousedown:function(){r=!0,a(this).trigger("mousehold")},"mouseout mouseup":o}),j.on({mousedown:function(){r=!0,a(this).trigger("mousehold")},"mouseout mouseup":o})),f.addClass(e.settings.slide_type+" slider_container"),e.settings.auto_slide&&s()};var s=function(){o=setTimeout(function(){t()},e.settings.auto_slide_delay)},t=function(b){if(!p){void 0===b&&(b="next"),void 0!==o&&clearTimeout(o),m=l.filter(".active"),n=m[b]().length?m[b]():l.filter("next"===b?":first":":last");var c={current:m,follow:n};p=!0,a.when("fade"===e.settings.slide_type?u():v(b),e.settings.onSlide(c)).done(function(){m.removeClass("active"),p=!1,r&&t(b),e.settings.auto_slide&&!r&&s()})}},u=function(){return n.addClass("active").css({opacity:0,"z-index":20}).transition({opacity:1,duration:e.settings.speed,easing:e.settings.easing},function(){m.css({opacity:"0"}),n.css({"z-index":""})})},v=function(b){n.addClass("active"),n["next"===b?"before":"after"](m),l=a('[data-function="slider_item"]',f);var c=l.filter(m).index(),d=l.filter(n).index();return e.settings.cycling_slide||(null!==h&&h.removeClass("hide"),h=null,0===d&&(h=i.addClass("hide")),d===l.length-1&&(h=j.addClass("hide"))),l.each(function(b){a(this).css({left:100.05*(b-c)+"%"}).transition({left:100.05*(b-d)+"%",duration:e.settings.speed,easing:e.settings.easing})})};e.init()},a.fn.Flader=function(b){return this.each(function(){if(void 0==a(this).data("Flader")){var c=new a.Flader(this,b);a(this).data("Flader",c)}})}}(jQuery);

/* INITIALISE */
$('#fader').Flader({
        slide_type: 'fade',
        auto_slide: true
});
$('#slider_finite').Flader({
        fixe_height: true,
        cycling_slide: false
});
$('#slider_infinite').Flader({
        mouse_event: 'mousehold'
});

/* photo end */




});
