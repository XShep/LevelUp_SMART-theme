jQuery('.age_tabs > .age_tab').click(function(event) {
	jQuery('.age_tabs > .age_tab').removeClass('active');
	jQuery(this).addClass('active');
	jQuery(this).closest('div.age_tabs').addClass('active');
	jQuery('#courses_cards').addClass('active');
});



jQuery(document).ready(function () {

	jQuery('.age_tabs').children('div').click(function () {
		var data_id = jQuery(this).attr('data-id');

		jQuery('.age_tabs').children('div').removeClass('open');
		jQuery('#courses_cards .cards').removeClass('open');

		jQuery("#" + data_id).addClass('open');
	});

});




jQuery('.stunents_tabs > .age_tab').click(function(event) {
	jQuery('.stunents_tabs > .age_tab').removeClass('active');
	jQuery(this).addClass('active');
	jQuery(this).closest('div.stunents_tabs').addClass('active');
});
