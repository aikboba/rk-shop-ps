/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
import 'expose-loader?Tether!tether';
import 'bootstrap/dist/js/bootstrap.min';
import 'flexibility';
import 'bootstrap-touchspin';

import './responsive';
import './checkout';
import './customer';
import './listing';
import './product';
import './cart';
import './rts_icons';
import './sliders';
import './county';

import DropDown from './components/drop-down';
import Form from './components/form';
import ProductMinitature from './components/product-miniature';
import ProductSelect from './components/product-select';
import TopMenu from './components/top-menu';

import prestashop from 'prestashop';
import EventEmitter from 'events';

import './lib/bootstrap-filestyle.min';
import './lib/jquery.scrollbox.min';
import './lib/jquery.sticky-kit.min.js';
import './lib/animsition.min';

import './components/block-cart';

// "inherit" EventEmitter
for (var i in EventEmitter.prototype) {
  prestashop[i] = EventEmitter.prototype[i];
}

$(document).ready(() => {
  let dropDownEl = $('.js-dropdown');
  const form = new Form();
  let topMenuEl = $('.js-top-menu ul[data-depth="0"]');
  let dropDown = new DropDown(dropDownEl);
  let topMenu = new TopMenu(topMenuEl);
  let productMinitature = new ProductMinitature();
  let productSelect  = new ProductSelect();
  dropDown.init();
  form.init();
  topMenu.init();
  productMinitature.init();
  productSelect.init();

  $('.form-control-select').change(function(){
    this.blur();
  });

  if ( $('.page-footer').children().length == 0 ) {
    $('.page-footer').addClass('hidden');
  }

  // Sticky header

  if ($('#header').attr('data-trans') == 'normal') {
    var sticky_classes = 'sticky';
  } else {
    var sticky_classes = 'sticky normal';
  }

  var header_trans = function(){
    if ($('#header').attr('data-trans') == 'normal') {
      setTimeout(function() {
        var header_height = $('#header').height();
        $('main').css('padding-top', header_height);
      }, 250);
    } else {
      var header_height = $('#header').height();
      $('#top_column').css('min-height', header_height);
    }
  };

  header_trans();

  var sticky = function(){
    $('#header').addClass(sticky_classes);
  };
  var stickyfrom = 0;

  if ($(window).scrollTop() > stickyfrom) sticky();
  if (window.matchMedia('(max-width: 991px)').matches) sticky();

  $(window).scroll(function() {
      if ($(this).scrollTop() > stickyfrom){
              sticky();
          } else {
          if (window.matchMedia('(min-width: 992px)').matches) {
              $('#header').removeClass(sticky_classes);
          }
      }
  });

  $(window).on('resize', function(){
      if (window.matchMedia('(max-width: 991px)').matches) {
          header_trans();
          sticky();
      } else {
          header_trans();
          if ($(this).scrollTop() == stickyfrom){
              $('#header').removeClass(sticky_classes);
          }
      }
  });

  // Hide header on scroll
  if ($('#header').attr('data-hide') == 'yes') {

    var didScroll;
    var lastScrollTop = 500;
    var delta = 5;

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(window).scrollTop();
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > lastScrollTop && st > 500){
            // Scroll Down
            $('#header').addClass('hide_up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('#header').removeClass('hide_up');
            }
        }
        lastScrollTop = st;
    }
  }

  // page reload
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 600,
    outDuration: 600,
    linkElement: 'a:not([data-toggle="dropdown"])a:not([href^="javascript:"]):not([href="javascript:history.back()"]):not([onClick="history.go(-1)"]):not([target="_blank"]):not([href^="#"]):not([href^="mailto:"]):not(.cart_nogo):not(.fancybox-close):not(.searchLine)',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: false,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: true,
    timeoutCountdown: 300,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });

  $('.animsition').on('animsition.outStart', function(){
  	var exitDiv = $('.roy-loader');
    exitDiv.fadeIn('slow');
	});
  $('.animsition').on('animsition.inStart', function(){
  	var exitDiv = $('.roy-loader');
  	exitDiv.fadeOut(400);
	});

  // side
  // side: reopen function for mobile and open for desktop
  var reopen = function() {
      if($('body').hasClass('side_open')) {

        $('body').removeClass('side_content');
        $('.side_menu').removeClass('reopen_go').addClass('reopen_hide');
        setTimeout(function(){
          $('body').addClass('side_content');
        }, 320);
        setTimeout(function(){
          $('.side_menu').removeClass('reopen_hide').addClass('reopen_go');
        }, 600);

      } else {
          $('body').addClass('side_open side_content was_open')
      }
  }

  var searchtoside = function() {
    $('.action .search-widget').attr("id","");
    $('.side_menu .search-widget').attr("id","search_widget");
  }

  searchtoside();

  // side: close
  $('.side_close, .close_cross, .return').click(function () {
      $('body').removeClass('side_open side_content');
      cartprodshide();
      accsidehide();
      setTimeout(function(){
        $('body').removeClass('was_open');
      }, 440);
  });

  var cartprodshide = function () {
    $('.side_menu').find('.cart-prods > li').each(function(i){
      $(this).removeClass('show');
    });
  }
  var cartprodsshow = function () {
    $('.side_menu').find('.cart-prods > li').each(function(i){
      var row = $(this);
      setTimeout(function(){
        row.addClass('show');
      }, 300 + i * 220);
    });
  }
  var accsidehide = function () {
    $('.side_menu').find('.acc_ul > *').each(function(i){
      $(this).removeClass('show');
    });
  }
  var accsideshow = function () {
    $('.side_menu').find('.acc_ul > *').each(function(i){
      var row = $(this);
      setTimeout(function(){
        row.addClass('show');
      }, 300 + i * 120);
    });
  }
  var scrollsidetop = function () {
    setTimeout(function(){
      $('html, body').animate({
        scrollTop: $(".side_menu").offset().top
      }, 1000);
    }, 980);
  }

  // action on click
  var sm = $('.side_menu');
  var aoc_m = sm.attr('data-menu'),
      aoc_s = sm.attr('data-search'),
      aoc_c = sm.attr('data-cart'),
      aoc_a = sm.attr('data-acc');


