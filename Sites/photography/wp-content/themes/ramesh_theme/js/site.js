
	var menuTimeout = null;
	jQuery(document).ready(function($) {

// on hover ul#sddm li a, slide down ul#sddm li div
$('ul#sddm li:not(.active)').hover(
	function() { // hover
		var prevActive = $('ul#sddm li.active');
		var nowActive = $(this);

		if (nowActive.find('div').length == 0) {
			return; // currently hovered over menu has no div, slideDown currently displayed subMenu
		}

		nowActive.addClass('active'); // mark current hovered over menu as active

		if (menuTimeout) { // prevent previous active submenu from sliding down
			clearTimeout(menuTimeout);
			menuTimeout = null;
		}

		// if we hover over an already active menu (showing it's submenu), do nothing
		if (prevActive.find('div').attr('id') == nowActive.find('div').attr('id')) {
			return;
		}

		if (prevActive.length == 0) { // no previously active menu, slide down
			nowActive.find('div').css('height', '0').css('visibility', 'visible').animate({height: '150px'}, 'fast');
		}
		else {// just show submenu
			var prevActiveDiv = prevActive.find('div'),
				nowActiveDiv = nowActive.find('div');

			// fade-out previous submenu content
			prevActiveDiv.find('.submenu-wrap').animate({opacity: 0}, 100, function() {
				prevActive.removeClass('active').find('div').css('visibility', 'hidden'); // hide entire submenu
				$(this).css('opacity', 1); // make submenu content not transparent
				
				// sent now active submenu content entirely transparent
				nowActiveDiv.find('.submenu-wrap').css('opacity', 0);
				nowActiveDiv.css('visibility','visible'); // show current active submenu
				nowActiveDiv.find('.submenu-wrap').animate({opacity: 1}, 1000); // fade content in
			})
			/*
			// show new submenu
			nowActive.find('div').css('opacity', 1).css('visibility','visible').animate({opacity: 1},0, function() {
				// hide previous menu
				prevActive.removeClass('active').find('div').css('visibility', 'hidden');
			});
*/
		}

	}, function() { // unhover

		if ($(this).find('div').length == 0) return; // if no submenu, don't slidedown non-existent submenu

		menuTimeout = setTimeout(function() {
			var active = $('ul#sddm li.active');
			if (active.length == 1) { // only 1 active menu, so we slide down currently displayed submenu
				active.find('div').animate({height: '0px'}, 'fast', function() {
					// remove active-background once unhover completes
					$(this).parent().removeClass('active');
					// on done animation, hide submenu
					$(this).css('visibility','hidden').css('height', '150px'); 
				});
			}
		}, 350);
	}
);


	});

