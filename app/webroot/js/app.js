$(function () {

	var navButton = document.querySelector('.navigation-button');

	var navigationButtonEvent = function navigationButtonEvent() {
		navButton.parentNode.classList.toggle('open');
	};

	navButton.addEventListener('click', navigationButtonEvent);

	$(".partners-slider").smoothDivScroll({
		autoScrollingMode: "onStart",
		autoScrollingStep: 1,
		autoScrollingInterval: 20,
		manualContinuousScrolling: true,
		visibleHotSpotBackgrounds: "always",
		hotSpotScrollingInterval: 30,
		autoScrollingDirection: "endlessLoopRight",
		mouseOverLeftHotSpot: function mouseOverLeftHotSpot(eventObj, data) {
			$(this).smoothDivScroll("option", "autoScrollingDirection", "endlessLoopLeft");
		},
		mouseOverRightHotSpot: function mouseOverRightHotSpot(eventObj, data) {
			$(this).smoothDivScroll("option", "autoScrollingDirection", "endlessLoopRight");
		}
	});

	// Logo parade event handlers
	$(".partners-slider").bind("mouseover", function () {
		$(this).smoothDivScroll("stopAutoScrolling");
	}).bind("mouseout", function () {
		$(this).smoothDivScroll("startAutoScrolling");
	});

	setTimeout(function () {
		$('.partners-slider .scrollingHotSpotLeft').append('' + '<svg class="sprite" viewBox="0 0 1 1"><use xlink:href="/img/icons/sprites.svg#angle-left"/></svg>');
		$('.partners-slider .scrollingHotSpotRight').append('' + '<svg class="sprite" viewBox="0 0 1 1"><use xlink:href="/img/icons/sprites.svg#angle-right"/></svg>');
	}, 300);
});