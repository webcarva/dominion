//input: direction and screenwidth
//result - triggers carousel to slide and restarts the timer
function slideCarousel(direction, screenwidth)
{
    var new_direction = direction*-1;
    var new_offset = screenwidth;
    if (new_direction > 0)
    {
        new_offset = 0;
    }

    $('.gallery').stop().animate({"margin-left": new_offset*new_direction});

    setTimeout('slideCarousel('+new_direction+','+screenwidth+')', 6000);     
}

//once docoument is ready
$(document).ready(function () {
    
    //declare some useful things
    var doc = $(document);
    var win = $(window);
    
    // usually comes in handy to keep a note of these
    var width = win.width();
    var height = win.height();
    
    //store this here rather than get lost in hover functions
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
    
    //LOWER SLIDE MAGIC
    //number of slides - would come in handy if i was only going to show a capped number of bullets
    var total_entries = $(".slide").length;
    //this was my other thought but then i realised something
    //if there are 8 pictures and 4 remain visible - you only need to see 5 to reach the end of the slide
    //this logic works from browser but then i'd have to build responsive rules for each variation.
    //just tweaking this value total_entries-X where X is the number of bullets we don't need to see
    /*var bullets_overflow = 0;
    if (width > 950)
    {
        bullets_overflow = 3;
    }
    else if (width > 500 && width < 950)
    {
        bullets_overflow = 1
    }
    
    for (i = 0; i < (total_entries-bullets_overflow); i++) { 
        //etc
    }
    
    Makes perfect sense, would probably work fine but I like to play with chrome responsive by changing the page width...
    That would mean adding window resize events, and repopulating this each time which i didn't have time for on this occasion :(
    
    Next project maybe..
    
    */
    
    
    $('.slide').each(function(i) {
        //console.log(i);
        var content = $('.slides-nav').html();
        if (i === 0)
        {
            //active bullet
             $('.slides-nav').html(content + '<i class="fa fa-circle active" aria-hidden="true" rel="'+i+'"></i> ');   
        }
        else
        {
            //inactive
            $('.slides-nav').html(content + '<i class="fa fa-circle" aria-hidden="true" rel="'+i+'"></i> ');
        }
    });
    
    //start at 0
    var current_index = 0;
    //my slides
    var slider_entries = $('.slides');

    //onclicking a bullet 
    $('.slides-nav i').click(function(){
        //collect its index
        var nav_index = $(this).attr('rel');
        
        //call my function
        slideTo(nav_index);
        
        //removes the active class off all bulls
        $('.slides-nav i').removeClass('active');
        //add the active class to the clicked
        $(this).addClass('active');
        
        return false;
    });

    var slideTo = function(index){
        //if samesies - do nothing
        if(current_index == index) return;

        //calculate offset by multiplying the index by the item dimensions (this could have been collectec from the $('.slides .slide').width().... :/ )
        var left_offset = -1 * index * 240;
        //animate the offset
        slider_entries.stop().animate({"margin-left": left_offset}, 500);
        //set the new position to avoid further execution on - samesies ;)
        current_index = index;
    };
    
    //setting up top slider
    var direction = -1;
    //set the widths
    $('.gallery-item').width(width);
    //trigger the gallery routine
    setTimeout('slideCarousel('+direction+','+width+')', 5000);
});