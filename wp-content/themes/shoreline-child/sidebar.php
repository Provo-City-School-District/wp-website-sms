<aside id="mainSidebar">
	<?php
	$page = get_post(21298);
	if ($page) {
		echo apply_filters('the_content', $page->post_content);
	}
	?>
</aside>