$(window).on('load resize', function(){
  if (window.matchMedia('(min-width: 992px)').matches) {
    $('.menu_top').hover(function(){
      $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_m);
    });
    $('.search-widget').hover(function(){
      $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_s);
    });
    $('.cart_widget, .add_wrap, .add-to-cart').hover(function(){
      $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_c);
    });
    $('.acc_top').hover(function(){
      $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_a);
    });
  } else {
    $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay1');
  }
});

  // side: open, levibox clicks
  var cart_click = function (e) {
      e.preventDefault();
      accsidehide();
      reopen();
      $('.side_menu .side_menu_rel > div').removeClass('show');
      $('#side_cart_wrap').addClass('show');
      $('.side_close').removeClass('search_close menu_close acc_close').addClass('cart_close');
      $('.side_close i').toggleClass('rotateit');
      if($('.side_menu').hasClass('reopen_hide')) {
        setTimeout(function(){
          cartprodsshow();
        }, 320);
      } else {
        cartprodsshow();
      }
  }
  var search_click = function (e) {
      e.preventDefault();
      accsidehide();
      cartprodshide();
      $('.side_menu').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_s);
      reopen();
      searchtoside();
      $('.side_menu .side_menu_rel > div').removeClass('show');
      $('#side_search_wrap').addClass('show');

      $('.side_close').removeClass('cart_close menu_close acc_close').addClass('search_close');
      $('.side_close i').toggleClass('rotateit');

      setTimeout(function(){
        $('.side_menu .search-widget form input[type=text]').focus();
      }, 1000);

  }
  var menu_click = function (e) {
      e.preventDefault();
      accsidehide();
      cartprodshide();
      $('.side_menu').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_m);
      reopen();
      $('.side_menu .side_menu_rel > div').removeClass('show');
      $('#side_menu_wrap').addClass('show');
      $('.side_close').removeClass('cart_close search_close acc_close').addClass('menu_close');
      $('.side_close i').toggleClass('rotateit');
  }
  var acc_click = function (e) {
      e.preventDefault();
      cartprodshide();
      $('.side_menu').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_a);
      reopen();
      $('.side_menu .side_menu_rel > div').removeClass('show');
      $('#side_acc_wrap').addClass('show');
      $('.side_close').removeClass('cart_close search_close menu_close').addClass('acc_close');
      $('.side_close i').toggleClass('rotateit');
      if($('.side_menu').hasClass('reopen_hide')) {
        setTimeout(function(){
          accsideshow();
        }, 320);
      } else {
        accsideshow();
      }
  }

  $('.box-cart').off("click", cart_click).on("click", cart_click);
  $('.box-search').off("click", search_click).on("click", search_click);
  $('.box-menu').off("click", menu_click).on("click", menu_click);
  $('.box-acc').off("click", acc_click).on("click", acc_click);

  $('#header .row.action .blockcart a.cart_nogo').off("click", cart_click).on("click", cart_click);
  $('#header .row.action .search_nogo').off("click", search_click).on("click", search_click);

  // mobile - desktop swittch
  if ($('#is_media').css('float') == 'left') {

      $('body').addClass('mob_enabled');

  } else {
      $('body').removeClass('mob_enabled');
      $('body').removeClass('side_open side_content');
  }

  $(window).on('resize', function(){
      if ($('#is_media').css('float') == 'left') {
          $('body').addClass('mob_enabled');
      } else {
          // $('body').removeClass('mob_enabled');
          // $('body').removeClass('side_open side_content');
      }
  });

});

