<aside id="mainSidebar">
	<?php
		//logic to remove the form on the ESP listing because Rob requested "-- Remove the search field because there are only 2 staff listed on that page" 09-11-2020
		if(!is_page(42746)){
			?>
	<section>
		<label for="dsearch" class="hidden" id="directorySearch">Directory Search: </label>
		<input type="text" name="dsearch" class="text-input" aria-labelledby="directorySearch" id="sidebar-filter" value="" placeholder="<?php if(is_page($post = '42740')){echo 'Search Administration & Main Office';}elseif(is_page($post = '42744')){ echo 'Search Counseling Staff'; }elseif(is_page($post = '42742')){ echo 'Search Teachers'; }else{ echo 'Search our Staff...';} ?>" />
		<img class="directorySearchIcon" src="//globalassets.provo.edu/image/icons/search-lt.svg" alt="" />
	</section>
			<?php
		}
	?>
	<section>
		<h1>Teachers &amp; Staff</h1>
		<?= get_post(18419)->post_content; ?>
	</section>
	<?php
		//ID 42740 is Admin Directory. 42744 is the Counseling Directory. 42746 is the ESP directory
		if(!is_page(array(42740, 42744, 42746))) {
			?>
	<section>
		<h1>Find Your Teacher by Category</h1>
			<ul>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#art">Arts</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#cte">Career & Technical Education</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#english">English</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#facs">Family and Consumer Science</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#language">Language Arts</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#music">Music</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#math">Math</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#pe">Physical Education</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#science">Science</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#socialstudies">Social Studies</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/teachers-by-category#specialeducation">Special Education</a></li>
			</ul>
	</section>
			<?php
		}
	?>
</aside>
