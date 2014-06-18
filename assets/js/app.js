
(function($) {
	$(document).foundation(
		'topbar', {
			mobile_show_parent_link: true
		}
	);
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
})(jQuery);