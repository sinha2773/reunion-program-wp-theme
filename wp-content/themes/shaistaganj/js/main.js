jQuery(document).ready(function($){

	// sub menu
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
    // hide all sub menus
    $(this).find('.dropdown-menu .dropdown-menu').stop(true, true);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
  });

  // sub of sub menu
  $('ul.dropdown-menu li.dropdown-submenu').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
  });

  // Image Carousel

  $(document).ready(function(){
    $('#imageCarousel').carousel();
  });

  //Scroll to Top
   $(window).scroll(function(){
    if($(this).scrollTop()>300){
      $('.scrolltoup').fadeIn();
    }
    else
    {
      $('.scrolltoup').fadeOut();
    }
   });   
   //Down to Up   
   $('.scrolltoup').click(function(){   
    $("html, body").animate({
    scrollTop:0},500)
   });

   // sideber contact form
    var x=0;
    $(".quote_form_button").click(function(){
      if(x==0){
        $(".quote_form").animate({"right":0},600)
        x=1;
        return false;
      }

      if(x==1){
        $(".quote_form").animate({"right":"-300px"},600)
          x=0;
      }
    });

    // Dynamic video ar janno

    $('.video_list li').click(function(){
        
        var video_src = $(this).attr('src');
        var video = $('#BannerVideo video')[0];
        video.src = video_src;
        video.load();
        video.play();
    }); 

    // Activate scrollspy menu 
    $('body').scrollspy({target: '#doc-nav', offset: 100});
    
    // Smooth scrolling 
    $('a.scrollto').on('click', function(e){
          //store hash
          var target = this.hash;    
          e.preventDefault();
      $('body').scrollTo(target, 800, {offset: 0, 'axis':'y'});
      
    });
    // Scroll Event
    $(window).scroll(function(){   
        if($(window).scrollTop() > 50){       
            $('body').addClass('fixed_header');
        }       
        else{           
            $('body').removeClass('fixed_header');    
        }       
    });

    //Radio button hide and show
    $("body #payment_method").on('click', function(){
        if ( $(this).val()=="bkash" || $(this).val()=="rocket" ){
          $(".bank_information").hide();
          $(".mobile_information").show();           
        }else{
          $(".bank_information").show();
          $(".mobile_information").hide();          
        }
    });

    // Scroll on top defult
    $(window).scrollTop(0);

    // Smart Wizard
    $('#smartwizard').smartWizard({ 
      selected: 0, 
      theme: 'dots',
      transitionEffect:'fade',
      toolbarSettings: {toolbarPosition: 'bottom',
        //toolbarExtraButtons: [btnFinish, btnCancel]
      },
      anchorSettings: {
          markDoneStep: true, // add done css
          markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
          removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
          enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
      }
    });

    $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        var elmForm = $("#form-step-" + stepNumber);
        // stepDirection === 'forward' :- this condition allows to do the form validation 
        // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
        if(stepDirection === 'forward' && elmForm){
            elmForm.validator('validate'); 
            var elmErr = elmForm.children('.has-error');
            if(elmErr && elmErr.length > 0){
                // Form validation failed
                return false;    
            }
        }
        return true;
    });

    $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
        // Enable finish button only on last step
        if(stepNumber == 3){ 
            $('.btn-finish').removeClass('disabled');  
        }else{
            $('.btn-finish').addClass('disabled');
        }
    });
});