// special label height
$(window).load(function() {
  setTimeout(function() {
    $('#header').css('opacity','1');
  }, 400);
  setTimeout(function() {
    $('#wrapper').css('opacity','1');
  }, 700);
  setTimeout(function() {
    $('.breadcrumb').css({
      'opacity':'1',
      'transform':'matrix(1, 0, 0, 1, 0, 0)',
    });
  }, 750);
});

// 1.1 fix slash after home category
var breadlast = $('.breadcrumb > ol > li:last-child').find("span[itemprop*='name']");
if($.trim(breadlast.html())=='') {
  breadlast.parent().prev().addClass('noafter');
}

// tooltip


function uitiprun() {

  var $uiEl = $('.tip_inside');
  $('body').append('<div id="ui_tip"><div class="ui_wrapper"><span class="ui_title"></span></div></div>');
  var $uiTip = $('#ui_tip');
  var $uiTipTitle = $uiTip.find('.ui_title');

  $uiEl.on('mousemove', function(e) {
    $uiTip.css({
      top: e.clientY,
      left: e.clientX
    });

    var winwidth = $(window).width(),
        tipwidth = $('#ui_tip').width(),
        tiprightdot = e.clientX + tipwidth + 14 + 40; // plus 40 padding compensation

    if (tiprightdot > winwidth) {
      $('#ui_tip').addClass('align-right');
    } else {
      $('#ui_tip').removeClass('align-right');
    }
  });

  $uiEl.on('mouseover', function(e) {
    $uiTipTitle.text($(this).find('.tip').text());
    setTimeout(function() {
      $uiTip.addClass('active')
    }, 10);
  }).on('mouseout', function(e) {
    setTimeout(function() {
      $uiTip.removeClass('active');
    }, 10);
  });

  $(window).scroll(function() {
    setTimeout(function() {
      if($uiTip.hasClass('active')) {
        $uiTip.removeClass('active');
      }
    }, 200);
  });

}

$(document).ready(() => {
  uitiprun();
});


// product 3rd lay
$('body').append('<div id="ui_prod"><div class="ui_wrapper"><span class="ui_name"><span></span></span><div><span class="ui_price"></span></div></div></div>');
var $uiProd = $('article.pl_lay3'),
    $uiProdTip = $('#ui_prod'),
    $uiProdName = $uiProdTip.find('.ui_name > span'),
    $uiProdPrice = $uiProdTip.find('.ui_price');

$uiProd.on('mousemove', function(e) {
  $uiProdTip.css({
    top: e.clientY,
    left: e.clientX
  });
  var winwidth = $(window).width(),
      tipwidth = $('#ui_prod').width(),
      tiprightdot = e.clientX + tipwidth + 54;
  if (tiprightdot > winwidth) {
    $('#ui_prod').addClass('align-right');
  } else {
    $('#ui_prod').removeClass('align-right');
  }
});

$uiProd.find('.product-thumbnail').on('mouseover', function(e) {

  $uiProdName.text($(this).closest('article').find('.product-title').text());
  $uiProdPrice.html($(this).closest('article').find('.product-price-and-shipping').html());
  setTimeout(function() {
    $uiProdTip.addClass('active')
  }, 10);

  $(this).closest('article').find('.tip_inside').on('mouseover', function(e) {
    console.log('inner');
    $uiProdTip.removeClass('active');
  }).on('mouseout', function(e) {
    $uiProdTip.addClass('active')
  });

}).on('mouseleave', function(e) {
  $uiProdTip.removeClass('active');
});


