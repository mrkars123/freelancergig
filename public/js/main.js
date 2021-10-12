$(function(){

  'usd strict';
  
  $('html').click(function(e) {
    if ($(e.target).closest('.site-header__left-oc-trigger1,.site-header__right-oc-trigger').length === 0 && $(e.target).closest('.navbar').length === 0) 
      {
        $(".off--canvas").removeClass("open-menu");
        $(".off--canvas").removeClass("open-menu1");
        $(".page-container,.page-wrapper,.novation-order").removeClass("off-push-body");
        $(".page-container,.page-wrapper,.novation-order").removeClass("off-push-body1");
        $("body").removeClass("no-scroll");
        $("body").removeClass("off-canvas-active");
      }
  });
  
  $('.site-header__left-oc-trigger').click(function(){
    $(".canvas-server").toggleClass("open-menu1");
    $(".page-container,.page-wrapper,.novation-order,.td-header-wrap").toggleClass("off-push-body1");
    $("body").toggleClass("off-canvas-active");
    $("body").toggleClass("no-scroll");
  });
  $('.site-header__right-oc-trigger').click(function(){
    $('.canvas-server1').toggleClass('open-menu');
    $('.page-container,.page-wrapper,.novation-order,.td-header-wrap').toggleClass('off-push-body');
    $("body").toggleClass("off-canvas-active");
    $('body').toggleClass('no-scroll');
  });
  $(document).on('click', '.mobile-menu-container .close', function() {
    $(".off--canvas").removeClass("open-menu1");
    $(".page-container,.page-wrapper").removeClass("off-push-body1");
    $("body").removeClass("no-scroll");
    $("body").removeClass("off-canvas-active");
  });
  $(document).on('click', '.proper .room-list-item', function() {
    $(".main-body-col1").removeClass("d-none d-md-block");
    $("#room-navx").addClass("d-none d-md-block");
  });
  $(document).on('click', '.back-arrow', function() {
    $(".main-body-col1").removeClass("d-none d-md-block");
    $("#room-mainx").addClass("d-none d-md-block");
  });
  $(document).on('click', '.grid-switch-icons .layout_icon', function() {
    $(this).parents('.grid-switch-icons').find('.layout_icon').removeClass('active');
    $(this).addClass('active');
    var boxWrapper = $(this).parents('.roots_listing_wrapper');
    var defaultCol = boxWrapper.find('.awesome_card_2').attr('data-col');
    boxWrapper.removeClass('gridview listview');
    boxWrapper.find('.awesome_card_2').removeClass('col-md-12 col-md-3 col-lg-3 col-sm-6 col-md-4 col-lg-4');
    if ($(this).hasClass('list')) {
      boxWrapper.addClass('listview');
      boxWrapper.find('.awesome_card_2').addClass('col-md-12');
    } else {
      boxWrapper.find('.awesome_card_2').addClass(defaultCol);
      boxWrapper.addClass('gridview');
    }
  });
  $(document).on('click', '.nh-right .nt-order', function() {
    $('.nh-right .onsite-orders__dropdown').toggle();
  });
  $(document).on('click', '.nh-right .nt-notification', function() {
    $('.nh-right .onsite-notifications__dropdown').toggle();
  });
  $(document).on('click', '.nh-right .nt-message', function() {
    $('.nh-right .onsite-message__dropdown').toggle();
  });
  $(document).on('click', '.column .nt-heart', function() {
    $(".nh-right").find('.onsite-hart__dropdown').toggleClass("showing");
  });
  $(document).on('click', '.profile-dropdown-wrapper .profile-link', function() {
    $('.profile-dropdown-wrapper .onsite-profile__dropdown').toggle();
  });
  $(document).on('click', '.short-dropdown-wrapper .dropdown-toggle', function(e) {
    e.preventDefault();
    $('.short-dropdown-wrapper .dropdown-menu').toggle();
  });
  $(document).on('click', '.search-icon', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $('.instant-search-panel').toggle();
  });
  $(document).on('click', '.menu-toggle', function(e) {
    e.preventDefault();
    $('.chat-action-popup').toggle();
  });
  $(document).on('click', '.image-container .opacity', function(e) {
    e.preventDefault();
    $('.root-portfolio-slider-full').toggle();
  });
  $('.root-slider-fullscreen-link').click(function () {
    $('.root-image-slider-full').fadeIn();
  });
  $('.close-root-slider-fullscreen-link').click(function () {
    $('.root-image-slider-full').fadeOut();
  });
  $(document).on('click', '.variable-dropdown .dropdown-menu a', function() {
    var thisele1 = $(this);
    var activeid = thisele1.attr('data-target');
    $(".dropdown-menu li,.dropdown-menu a").removeClass("active");
    $(this).addClass("active");
    $('.variable-dropdown button span:first-child').html(thisele1.html());
  });
  $(document).on('click', '.pro-description-see-more', function(e) {
    e.preventDefault()
    $(this).parents('.pro-description, .root-author-desc').find(".short-desc").hide();
    $(this).parents('.pro-description, .root-author-desc').find(".full-desc").show();
    return false;
  });
  $(document).on('click', '.js-see-more', function(e) {
    e.preventDefault();
    $(this).parents('.BodyRow,.dp-banner').find('.text-wrap').removeClass("ellipsis");
    return false;
  });
  $(document).on('click', '.fancy-tabs3 .selected-tab,.fancy-tabs1 .selected-tab,.fancy-tabs .selected-tab', function(e) {
    e.preventDefault();
    $('.fancy-tabs3 ul.nav-tabs').toggle();
    $('.fancy-tabs1 ul.nav-tabs').toggle();
    $('.fancy-tabs ul.nav-tabs').toggle();
    
  });
  $(document).on('click', '.fancy-tabs1 a,.fancy-tabs3 a,.fancy-tabs a', function() {
    var thisele = $(this);
    var thisparent = $(this).parent('li');
    var activeid = thisele.attr('data-toggle');
    $(this).parents('.fancy-tabs1').find('li').removeClass('active');
    $(this).parents('.fancy-tabs').find('li').removeClass('active');
    $(this).parents('.fancy-tab3').find('li').removeClass('active');
    thisparent.addClass('active');
    $('.fancy-tabs1 .selected-tab,.fancy-tabs3 .selected-tab,.fancy-tabs .selected-tab').html(thisele.html());
    $('.fancy-tabs-wrpper').find('.fancy-tab-content#' + activeid).addClass('active');
  });
  $(document).mouseup(function(e) {
    var notificationsdropdownbox1 = $(".profile-dropdown-wrapper .onsite-profile__dropdown");
    var notificationsdropdownlink1 = $(".profile-dropdown-wrapper .profile-link");
    if (!notificationsdropdownlink1.is(e.target) && notificationsdropdownlink1.has(e.target).length === 0 && !notificationsdropdownbox1.is(e.target) && notificationsdropdownbox1.has(e.target).length === 0) {
      notificationsdropdownbox1.hide();
    }
    var orderdropdownbox = $(".nh-right .onsite-orders__dropdown");
    var orderdropdownlink = $(".nh-right .nt-order");
    if (!orderdropdownlink.is(e.target) && orderdropdownlink.has(e.target).length === 0 && !orderdropdownlink.is(e.target) && orderdropdownlink.has(e.target).length === 0) {
      orderdropdownbox.removeAttr("style");
    }
    var notificationsdropdownbox = $(".nh-right .onsite-notifications__dropdown");
    var notificationsdropdownlink = $(".nh-right .nt-notification");
    if (!notificationsdropdownlink.is(e.target) && notificationsdropdownlink.has(e.target).length === 0 && !notificationsdropdownbox.is(e.target) && notificationsdropdownbox.has(e.target).length === 0) {
      notificationsdropdownbox.hide();
    }
    var messagesdropdownbox = $(".nh-right .onsite-message__dropdown");
    var messagesdropdownlink = $(".nh-right .nt-message");
    if (!notificationsdropdownlink.is(e.target) && messagesdropdownlink.has(e.target).length === 0 && !messagesdropdownbox.is(e.target) && messagesdropdownbox.has(e.target).length === 0) {
      messagesdropdownbox.hide();
    }
    var hartdropdownbox = $(".nh-right .onsite-hart__dropdown");
    var hartdropdownlink = $(".nh-right .nt-hart");
    if (!hartdropdownlink.is(e.target) && hartdropdownbox.has(e.target).length === 0 && !hartdropdownlink.is(e.target) && hartdropdownbox.has(e.target).length === 0) {
      hartdropdownbox.hide();
    }
    var shortdropdownbox = $(".short-dropdown-wrapper .dropdown-menu");
    var shortropdownlink = $(".short-dropdown-wrapper .dropdown-toggle");
    if (!shortropdownlink.is(e.target) && shortropdownlink.has(e.target).length === 0 && !shortropdownlink.is(e.target) && shortropdownlink.has(e.target).length === 0) {
      shortdropdownbox.hide();
    }
    var actionpopupbox = $(".chat-action-popup");
    var actionpopuplink = $(".button-link");
    if (!actionpopuplink.is(e.target) && actionpopuplink.has(e.target).length === 0 && !actionpopuplink.is(e.target) && actionpopuplink.has(e.target).length === 0) {
      actionpopupbox.hide();
    }
    var rootimageslider1 = $(".root-portfolio-slider-full");
    var rootimageslider2 = $(".image-container .opacity");
    if (!rootimageslider2.is(e.target) && rootimageslider2.has(e.target).length === 0 && !rootimageslider2.is(e.target) && rootimageslider2.has(e.target).length === 0) {
      rootimageslider1.hide();
    }
    var search1 = $(".instant-search-panel");
    var search2 = $("form.search-icon");
    if (!search2.is(e.target) && search2.has(e.target).length === 0 && !search2.is(e.target) && search2.has(e.target).length === 0) {
      search1.hide();
    }
  
    if (a_is_mobile()) {
      var fancyTabs = $(".fancy-tabs1 .selected-tab");
      if (!fancyTabs.is(e.target)) {
          $('.fancy-tabs1 ul.nav-tabs').removeAttr("style");
      }
    }
     if (a_is_mobile()) {
      var fancyTabs = $(".fancy-tabs3 .selected-tab");
      if (!fancyTabs.is(e.target)) {
          $('.fancy-tabs3 ul.nav-tabs').removeAttr("style");
      }
    }
    if (a_is_mobile()) {
      var fancyTabs = $(".fancy-tabs .selected-tab");
      if (!fancyTabs.is(e.target)) {
          $('.fancy-tabs ul.nav-tabs').removeAttr("style");
      }
    }
  
  });
  
  $('.scroll-btn').on('click', function() {
    var target = $(this).attr('data-target');
    if ($(this).hasClass('control-prev')) {
      $('.' + target).animate({
          scrollLeft: '-=500'
      }, 500);
    }
    if ($(this).hasClass('control-next')) {
      $('.' + target).animate({
          scrollLeft: '+=500'
      }, 500);
    }
  });
  
  
  $(".js-filter-sidebar-button").on("click", function(e) {
    e.preventDefault();
    var t  = $(".js-filter-sidebar-group");
    t.hasClass("slide") ? t.removeClass("slide") : t.addClass("slide")
  });
  
  
  $(".CheckoutSummary2m7gb").on("click", function(){
    $(this).find(".PromoCode i").toggleClass("fa-angle-right fa-angle-down");
    $(".PromoCode-3CJCE").toggle();
  });
  
  
  $(".slide-container .closed").click(function(){
    $(".slide-container").removeClass("opened");
  });
  $("label[for='paypal'").click(function(){
    if($("input[type='radio'].pph-custom-input:checked+label:after")){
      $("#add-account-container").removeClass("opened");
      $("#add-account-form-container").addClass("opened");
    }
  });
  $("label[for='payoneer'").click(function(){
    if($("input[type='radio'].pph-custom-input:checked+label:after")){
      $("#add-account-container").removeClass("opened");
      $("#fakke").toggleClass("opened");
    }
  });
  $(".slide-container .click-close").click(function(){
    $("#add-account-form-container").removeClass("opened");
    $("#add-account-container").toggleClass("opened");
  });
  $(".slide-container .click-close1").click(function(){
    $("#fakke").removeClass("opened");
    $("#add-account-container").toggleClass("opened");
  });
  $(".call-to-action").click(function(){
    $("#add-account-container").toggleClass("opened");
  });
  $(".panel-heading .call-to-action1").click(function(e){
    e.preventDefault();
    $(".panel-collapse").toggle();
  });
  $(".image-container").hover(function() {
  });
  $('#toggle-reviews').click(function() {
    var button = this;
    $('#feedbacks-list-container').toggle();
    if ($('#feedbacks-list-container').is(':visible')) {
      $(button).text("Hide Reviews");
    } else {
      $( button).text("Show Reviews (1,202)");
    }
  });
  $(document).on('click', '.add_more_video', function() {
    $('.video-links-field').each(function() {
      if ($(this).is(':hidden')) {
        $(this).show();
        return false;
      }
    });
    if ($('.video-links-field').length == $('.video-links-field:visible').length) {
      $(this).hide();
    }
    return false;
  });
  $(document).on('click', '.add_more_extra', function() {
    $('.js-upgrades-per-package').each(function() {
      if ($(this).is(':hidden')) {
        $(this).show();
        return false;
      }
    });
    if ($('.js-upgrades-per-package').length == $('.js-upgrades-per-package:visible').length) {
      $(this).hide();
      $(".js-no-padding .title-wrapper").css("padding","0");
      $(".upcrate-box>div:last-child, .upcrate-box>ul:last-child").css("border-bottom","none");
    }
    return false;
  });
  $(document).on('change', '.js-extra-checkbox', function() {
    if ($(this).is(":checked")) {
      $(this).parents('.is-checked').find('.upgrades-per-package-list').show().addClass("border-m");
    } else {
      $(this).parents('.is-checked').find('.upgrades-per-package-list').hide().removeClass("border-m");
  
    }
  });
  
  
  var activeLink;
  var activeLink1;
  var activeLink2;
  var $listItems = $('.page-pagination li');
  var $listItems1 = $('.left_nav .dropdown-menu li a');
  var $listItems2 = $('.dropdown-menu .dropdown-submenu a');
  $listItems.click(function(e){
  e.preventDefault();
  $listItems.removeClass('active-page');
  $(this).addClass('active-page');  
    var activeLink=$(this);////  store in variable and do work on pev next btn
  });
  $listItems1.click(function(e){
  $listItems1.removeClass('active_l');
  $(this).addClass('active_l');  
    var activeLink1=$(this);////  store in variable and do work on pev next btn
  });
  $listItems2.click(function(){
  $listItems2.removeClass('active');
  $(this).addClass('active');  
    var activeLink2=$(this);////  store in variable and do work on pev next btn
  });
  
  
  
  $('.msg-composer-input').on('keyup paste', function() {
    var $el = $(this),
      offset = $el.innerHeight() - $el.height();
  
    if ($el.innerHeight() < this.scrollHeight) {
      // Grow the field if scroll height is smaller
      $el.height(this.scrollHeight - offset);
    } else {
      // Shrink the field and then re-set it to the scroll height in case it needs to shrink
      $el.height(1);
      $el.height(this.scrollHeight - offset);
    }
  });
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
  });
  $('.header-search .dropdown-toggle').on("click", function(){
    $("body").toggleClass("td-search-opened");
  });
  $('.td-search-close button').on("click", function(){
    $("body").removeClass("td-search-opened");
  });
  function myFunction12() {
    /* Get the text field */
    var copyText = document.getElementById("helpcenter-search");
  
    /* Select the text field */
    copyText.select();
    
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/
  
    /* Copy the text inside the text field */
    document.execCommand("copy");
  
    /* Alert the copied text */
  }
  $(document).on('click', '.referral_url_copy', function(e) {
    e.preventDefault();
    myFunction12(clipboardText);
    var clipboardText = $('.referral_url_input').val();
    $(this).parent().append('<span class="copied">Copied!</span>');
    window.setTimeout(function() {
      $(".copied").hide(500, 0).hide(500, function(){
        $(this).remove();
      });
  }, 1000);
  });
  
  $("#ember177").click(function(){
    $(".classroom-layout__sidebar").toggleClass("classroom-layout__sidebar--visible");
    $(".classroom-layout__content" ).removeClass('overflow');
  });
  $("").mouseout(function(){
    });
  
  $( ".classroom-layout__stage" )
    .mouseenter(function() {
      $(".classroom-layout__content .classroom-layout__stage").removeClass("classroom-layout__stage--hide-controls");
    })
    .mouseleave(function() {
      $(".classroom-layout__content .classroom-layout__stage").toggleClass("classroom-layout__stage--hide-controls");
  });
  let now_layout_class = null;
  var toggle_sidebar_mini = function(mini) {
      let body = $('body');
  
      if(!mini) {
        body.removeClass('sidebar-mini');
        $(".main-sidebar").css({
          overflow: 'hidden'
        });
        $(".main-sidebar .sidebar-menu > li > ul .dropdown-title").remove();
        $(".main-sidebar .sidebar-menu > li > a").removeAttr('data-toggle');
        $(".main-sidebar .sidebar-menu > li > a").removeAttr('data-original-title');
        $(".main-sidebar .sidebar-menu > li > a").removeAttr('title');
      }else{
        body.addClass('sidebar-mini');
        body.removeClass('sidebar-show');
        $(".main-sidebar .sidebar-menu > li").each(function() {
          let me = $(this);
  
          if(me.find('> .dropdown-menu').length) {
            me.find('> .dropdown-menu').hide();
            me.find('> .dropdown-menu').prepend('<li class="dropdown-title pt-3">'+ me.find('> a').text() +'</li>');
          }else{
            me.find('> a').attr('data-toggle', 'tooltip');
            me.find('> a').attr('data-original-title', me.find('> a').text());
            $("[data-toggle='tooltip']").tooltip({
              placement: 'right'
            });
          }
        });
      }
    }
  
  
  
  $("[data-toggle='sidebar']").click(function() {
      var body = $("body"),
        w = $(window);
  
      if(w.outerWidth() <= 1024) {
        body.removeClass('search-show search-gone');
        if(body.hasClass('sidebar-gone')) {
          body.removeClass('sidebar-gone');
          body.addClass('sidebar-show');
        }else{
          body.addClass('sidebar-gone');
          body.removeClass('sidebar-show');
        }
  
      }else{
        body.removeClass('search-show search-gone');
        if(body.hasClass('sidebar-mini')) {
          toggle_sidebar_mini(false);
        }else{
          toggle_sidebar_mini(true);
        }
      }
  
      return false;
    });
  
  
  var toggleLayout = function() {
      var w = $(window),
        layout_class = $('body').attr('class') || '',
        layout_classes = (layout_class.trim().length > 0 ? layout_class.split(' ') : '');
  
      if(layout_classes.length > 0) {
        layout_classes.forEach(function(item) {
          if(item.indexOf('layout-') != -1) {
            now_layout_class = item;
          }
        });
      }
  
      if(w.outerWidth() <= 1024) {
        if($('body').hasClass('sidebar-mini')) {
          toggle_sidebar_mini(false);
        }
  
        $("body").addClass("sidebar-gone");
        $("body").removeClass("layout-2 layout-3 sidebar-mini sidebar-show");
        $("body").off('click').on('click', function(e) {
          if($(e.target).hasClass('sidebar-show') || $(e.target).hasClass('search-show')) {
            $("body").removeClass("sidebar-show");
            $("body").addClass("sidebar-gone");
            $("body").removeClass("search-show");
  
          }
        });
  
      if(now_layout_class == 'layout-3') {
          let nav_second_classes = $(".navbar-secondary").attr('class'),
            nav_second = $(".navbar-secondary");
  
          nav_second.attr('data-nav-classes', nav_second_classes);
          nav_second.removeAttr('class');
          nav_second.addClass('main-sidebar');
  
          let main_sidebar = $(".main-sidebar");
          main_sidebar.find('.container').addClass('sidebar-wrapper').removeClass('container');
          main_sidebar.find('.navbar-nav').addClass('sidebar-menu').removeClass('navbar-nav');
          main_sidebar.find('.sidebar-menu .nav-item.dropdown.show a').click();
          main_sidebar.find('.sidebar-brand').remove();
          main_sidebar.find('.sidebar-menu').before($('<div>', {
            class: 'sidebar-brand'
          }).append(
            $('<a>', {
              href: $('.navbar-brand').attr('href'),
            }).html($('.navbar-brand').html())
          ));
          setTimeout(function() {
            sidebar_nicescroll = main_sidebar.niceScroll(sidebar_nicescroll_opts);
            sidebar_nicescroll = main_sidebar.getNiceScroll();
          }, 700);
  
          sidebar_dropdown();
          $(".main-wrapper").removeClass("container");
        }
      }else{
        $("body").removeClass("sidebar-gone sidebar-show");
        if(now_layout_class)
          $("body").addClass(now_layout_class);
  
        let nav_second_classes = $(".main-sidebar").attr('data-nav-classes'),
          nav_second = $(".main-sidebar");
      }
    }
    toggleLayout();
    $(window).resize(toggleLayout);
    $("[data-toggle='search']").click(function() {
      var body = $("body");
      if(body.hasClass('search-gone')) {
        body.addClass('search-gone');
        body.removeClass('search-show');
      }else{
        body.removeClass('search-gone');
        body.addClass('search-show');
      }
    });
  
    // tooltip
    $("[data-toggle='tooltip']").tooltip();
  
    // popover
    $('[data-toggle="popover"]').popover({
      container: 'body'
    });
  
    // Select2
    if(jQuery().select2) {
      $(".select2").select2();
    }
  
    // Selectric
    if(jQuery().selectric) {
      $(".selectric").selectric({
        disableOnMobile: false,
        nativeOnMobile: false
      });
    }
  
  $(".input-submit-btn #messageOffer").click(function(){
    var generalModal = $('#general-modal');
    generalModal.modal('show');
  });
  
  selectCustomOffer = function(img, id){
    $('.my-offer-root-list').hide();
    $('.select-offer').show();
    $('.root-title').text($('.rootTitle' + id).text());
    $('.root-author-image').attr('src', img);
  }
  
  submitCustomerOffer = function(event, form){
    event.preventDefault();
    var generalModal = $('#general-modal');
    generalModal.modal('hide');
    $('.my-offer-root-list').show();
    $('.select-offer').hide();
  }
  
  submitCustomerOffer1 = function(event, form, route) {
    event.preventDefault();
    $('.modal-backdrop').hide();
    var span = document.createElement("span");
    span.innerHTML = response.message;
    swal({
        title: t("Success"),
        content: span,
        icon: "success",
    });
  }
  
  $(document).on('change', '.withdraw-options input[type=radio]', function() {
    var gateway = $(this).val();
    $('.withdraw-gateway-options').hide();
    if (gateway == 'paypal') {
      $('.withdraw-gateway-options.paypal').show();
      $('#withdrawRow').show();
    }
    if (gateway == 'payoneer') {
      $('.withdraw-gateway-options.payoneer').show();
      $('#withdrawRow').show();
    }
    if (gateway == 'bank') {
      $('.withdraw-gateway-options.Bank-Account').show();
      $('#withdrawRow').show();
    }
  });
  $(document).on('change', '.payment-method-radio-header input[type=radio]', function() {
    var gateway1 = $(this).val();
    $('.gateway-options').hide();
    if (gateway1 == 'card') {
      $('.gateway-options.card-container').show();
    }
    if (gateway1 == 'paypal') {
      $('.gateway-options.paypal-container').show();
    }
  });
  
  $(document).on('click', '.white-box-offer .show-my-alert', function() {
    $(".input-group").find(".my-alert").removeClass("hidden");
    $(".rehtml").html("<div class='modal-backdrop show'></div>");
    $(".modal-backdrop.show").css("opacity","0");
  });
  $(".input-group .closed").click(function() {
    $(".input-group").find(".my-alert").addClass("hidden");
    $(".modal-backdrop").remove();
  });
  $(".input-group .yes").click(function() {
    $(".input-group").find(".my-alert").addClass("hidden");
    $(".modal-backdrop").remove();
  });
  $(document).on('click', '.delivered-offer-style button.cansel1', function() {
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      }
    });
  });
  $(document).on('click', '.delivered-offer-style button.Proplem', function() {
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      }
    });
  });
  function validate_offer() {
      var $form = jQuery('#offerForm');
      var minvalue = $("input[name='amount']").attr('min');
      var maxvalue = $("input[name='amount']").attr('max');
      $form.validate({
          rules: {
              'description': {
                  required: true,
                  minlength: 50,
                  maxlength: 2500,
              },
              'delivery': {
                  required: true,
              }
          },
          messages: {
              'description': {
                  required: t("Offer details can't be blank!"),
                  minlength: t("Description must be at least 50 characters or more"),
                  maxlength: t("Description must be less then 2500 characters"),
              },
              'delivery': {
                  required: t("Delivery can't be blank!"),
              }
          },
          errorElement: 'div',
          errorClass: 'error-block',
          errorLabelContainer: '.form_errors_container',
          errorPlacement: function($error, $element) {
              jQuery('.form_errors_container').append($error);
          },
          highlight: function(element, errorClass, validClass) {
              jQuery(element).closest('.form-group').addClass("has-error");
          },
          unhighlight: function(element, errorClass, validClass) {
              jQuery(element).closest('.form-group').removeClass("has-error");
          },
          invalidHandler: function(form, validator) {
              if (!validator.numberOfInvalids()) {
                  return;
              }
          },
      });
      if ($form.valid() === true) {
          return true;
      } else {
          jQuery('html, body').animate({
              scrollTop: jQuery('#offerForm').offset().top - 300
          }, 1000);
      }
      return false;
  }
  $("button.Request_Revision").click(function() {
    $(".Request2").html('<input type="button" value="Submit Request" class="tr-button-small blue" id="message_submit" style="padding: 0px 13px 0px 13px;border: 0;font-size: 14px;height: 43px !important;">');
    $(".Request2 input").before('<input type="button" value="Cansel" class="tr-button-small  Cansel123" id="" style="padding: 0px 13px 0px 13px;border: 0;font-size: 14px;height: 43px !important;opacity: .9;color: #000 !important;border-color: #e0e0e0;background-color: #e0e0e0;background: transparent !important;cursor: pointer;">');
    $(".Request_Revision").attr("disabled", true);
  
    $("input.Cansel123").click(function() {
      $(".Request2").html('<input type="button" value="Send" class="tr-button-small blue" id="message_submit" style="padding: 0px 13px 0px 13px;border: 0;font-size: 14px;height: 43px !important;">');
      $(".Request_Revision").attr("disabled", false);
    });
  });
  $("button.btn-white").click(function() {
    var buttonLoading = $("button.btn-white");
    buttonLoading.attr("disabled", true).html('<img src="https://www.freelancinggig.com/assets/images/select2-spinner.gif"> &nbsp;Please Wait...');
    setTimeout(function() {
      buttonLoading.html('Resend Email');
      $('button.btn-white').prop('disabled', false);
    }, 1000);
  });
  $('input#big-search').on('keyup',function() {
    if($(this).val() != '') {
      $('.autocomplete-list-container').show("slow");
    }else{
      $('.autocomplete-list-container').hide();
    }
  });
  
  $(window).bind('scroll', function() {
    var navHeight = $( window ).height() - 70;
    if ($(window).scrollTop() > navHeight) {
     $('.header').addClass('c-header--fixed');
    }
    else {
     $('.header').removeClass('c-header--fixed');
    }
  });
  
  $(".fa-times").click(function(e) {
    e.preventDefault();
    $(".toaster").slideUp();
  });
  $('.favLabel,.favoriteIcon').on('click',function() {
    $(this).find("i").toggleClass("fa-heart fa-heart-o");
  });
  
  
  function add_quantity(quantity){
    var product_price = $('#product_price').val();
    var total_price=parseInt(quantity)*parseInt(product_price);
    $('.btn-price').html('BUY '+quantity+' FOR $'+total_price);
    $('#product_total_price').val(total_price);
  }
  
  /*
  var url = window.location.href;
  console.log(url);
  if( url.indexOf('#') < 0 ) {
      window.location.replace(url + "#");
  } else {
      window.location.replace(url);
  }
    $(this).attr("disabled", true).html('<img src="https://www.freelancinggig.com/assets/images/select2-spinner.gif"> &nbsp;Please Wait...');
    $('button.btn-white').prop('disabled', true);
    setTimeout(function() {
       $("button.btn-white").html('Resend Email');
      $('button.btn-white').prop('disabled', false);
    }, 10100);
  
    alert("cxvcvc");
  
    var scrollNave = $(".header");
    $(window).scroll(function(){
      if( $(this).scrollTop() >= 189 ){
        scrollNave.addClass("c-header--fixed");
        $(".dropdown-menu").removeClass("open");
      }
      else{
        scrollNave.removeClass("c-header--fixed");
      }
    });
    var scroll = $(".js-keep-in-view");
  
    $(window).scroll(function()
    {
      // console.log( $(this).scrollTop() );
  
      if ($(this).scrollTop() >= 178){
        scroll.addClass("sticky");
        scroll.css("width","378px");
      }else{
        scroll.removeClass("sticky");
        scroll.css("width","auto");
      }
    });
  
  $("[data-toggle='tooltip']").tooltip();
  $('[data-toggle="white-tooltip"], [data-toggle-add="white-tooltip"]').tooltip({
      template: '<div class="tooltip white-tooltip" role="tooltip"><div class="tooltip-inner"></div></div>'
  });
  
  $(".nav-dropdown-scroll li").click(function(e){
    var activeLink;
    e.preventDefault();
    e.stopPropagation();
    $(".nav-dropdown-scroll li").removeClass('active');
    $(this).addClass('active');  
    var activeLink=$(this);////  store in variable and do work on pev next btn
  });
  
  
  $.validator.addMethod("lettersonly", function(value, element) 
        {
        return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
        }, '<span style="color: #A94545;"><strong>No spaces or other special characters are allowed.</strong></span>');
    $.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z]+$/i);
    });
    $.validator.addMethod("validemail", function(value, element) 
        {
            return this.optional(element) || /^[a-z0-9][a-z0-9-_\.]+@([a-z]|[a-z0-9]?[a-z0-9-]+[a-z0-9])\.[a-z0-9]{2,10}(?:\.[a-z]{2,10})?$/i.test(value);
        },'<span style="color: #A94545;"><strong>Please provide your valid email.</strong></span>');
  
  
  $('#registrationForm').validate({
  rules: {
  username: {
      required: true,
      minlength: 3,
      maxlength: 15,
      lettersonly: true,
    },
  
  email: {
    required: true,
    email: true,
    validemail:true,
    
  },
  password: {
      required: true,
      minlength: 6
    },
  },
  messages: {
    username: {
    required: '<span style="color: #A94545;"><strong>Please provide your User Name</strong></span>',
    remote : '<span style="color: #A94545;"><strong>User Name already taken!!</strong></span>',
    minlength:jQuery.validator.format('<span style="color: #A94545;"><strong>Please enter atleast {0} characters.</strong></span>'),
    maxlength:jQuery.validator.format('<span style="color: #A94545;"><strong>Maximum {0} characters allowed.</strong></span>'),
  
    },
    email: {
      required :'<span style="color: #A94545;"><strong>Please provide your Email address </strong></span>',
      email : '<span style="color: #A94545;"><strong>Please enter a valid email address. </strong></span>',
      remote :'<span style="color: #A94545;"><strong>This email already exist</strong></span>'
    },
    password: {
      required :'<span style="color:#A94545;"><strong>Please provide your Password</strong></span>',
      minlength:jQuery.validator.format('<span style="color: #A94545;"><strong>Please enter atleast {0} characters.</strong></span>')
    },
    submitHandler: function (form) { // for demo
              alert('valid form submitted'); // for demo
              return false; // for demo
          }
    }
  
  });
  
  
  
  
  
    $(".toggle-filters").click(function(){
    $(".aside--panel").toggleClass("main--freelancer__filters");
    $("html").toggleClass("no-scroll");
  });
  
  $('.topnav-close').click(function() {
    $(".aside--panel").removeClass("main--freelancer__filters");
    $("html").toggleClass("no-scroll");
    });
    $(".button").click(function(){
      $(".alert").show();
      setTimeout(function() {
          $(".alert").alert('close');
      }, 2000);
    });
    $('.checkmark:checked').removeAttr('checked');
  
  
      $("#search-dropdown li,.dropdown-search li").on( "click", function() {
         $(this).parent().find("li.active").removeClass("active");
         $(this).addClass( 'active' );
         var value = $(this).attr("data-value");
         if(value == "jobs")
         {
            $(".navbar--search #textbox").attr("placeholder", "Find Jobs");
         }
         else
         {
            $(".navbar--search #textbox").attr("placeholder", "Find Freelancers");
         }
      });
  
      $('html').click(function(e) {
  
          if ($(e.target).closest('.site-header__left-oc-trigger').length === 0 && $(e.target).closest('.navbar').length === 0) 
            {
            $(".off--canvas").removeClass("open-menu");
            $(".page-container,.page-wrapper").removeClass("off-push-body");
            $("body").removeClass("no-scroll");
          }
      });
      $('html').click(function(e) {
  
          if ($(e.target).closest('.site-header__right-oc-trigger').length === 0 && $(e.target).closest('.navbar').length === 0) {
          $(".canvas-server1").removeClass("open-menu1");
          $(".page-container,.page-wrapper").removeClass("off-push-body");
          $("body").removeClass("no-scroll");
      }
  });
      $(".edit-profile-skills,.fre-chosen-single").chosen({
        width: "100%"
      });
  
    $(".btn-signup").click(function(){
  
      $(".message__error").addClass("is-visible");
      $(".fre-input-field .custom-checkbox").addClass("is-visible-agree");
      $(".fre-input-field .checkmark").addClass("is-invalid-input");
      $(".fre-input-field input").addClass("is-invalid-input");
  
    });
    $(".btn-login,.btn-forget").click(function(){
  
      $(".message__error").addClass("is-visible");
      $(".fre-input-field input").addClass("is-invalid-input");
  
    });
    $(".modal-dialog .fre-normal-btn").click(function(){
  // 189
      $(".modal-dialog .message__error").addClass("is-visible");
      $(".modal-dialog .fre-input-field input").addClass("is-invalid-input");
  
   });
    $(".btn-next").click(function(){
  
      $(".main-content .message__error").addClass("is-visible");
      $(".main-content .fre-input-field input,.main-content select,.main-content textarea").addClass("is-invalid-input");
  
   });
    $(".freelance-education-action a").click(function(){
      alert("moahmed");
   });
  
  
   
    $("#tabs a").click(function(){
  
    $("#tabs li").removeClass("active");
    $(this).parent("li").addClass("active");
  
    var page = this.hash.substr(1);
    $("#content_wrapper").show();
    $.get(page+".php", function(gotHtml){
      $("#content").html(gotHtml);
      $("#content_wrapper").unblock();
    });
  
  
    (location.hash) ? $("a[href="+location.hash+"]").click() : $("#tags a:first").click()
  });
  */
  });