
$(document).foundation();

Foundation.utils.S('.right-off-canvas-toggle').on('click', function(e) {
	if( !Foundation.utils.S('.off-canvas-wrap').hasClass('move-left') ) {
		Foundation.utils.S('#page').height('100%');
	}
});

Foundation.utils.S('.exit-off-canvas').on('click', function(e) {
	if( Foundation.utils.S('.off-canvas-wrap').hasClass('move-left') ) {
		setTimeout(function() {
			Foundation.utils.S('#page').removeAttr("style");
		}, 500);
	}
});

Foundation.utils.S('.right-off-canvas-menu a').on('click', function (e) {
	if( Foundation.utils.S('.off-canvas-wrap').hasClass('move-left') ) {
		setTimeout(function() {
			Foundation.utils.S('#page').removeAttr("style");
		}, 500);
	}
});
