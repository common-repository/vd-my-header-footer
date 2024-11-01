<?php
$home 			= add_query_arg('vd', 0, home_url());
$homePost 	= add_query_arg('sel', 'hide-content', $home);
$helpSubmit = add_query_arg('sel', 'support', $home);
?>
<div class="notice notice-info">
  <h3><strong style="font-weight:700">Having issues hiding your existing header or footer?</strong></h3>
  <p>You can hide your header or footer using the front end builder. Click <a href="<?php echo $homePost; ?>">here</a> to begin. If you still experience trouble hiding your header or footer please submit a contact request <a href="<?php echo $helpSubmit; ?>">here</a> :)</p>
  <div style='display: inline-block;width: 100%;'>
	  <p style='display: inline; float: left;'><a href="https://visualdesigner.io/my-header-footer#help" target="_blank">Help</a></p>
	  <p style='display: inline; float: right;'><a href="https://visualdesigner.io/my-header-footer#pricing" target="_blank">Go PRO</a></p>
  </div>
</div>