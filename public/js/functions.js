  function myFunction(x) {
    if (x.matches) {
      $(".off--canvas").removeClass("open-menu");
      $(".off--canvas").removeClass("open-menu1");
      $(".page-container,.page-wrapper,.td-header-wrap").removeClass("off-push-body1");
      $(".page-container,.page-wrapper").removeClass("off-push-body");
      $("body").removeClass("no-scroll");
      $(".top-level-nav__item,.dropdown").removeClass("open");
      $("body").removeClass("off-canvas-active");
      $(".nav-tabs").removeAttr("style");
      $(".classroom-layout--split-mode").addClass("classroom-layout--mobile-mode");
      $(".classroom-nav--compact-mode").addClass("classroom-nav--dark-mode");
      $(".classroom-nav").removeClass("classroom-nav--compact-mode").removeClass("classroom-nav--dark-mode");
      $(".artdeco-button--inverse").toggleClass("artdeco-button--muted");
      $(".artdeco-button--inverse #shire path").css("fill","#000");

      $br = $('#ember1964').remove();
      $('.classroom-nav__details').after($br);
      $(".classroom-nav__sidebar-toggle").removeClass("classroom-sidebar-toggle--dark-mode");
      $(".classroom-layout__header--shadow").addClass("added-class");
      $(".classroom-nav__details h1").removeClass("t-white");
      $(".classroom-nav__details h2").removeClass("t-white--light");



       $('.classroom-nav__sidebar-toggle').on('click', function() {
        if(!$('.classroom-layout__sidebar').is(':visible')){
            $(".classroom-layout__content" ).toggleClass('overflow');
            $(".classroom-layout__sidebar" ).toggleClass('classroom-layout__sidebar--visible');
            var $this = $(this);
            $this.toggleClass('classroom-layout__sidebar--visible').children('div').toggleClass('classroom-layout__sidebar--visible');
        } else {
            $(".classroom-layout__content" ).toggleClass('overflow');
            $(".classroom-layout__sidebar").toggleClass('classroom-layout__sidebar--visible');
            var $this = $(this);
            $this.toggleClass('classroom-layout__sidebar--visible').children('div').toggleClass('classroom-layout__sidebar--visible');
        }
      });

    }
    else {
      $(".off--canvas").removeClass("open-menu");
      $(".off--canvas").removeClass("open-menu1");
      $(".page-container,.page-wrapper").removeClass("off-push-body");
      $(".page-container,.page-wrapper,.td-header-wrap").removeClass("off-push-body1");
      $("body").removeClass("no-scroll");
      $(".top-level-nav__item,.dropdown").removeClass("open");
      $("body").removeClass("off-canvas-active");
      $("nav-tabs").removeAttr("style");
      $(".classroom-layout--split-mode").removeClass("classroom-layout--mobile-mode");
      $(".classroom-nav--compact-mode").removeClass("classroom-nav__details");
      $(".classroom-nav").addClass("classroom-nav--compact-mode").addClass("classroom-nav--dark-mode");
      $(".artdeco-button--inverse").toggleClass("artdeco-button--muted");
      $(".artdeco-button--inverse #shire path").css("fill","#fff");

      $br = $('#ember1964').remove();
      $('.classroom-nav__details').before($br);
      $(".classroom-nav__sidebar-toggle").addClass("classroom-sidebar-toggle--dark-mode");
      $(".artdeco-button--inverse").removeClass("artdeco-button--muted");

      $(".classroom-layout__header--shadow").removeClass("added-class");
      $(".classroom-nav__details h1").addClass("t-white");
      $(".classroom-nav__details h2").addClass("t-white--light");

       $('.classroom-nav__sidebar-toggle').on('click', function() {
        if(!$('.classroom-layout__sidebar').is(':visible')){
            $(".classroom-layout__sidebar" ).toggleClass('classroom-layout__sidebar--visible');
            $(".classroom-layout__content" ).toggleClass('overflow');
            var $this = $(this);
            $this.toggleClass('classroom-layout__sidebar--visible').children('div').toggleClass('classroom-layout__sidebar--visible');
        } else {
            $(".classroom-layout__sidebar").toggleClass('classroom-layout__sidebar--visible');
            $(".classroom-layout__content" ).toggleClass('overflow');
            var $this = $(this);
            $this.toggleClass('classroom-layout__sidebar--visible').children('div').toggleClass('classroom-layout__sidebar--visible');
        }
      });


      
    }
  }
  var x = window.matchMedia("(max-width: 992px)")
  myFunction(x)
  x.addListener(myFunction)



  function modalShow(name){
    if(name=='register'){
      $('#forgotModal').modal('hide');
      $('#loginModal').modal('hide');
      $('#registerModal').modal('show');
    }
    else if(name=='login'){
      $('#registerModal').modal('hide');
      $('#forgotModal').modal('hide');
      $('#loginModal').modal('show');
    }
    else if(name=='forgot'){
      $('#loginModal').modal('hide');
      $('#registerModal').modal('hide');
      $('#forgotModal').modal('show');
    }
    else{
      $('#forgotModal').modal('hide');
      $('#loginModal').modal('show');
      $('#registerModal').modal('hide');
    }
  }
  function a_is_mobile() {
    var isMobile = false;
    if ($('#mobiledetect').css('display') == 'none') {
      isMobile = true;
    }
    return isMobile;
  }



/*
  $("body").addClass("MODAL__modal-show-u51df48af");
*/

