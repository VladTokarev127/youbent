<?php /* Template Name: Магазин */ ?>
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

		<!-- start section dev -->
		<section class="dev">
			<div class="dev__container dev__container_shop">

				<div class="dev__content" style="padding-top: 0;">
					<h2 class="dev__title"><?php the_field('sub_title'); ?></h2>
					<div class="dev__text"><?php the_field('sub_text'); ?></div>
				</div>

				<div class="dev__grid">
					<?php while( the_repeater_field('sub_list') ): ?>
						<div class="dev__item"><img src="<?php the_sub_field('img'); ?>" alt="#"></div>
					<?php endwhile; ?>
				</div>

			</div>
		</section>
		<!-- end section dev -->
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo do_shortcode('[products limit="15" columns="5" paginate="true"]'); ?>
		</main>
	</div>

<?php
do_action( 'storefront_sidebar' );
get_footer(); ?>