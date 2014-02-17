jQuery(document).ready(function () {
	jQuery("#enablexmlsitemap").change(function() {
		if (jQuery("#enablexmlsitemap").is(':checked')) {
			jQuery("#sitemapinfo").css("display","block");
		} else {
			jQuery("#sitemapinfo").css("display","none");
		}
	}).change();
	jQuery("#cleanpermalinks").change(function() {
		if (jQuery("#cleanpermalinks").is(':checked')) {
			jQuery("#cleanpermalinksdiv").css("display","block");
		} else {
			jQuery("#cleanpermalinksdiv").css("display","none");
		}
	}).change();		
});

function setWPOption( option, newval, hide, nonce ) {
	jQuery.post(ajaxurl, { 
			action: 'wpseo_set_option', 
			option: option,
			newval: newval,
			_wpnonce: nonce 
		}, function(data) {
			if (data)
				jQuery('#'+hide).hide();
		}
	);
}

function wpseo_killBlockingFiles( nonce ) {
	jQuery.post( ajaxurl, {
		action: 'wpseo_kill_blocking_files',
		_ajax_nonce: nonce
	}, function(data) {
		if (data == 'success')
			jQuery('#blocking_files').hide();
		else
			jQuery('#block_files').html(data);
	});
}

jQuery(document).ready(function(){	
	var active_tab = window.location.hash.replace('#top#','');
	if ( active_tab == '' )
		active_tab = jQuery('.wpseotab').attr('id');
	jQuery('#'+active_tab).addClass('active');
	jQuery('#'+active_tab+'-tab').addClass('nav-tab-active');
	
	jQuery('#wpseo-tabs a').click(function() {
		jQuery('#wpseo-tabs a').removeClass('nav-tab-active');
		jQuery('.wpseotab').removeClass('active');
	
		var id = jQuery(this).attr('id').replace('-tab','');
		jQuery('#'+id).addClass('active');
		jQuery(this).addClass('nav-tab-active');
	});
});