// Sticky Right Column PP
var pp_stick = $('.pp_stick_it'),
    pp_stick_ops = {
        parent: '.pp_stick_parent',
        offset_top: 90
    };

$(window).on('load resize', function(){
  setTimeout(function() {

      if (window.matchMedia('(min-width: 992px)').matches) {
          pp_stick.stick_in_parent(pp_stick_ops);
      } else {
          pp_stick.trigger("sticky_kit:detach");
      }

  },300);

});


// Roy Countdowns
$(document).ready(function($){
    $( ".roycount" ).each(function(e) {
        var $roycount = $(this);
        var $dataspecificpriceto = $roycount.attr('data-specific-price-to');
        $roycount.closest('.roycountdown').county({
            endDateTime: new Date($dataspecificpriceto.replace(/-/g, "/")) , reflection: false, animation: 'none', theme: 'black',
            titleDays:$roycount.data('days'),titleHours:$roycount.data('hours'),titleMinutes:$roycount.data('minutes'),titleSeconds:$roycount.data('seconds')
        });
    })
});

// Youtube responsive
$(function() {

    var $allVideos = $(".page-cms iframe[src^='//player.vimeo.com'], .page-cms iframe[src^='https://player.vimeo.com'], .page-cms iframe[src^='//www.youtube.com'], .page-cms iframe[src^='https://www.youtube.com'], .page-cms iframe[src^='http://www.youtube.com'], .page-cms object, .page-cms embed"),
        $allVideosPPS = $("#short_description_content iframe[src^='//player.vimeo.com'], #short_description_content iframe[src^='https://player.vimeo.com'], #short_description_content iframe[src^='//www.youtube.com'], #short_description_content iframe[src^='https://www.youtube.com'], #short_description_content iframe[src^='http://www.youtube.com'], #short_description_content object, #short_description_content embed"),
        $fluidElPPS = $("#short_description_content"),
        $allVideosPPF = $("#idTab1 iframe[src^='//player.vimeo.com'], #idTab1 iframe[src^='https://player.vimeo.com'], #idTab1 iframe[src^='//www.youtube.com'], #idTab1 iframe[src^='https://www.youtube.com'], #idTab1 iframe[src^='http://www.youtube.com'], #idTab1 object, #idTab1 embed"),
        $fluidElPPF = $("#idTab1"),
        $allVideosB = $("#module-smartblog-details iframe[src^='//player.vimeo.com'], #module-smartblog-details iframe[src^='https://player.vimeo.com'], #module-smartblog-details iframe[src^='//www.youtube.com'], #module-smartblog-details iframe[src^='https://www.youtube.com'], #module-smartblog-details iframe[src^='http://www.youtube.com'], #module-smartblog-details object, #module-smartblog-details embed"),
        $fluidElB = $("#module-smartblog-details #content"),
        $allVideosRC = $(".video_banner iframe[src^='//player.vimeo.com'], .video_banner iframe[src^='https://player.vimeo.com'], .video_banner iframe[src^='//www.youtube.com'], .video_banner iframe[src^='https://www.youtube.com'], .video_banner iframe[src^='http://www.youtube.com'], .video_banner object, .video_banner embed");

    $allVideos.each(function() {

        $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');

    });

    $(window).resize(function() {

        var newWidthPPS = $fluidElPPS.width();
        var newWidthPPF = $fluidElPPF.width();
        var newWidthB = $fluidElB.width();

        $allVideos.each(function() {

            var $el = $(this);
            var $fluidEl = $el.parent();
            var newWidth = $fluidEl.width();
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));

        });

        $allVideosB.each(function() {
            var $el = $(this);
            $el
                .width(newWidthB)
                .height(newWidthB * $el.attr('data-aspectRatio'));
        });
        $allVideosPPS.each(function() {
            var $el = $(this);
            $el
                .width(newWidthPPS)
                .height(newWidthPPS * $el.attr('data-aspectRatio'));
        });
        $allVideosPPF.each(function() {
            var $el = $(this);
            $el
                .width(newWidthPPF)
                .height(newWidthPPF * $el.attr('data-aspectRatio'));
        });
        $allVideosRC.each(function() {

            var $el = $(this);
            var $fluidElRC = $el.closest('.video_banner');
            var newWidthRC = $fluidElRC.width();
            $el
                .width(newWidthRC)
                .height(newWidthRC * $el.attr('data-aspectRatio'));
        });

    }).resize();

});
