(function($) {
	
	"use strict";
	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header li.dropdown').append('<div class="dropdown-btn"></div>');

		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});

		//Disable dropdown parent link
		$('.navigation li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}

	//Hidden Bar Menu Config
	function hiddenBarMenuConfig() {
		var menuWrap = $('.hidden-bar .side-menu');
		// appending expander button
		menuWrap.find('.dropdown').children('a').append(function () {
			return '<button type="button" class="btn expander"><i class="icon fa fa-angle-down"></i></button>';
		});
		// hidding submenu
		menuWrap.find('.dropdown').children('ul').hide();
		// toggling child ul
		menuWrap.find('.btn.expander').each(function () {
			$(this).on('click', function () {
				$(this).parent() // return parent of .btn.expander (a)
					.parent() // return parent of a (li)
						.children('ul').slideToggle();

				// adding class to expander container
				$(this).parent().toggleClass('current');
				// toggling arrow of expander
				$(this).find('i').toggleClass('fa-angle-up fa-angle-down');

				return false;

			});
		});
	}

	hiddenBarMenuConfig();

	//Custom Scroll for Hidden Sidebar
	if ($('.hidden-bar-wrapper').length) {
		$('.hidden-bar-wrapper').mCustomScrollbar();
	}

	//Hidden Bar Toggler
	if ($('.hidden-bar-closer').length) {
		$('.hidden-bar-closer').on('click', function () {
			$('.hidden-bar').removeClass('visible-sidebar');
		});
	}
	if ($('.hidden-bar-opener').length) {
		$('.hidden-bar-opener').on('click', function () {
			$('.hidden-bar').addClass('visible-sidebar');
		});
	}

	//Custom Scroll for Hidden Sidebar
	if ($('.hidden-bar-wrapper').length) {
		$('.hidden-bar-wrapper').mCustomScrollbar();
	}

	//Hidden Bar Toggler
	if ($('.hidden-bar-closer').length) {
		$('.hidden-bar-closer').on('click', function () {
			$('.hidden-bar').removeClass('visible-sidebar');
		});
	}
	if ($('.hidden-bar-opener').length) {
		$('.hidden-bar-opener').on('click', function () {
			$('.hidden-bar').addClass('visible-sidebar');
		});
	}
	function headerStyle() {
		if($('.main-header').length){
			var scrollCLickLink = $('.scroll-to-top');
			var MainHeader = $('.main-header');
			var windowpos = $(window).scrollTop();
			
			if (windowpos >= 200) {
				MainHeader.addClass('fixed-header');
				scrollCLickLink.fadeIn(300);
			} else {
				MainHeader.removeClass('fixed-header');
				scrollCLickLink.fadeOut(300);
			}
		}
	}

	headerStyle();
	// $('input,textarea').focus(function(){
	//    $(this).removeAttr('placeholder');
	// });

	//Search Popup Hide / Show 
	if($('#search-popup').length){
		var searchPopup = $('#search-popup');
		//Show Popup
		$('.search-box-btn').on('click', function() {
			searchPopup.addClass('popup-visible');
		});
		
		//Hide Popup
		$('.close-search').on('click', function() {
			searchPopup.removeClass('popup-visible');
		});
	}

})(window.jQuery);
