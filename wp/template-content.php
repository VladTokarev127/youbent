<?php /* Template Name: Контентная страница */ ?>
<?php get_header(); ?>

	<!-- start section content__page -->
	<section class="content__page">
		<div class="content__container">

			<h1 class="content__title"><?php the_title(); ?></h1>
			<div class="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<?php endif; ?>
			</div>

		</div>
	</section>
	<!-- end section content__page -->

<?php
get_footer(); ?>