	tinymce.init({
		selector: "textarea.mceEditor",
		relative_urls: false,
		language : lang,
		plugins: [
			"advlist autolink lists link image charmap print preview anchor",
			"searchreplace visualblocks code fullscreen","pagebreak",
			"insertdatetime media table contextmenu paste textcolor"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | fore-color | link image | forecolor",
	});
