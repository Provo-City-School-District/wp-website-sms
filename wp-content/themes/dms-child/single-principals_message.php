<?php get_header(); ?>
		<main id="contentArea">
			<?php custom_breadcrumbs(); ?>
			<section id="mainContent" class="single-post">
			<h1>Principal's Message</h1>
				
					<?php
						//$galleryArray = get_post_gallery_ids($post->ID);
						if(have_posts()) :
							while (have_posts()) : the_post();?>
							   			<header class="postmeta">
											<h2><?php the_title(); ?></h2>
											<ul>
												<li><img src="//globalassets.provo.edu/image/icons/calendar-ltblue.svg" alt="" /><?php the_time(' F jS, Y') ?></li>
												<!-- <li><img src="//globalassets.provo.edu/image/icons/person-ltblue.svg" alt="" /><?php the_author_posts_link() ?> /</li>
												<li><img src="//globalassets.provo.edu/image/icons/hamburger-ltblue.svg" alt="" />Principal's Message</li> -->
											</ul>
										</header>
										<img class="featured-image" src="<?php echo get_theme_file_uri(); ?>/assets/images/principal-message.jpg" alt="Admin photo" class="right" />
								   		<?php the_content(); ?>

						   	<?php endwhile;
								else :
									echo '<p>No Content Found</p>';
						endif;
						wp_reset_query();
						echo do_shortcode('[social_warfare]');
				?>
					<div class="bottom"></div>

			</section>
			<section class="postgrid">
			   	<?php
			   		$currentID = get_the_ID();
			   		//Removes news category from get_the_category
					$categoryID = get_the_category($post->ID);
					foreach ( $categoryID as $category ) {
					 if ( $category->term_id == 192 ) {
					   continue;
					  }
					  $postcategories = '"'.$category->name.'"'.',';
					}
			   		$posts_to_show = get_option('single_post_count_data');
			   						if ($posts_to_show <= 3) {
				   						$posts_to_show = 3;
			   						}
			   					//use $postcategories for category_name if you want to display category related posts only. Use actual category name if you want to only use that category
			   		$my_query = new WP_Query( array('showposts' => $posts_to_show, 'post_type'  => 'principals_message', 'post__not_in' => array($currentID)));
			   			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			   				<article class="post">
								<div class="featured-image">
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/principal-message.jpg" alt="Admin photo" class="right" />
							   	</div>
						   		<header class="postmeta">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<ul>
											<li><img src="//globalassets.provo.edu/image/icons/calendar-ltblue.svg" alt="" /><?php the_time(' F jS, Y') ?></li>
										</ul>
								</header>
						   		<?php echo get_excerpt(); ?>
						   	</article>
						<?php endwhile;?>
   		</section>
		</main>
		<?php
			$sidebar = get_field('sidebar');
	   		get_sidebar( $sidebar );
			get_footer();
		?>