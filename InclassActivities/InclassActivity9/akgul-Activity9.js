$(document).ready(function () {
	// Preload images
	$("#image_list a").each(function () {
		var swappedImage = new Image();
		swappedImage.src = $(this).attr("href");
	});

	// Set up event handlers for links    
	$("#image_list a").click(function (evt) {
		// Store references to the elements
		var $image = $("#image");
		var $caption = $("#caption");

		// Fade out the caption and image
		$caption.fadeOut(1000);
		$image.fadeOut(1000, function () {
			// Display the new caption and image
			var imageURL = $(this).attr("href");
			$image.attr("src", imageURL);

			var caption = $(this).attr("title");
			$caption.text(caption);

			// Fade in the new caption and image
			$caption.fadeIn(1000);
			$image.fadeIn(1000);
		});

		// Cancel the default action of the link
		evt.preventDefault();
	});

	// Move focus to first thumbnail
	$("li:first-child a").focus();
});
