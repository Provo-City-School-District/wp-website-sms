<?php 
	/* Template Name: Syllibi Page */
	get_header(); ?>
		<main id="contentArea">
			<?php custom_breadcrumbs(); ?>
			<section id="mainContent" class="single-page">
					<?php
						
							do_shortcode( '[modified-date]' );
					
						if(have_posts()) :
						while (have_posts()) : the_post();?>
						   	<h1><?php the_title(); ?></h1>
						   			<?php 
							   			if ( has_post_thumbnail() ) {
								   			echo get_the_post_thumbnail( $post_id, 'full' );
								   		}
							   		?>
							   	<h2>Course Description/Overview/Welcome Statement</h2>
				   					<?php the_field('course_description'); ?>
						   		<h2>Learning Expectations</h2>
						   			<?php the_field('learning_expectations'); ?>

						   		<h2>Assessment of Progress</h2>
						   			<?php the_field('assessment_of_progress'); ?>

						   		<h2>Course Materials</h2>
						   			<?php the_field('course_materials'); ?>

						   		<h2>Classroom Procedures</h2>
						   			<?php the_field('classroom_procedures'); ?>

						   		<h2>Calendar of Due Dates for Major Assignments</h2>
						   			<?php the_field('calendar_of_due'); ?>

						   		<h2>Progress Reports and Report Cards</h2>
						   			<?php the_field('progress_reports'); ?>

						   		<h2>Connecting Home to School</h2>
						   			<?php the_field('connecting_home_to_school'); ?>

						   		<h2>Personal Statement and other items (optional)</h2>
						   			<?php the_field('personal_statement_and_other_items'); ?>	 
					   				<?php the_content(); ?>

					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
				?>
				<div class="clear"></div>
			</section>
		</main>
		<aside id="mainSidebar" class="teacherSidebar">
			
			<aside class="syllabus">
				<h2>My Web Pages</h2>
					<?php echo do_shortcode('[wpb_parentpages]'); ?>
			</aside>	
				
			
		</aside>
		<?php
	   		get_footer();
		?>