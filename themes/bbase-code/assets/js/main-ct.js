jQuery(document).ready(function($) {
	$(".blockContentLinksWrapper-sc").click(function(){
        if($(this).hasClass("activeSub"))
        {
            $(this).removeClass("activeSub");
        }
        else
        {
            $(this).addClass("activeSub");
        }
    });
    $("#btn-nav-menu").click(function(){
        $(".menuSmallScreenWrapper-sc").addClass("activeMenu");
    });
    $("#close-nav-btn").click(function(){
        $(".menuSmallScreenWrapper-sc").removeClass("activeMenu");
    });
    $(".categoryGroupButton-sc").click(function(){
        if($(this).parents(".categoriesGroupWrapper-sc").hasClass("activeSubCat"))
        {
            $(this).parents(".categoriesGroupWrapper-sc").removeClass("activeSubCat");
        }
        else
        {
            $(this).parents(".categoriesGroupWrapper-sc").addClass("activeSubCat");
        }
        
    });
    $(".menuItem-sc").click(function(){
        if($(this).hasClass("activeSubMenu"))
        {
            $(this).removeClass("activeSubMenu");
        }
        else
        {
            $(this).addClass("activeSubMenu");
        }
        
    });
    $(".groupMenuWrapper-sc").click(function(){
        if($(this).next().hasClass("hiddenGroupMenu"))
        {
            $(this).removeClass("hiddenMenuContent");
            $(this).next().removeClass("hiddenGroupMenu");
        }
        else
        {
            $(this).addClass("hiddenMenuContent");
            $(this).next().addClass("hiddenGroupMenu");
        }
        
    });
    $(".itemWrapper-sc").click(function(){
        if($(this).hasClass("activeSubMenu2"))
        {
            $(this).removeClass("activeSubMenu2");
        }
        else
        {
            $(this).addClass("activeSubMenu2");
        }
        
    });
    $(".logedIn-sc").click(function(){
        if($(this).next().hasClass("activeDropdown"))
        {
            $(this).next().removeClass("activeDropdown");
        }
        else
        {
            $(this).next().addClass("activeDropdown");
        }
        
    });
    $(".itemWrapper-sc").click(function(){
       var href=$(this).attr("data-href");
       if(href)
       {
        window.location.href = href;
       }
        
    });
    $(".urlNavigation").click(function(){
        var href=$(this).attr("data-href");
        if(href)
        {
         window.location.href = href;
        }
         
     });
    $(".itemWrapper-sc").click(function(){
        var href=$(this).attr("data-href");
        if(href)
        {
         window.location.href = href;
        }
         
     });
     $(".myPageNavigate-sc").click(function(){
        var href=$(this).attr("data-href");
        if(href)
        {
         window.location.href = href;
        }
         
     });
     $(".button-sc").click(function(){
        var href=$(this).attr("data-href");
        if(href)
        {
         window.location.href = href;
        }
         
     });
     $(".item-navTop").click(function(){
        var tabSec=$(this).attr("data-sec");
        $('html, body').animate({scrollTop:$('#'+tabSec).position().top}, 'slow');
         
     });
	$(".logoImage-sc").click(function(){
        var href=$(this).attr("data-href");
        if(href)
        {
         window.location.href = href;
        }
         
     });
	$(document).mouseup(function(e) 
{
    var container = $("#dropDownUserLogin");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
         $("#dropDownUserLogin").removeClass("activeDropdown");
    }
});
	
	$(window).scroll(function(){
    var scroll = $(this).scrollTop();
        var topDist = $("#content").position();
        if (scroll > topDist.top) {
            $('.headerMain').addClass("menuFixed");
        } else {
             $('.headerMain').removeClass("menuFixed");
        }
  });
  $(".formSearch-sc .menuInput-sc").keyup(function(){
     if($(this).val()!="")
     {
        $(".buttonClose").removeClass("hidden");
     }
     else{
        $(".buttonClose").addClass("hidden");
     }
  });
  $(".buttonClose").click(function(e) {
        e.preventDefault();
        $(".formSearch-sc .menuInput-sc").val("");
  });
  $('.formSearch-sc').submit(function (event) {
    event.preventDefault();
    window.location.href = 'https://kurabun-ec-develop.vercel.app/search/'+$(".formSearch-sc .menuInput-sc").val();
    // do your logic
});
  $(window).load(function() {
   
    var deGreeSlide=0;
    setInterval(function() { 
       
      $(".announcementSlider-sc").css('transform', 'translate3d(calc('+deGreeSlide+'%), 0px, 0px)');
      if(deGreeSlide==-66.6666)
      {
          deGreeSlide=0;
      }
      else
      {
          deGreeSlide=deGreeSlide-33.3333;
      }
      
  }, 5000);
   });
  
});