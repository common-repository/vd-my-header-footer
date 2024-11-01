<?php
$home 			= add_query_arg('vd', 0, home_url());
$helpSubmit = add_query_arg('sel', 'support', $home);
?>
<div class="notice notice-info is-dismissible">
  <h3><strong style="font-weight:700">Need help using My Header Footer?</strong></h3>
  <p>For support or questions don't hesitate to lodge a support request on the plugin page <a href="https://wordpress.org/support/plugin/vd-my-header-footer/" target="_blank">here</a> or through the front-end editor <a href="<?php echo $helpSubmit; ?>" target="_blank">here</a> :)</p>
</div>