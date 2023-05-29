$(document).ready(function () {
	$("#accordion").accordion({
		collapsible: true, // Allow closing the opened panel
		active: false, // Start with all panels closed
		heightStyle: "content" // Adjust panel height based on content
	});
});