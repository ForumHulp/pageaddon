(function($) { // Avoid conflicts with other libraries

'use strict';

$(function() {

	$.fn.toggleBoxes = function(target) {
		$(this).on('click', function () {
			if ($(this).is(':checked')) {
				$(target).prop('checked', false);
			}
		});
	};

	$('.html-on').toggleBoxes('.html-off');
	$('.html-off').toggleBoxes('.html-on');

});

})(jQuery); // Avoid conflicts with other libraries

	tinymce.init({
		selector: "textarea.mceEditor",
		relative_urls: false,
		plugins: [
			"advlist autolink lists link image charmap print preview anchor",
			"searchreplace visualblocks code fullscreen","pagebreak",
			"insertdatetime media table contextmenu paste textcolor"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | fore-color | link image | forecolor",
	});	
