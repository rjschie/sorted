$(document).ready(function() {

	$(document).on('click','[data-toggle=collapse]', function() {
		var target = $(this).attr('data-target');
		$(target).toggle({
			duration: 200,
			complete: function() {
				$(this).toggleClass('collapse');
				$(this).removeAttr('style');
			}
		});
	});
});