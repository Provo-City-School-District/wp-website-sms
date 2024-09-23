<?php get_header(); ?>
		<main id="contentArea">
			<?php custom_breadcrumbs(); ?>
			<section id="mainContent" class="postgrid newsBlog">
				<h1><?php echo get_bloginfo( 'name' ); ?> News : <?php single_cat_title(); ?></h1>
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$the_query = new WP_Query( array( 'posts_per_page' => 9 ,'category_name' => 'college-planning' , 'paged'  => $paged) );
						if($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();?>
						   		<article class="post">
					   				<a href="<?php the_permalink(); ?>">
									   	<div class="featured-image">
								   			<?php the_post_thumbnail(); ?>
								   		</div>
							   		</a>
					   				<header class="postmeta">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<ul>
											<li><img src="//globalassets.provo.edu/image/icons/calendar-ltblue.svg" alt="" /><?php the_time(' F jS, Y') ?></li>
										</ul>
									</header>

					   				<?php
						   				echo get_excerpt();
						   			?>
						   		</article>
						   	<?php endwhile;?>
							   	<nav class="archiveNav">
							   		<?php echo paginate_links( array( 'total' => $the_query->max_num_pages)); ?>
							   	</nav>
								<?php else :
									echo '<p>No Content Found</p>';
						endif;
					?>
			</section>
		</main>
		<?php
			get_sidebar();
			get_footer();
		?>