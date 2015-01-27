<?php
/**
 * Plugin Name: Turn Down For Publish
 * Plugin URI: http://jeffmatson.net
 * Description: Plays an audio clip from Turn Down For What when publishing a post.
 * Version: 1.0
 * Author: Jeff Matson
 * Author URI: http://jeffmatson.net
 * License: GPL2
 */
function turn_down_for_what() {

	echo '
<script type="text/javascript">
	<!--
	var publish = document.getElementById("publish");
	if (publish !== null) publish.onclick = function(){
		if (publish.value == "Publish") {
			var audio = new Audio("' . plugin_dir_url( __FILE__ ) .'td4w.mp3");
			audio.play();
		};
	};
	// -->
</script>';

}

add_action( 'admin_footer', 'turn_down_for_what', 10, 2 );  