<?php
/**
* Plugin Name: Concon Customize Admin Screen
* Plugin URI: http://concon.vn
* Description: Customize Admin Concon
* Version: 1.0
* Author: Chu T
* Author URI: http://concon.vn
*/

/**
* Change Logo Function
*/
function cc_custom_logo() { ?>
<style>
body {
	background: #888888 !important;
}
/*custom logo*/
#login h1 a {
	background-image: url(<?php echo plugins_url('images/logo.png',__FILE__) ?>);
	width:320px;
	height:100px;
	background-size: 320px 105px;
}
#loginform {
	background: #213742 !important;
	font-weight: bold;
	border-radius: 15px;
}
.login #nav a, .login #backtoblog a {
	color:#f1f1f1 !important;
}
</style>

<?php
}
add_action('login_enqueue_scripts', 'cc_custom_logo');

/**
* Add Logo In Admin CP
*/
function cc_admin_logo() {
	echo '<img src="'.plugins_url('images/logo.png', __FILE__).'" style="width:200px;height:70px;padding-top:10px;">';
}

add_action('admin_notices', 'cc_admin_logo');

/*
* Edit Credit Footer Admin CP
*/
function cc_admin_footer_credit($text) {
	$text = '<p><a href="http://concon.vn" title="Homepage">Concon.vn</a> - LinkCare Connect for better life.</p>';
	return $text;
}

add_filter('admin_footer_text', 'cc_admin_footer_credit');
?>