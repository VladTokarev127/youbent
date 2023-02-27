<?php /* Template Name: О нас */ ?>
<?php get_header(); ?>

	<div class="page-content">

		<!-- start section shop__header -->
		<section class="shop__header">
			<div class="shop__header-content">
				<h1 class="shop__header-title"><?php the_title(); ?></h1>
			</div>
			<div class="shop__header-img"><img src="<?php the_field('img'); ?>" alt="<?php the_title(); ?>"></div>
		</section>
		<!-- end section shop__header -->

		<!-- start section about -->
		<section class="about">
			<div class="about__container">

				<div class="about__title">
					<div class="about__arrow">
						<svg preserveAspectRatio="xMidYMid meet" data-bbox="1.95 9.05 56.15 42" xmlns="http://www.w3.org/2000/svg" viewBox="1.95 9.05 56.15 42" role="presentation" aria-hidden="true">
							<path d="M56.5 27.6H10.4l14.7-14.7c.6-.6.6-1.6 0-2.2L24 9.5c-.6-.6-1.6-.6-2.2 0L2.4 28.9c-.6.6-.6 1.6 0 2.2l1.2 1.2 18.3 18.3c.6.6 1.6.6 2.2 0l1.2-1.2c.6-.6.6-1.6 0-2.2L10.4 32.4h46.1c.9 0 1.6-.7 1.6-1.6v-1.7c0-.8-.7-1.5-1.6-1.5z"></path>
						</svg>
					</div>
					<h1 class="about__title-val"><?php the_field('title'); ?></h1>
					<div class="about__title-angle">
						<svg preserveAspectRatio="xMidYMid meet" data-bbox="10.305 4.552 131.804 131.5" xmlns="http://www.w3.org/2000/svg" viewBox="10.305 4.552 131.804 131.5" role="presentation" aria-hidden="true">
							<path d="M142.109 136.052H10.305V4.552l131.804 131.5z"></path>
						</svg>
					</div>
					<div class="about__img"><img src="<?php the_field('bottom_img'); ?>" alt=""></div>
				</div>
				<div class="about__content">
					<div class="about__text content">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; else: ?>
						<?php endif; ?>
					</div>
				</div>

			</div>
		</section>
		<!-- end section about -->

<?php get_footer(); ?>