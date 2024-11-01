<?php
$home 			= add_query_arg('vd', 0, home_url());
$homePost 	= add_query_arg('sel', 'hide-content', $home);
$helpSubmit = add_query_arg('sel', 'support', $home);
?>
<div class="vd-mhf-nag notice notice-info is-dismissible">
  <h3><strong style="font-weight:700"> 🦘 Oi Wanna fill out a survey? 🍻</strong></h3>
  <!-- <p>My Header Footer (MHF) is designed, built and managed by one Aussie guy, me ( ͡◒ ᴗ ͡◒), who resides in <a href="https://www.google.com/maps/place/Hervey+Bay+QLD+4655/@-25.2947635,152.7669231,12z/data=!4m5!3m4!1s0x6beb7dc5418850fd:0x400eef17f20f5a0!8m2!3d-25.2881539!4d152.7676633" target="_blank">Hervey Bay, Australia</a>. I work bloody hard to make this crap and I need your help to improve this product. I need your feedback, the good the bad and the fukin horrible. MHF was released abut 4 months ago and its had lots of downloads users. What would really help me is to get feedback about what you like and don't like about MHF. Which is why I'm asking you to take 5 minutes to fill out my survey. </p> -->
  <div style='display: inline-block;width: 100%;'>
	  <p style='display: inline; float: left; margin: 0;'><a href="" target="_blank">Fill out survey</a></p>
  </div>

  <p><small>For support or questions don't hesitate to lodge a support request on the plugin page <a href="https://wordpress.org/support/plugin/vd-my-header-footer/" target="_blank">here</a> or through the front-end editor <a href="<?php echo $helpSubmit; ?>" target="_blank">here</a> :)</small></p>
	
	<input class="mhf-nonce" type="hidden" value="<?php echo wp_create_nonce("mhf_dismiss"); ?>" />
	<script type="text/javascript">
		(function ($) {
		  'use strict';

		  $(document).ready(function () {
		  	$(document).on('click', '.vd-mhf-nag .notice-dismiss', function(ev) {
		  		var nag = $(this).closest('.vd-mhf-nag');
		  		var nonce = $('.mhf-nonce', nag);
		  		jQuery.ajax({
            type: "post",
            dataType: "json",
            url: '<?php echo esc_url( admin_url( 'admin-ajax.php?' ) ); ?>',
            data : {
              'action': 'mhf_dismiss',
              'nonce': nonce.attr('value'),
              'nag': 'MHF_NAG_3'
            },
        	});
		  	});
		  });

		})(jQuery);
	</script>
</div>