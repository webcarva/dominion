function slideCarousel(direction, screenwidth)
{
    var new_direction = direction*-1;
    var new_offset = screenwidth;
    if (new_direction > 0)
    {
        new_offset = 0;
    }

    $('.gallery').stop().animate({"margin-left": new_offset*new_direction});

    setTimeout('slideCarousel('+new_direction+','+screenwidth+')', 5000);     
}

$(document).ready(function () {
    var doc = $(document);
    var win = $(window);

    var width = win.width();
    var height = win.height();
    
    var origimage;

    $( "nav li" ).hover(
      function() {
          var img = $('img',this);
          origimage = img.attr('src');
          src = origimage.replace(".png","-purple.png");
          img.attr('src',src);
      }, function() {
          var img = $('img',this);
          img.attr('src',origimage);
      }
    );    
    
    var total_entries = $(".slide").length;
    //for (i = 0; i < (total_entries-3); i++) { 
    $('.slide').each(function(i) {
        //console.log(i);
        var content = $('.slides-nav').html();
        if (i === 0)
        {
             $('.slides-nav').html(content + '<i class="fa fa-circle active" aria-hidden="true" rel="'+i+'"></i> ');   
        }
        else
        {
            $('.slides-nav').html(content + '<i class="fa fa-circle" aria-hidden="true" rel="'+i+'"></i> ');
        }
    });
    //}
    
    var current_index = 0;
    var slider_entries = $('.slides');

    $('.slides-nav i').click(function(){
        var nav_index = $(this).attr('rel');
        slideTo(nav_index);
        
        $('.slides-nav i').removeClass('active');
        $(this).addClass('active');
        return false;
    });

    var slideTo = function(index){
        if(current_index == index) return;

        var left_offset = -1 * index * 240;
        slider_entries.stop().animate({"margin-left": left_offset}, 500);
        current_index = index;
    };
    
    var direction = -1;
    
    $('.gallery-item').width(width);
    setTimeout('slideCarousel('+direction+','+width+')', 5000);
});