<?php get_header(); ?>

	<!-- start section hero -->
	<section class="hero" style="background-image: url(<?php the_field('bg_1'); ?>);">
		<div class="hero__content">

			<h1 class="hero__title"><?php the_field('title_1'); ?></h1>
			<a href="/magazin" class="btn btn_border hero__btn">ОНЛАЙН МАГАЗИН</a>

		</div>
	</section>
	<!-- end section hero -->

	<!-- start section hero__about -->
	<section class="hero__about">
		<div class="hero__about-container">
			
			<h2 class="hero__about-title"><?php the_field('title_2'); ?></h2>
			<div class="hero__about-content"><?php the_field('text_1'); ?></div>
			<a href="/magazin" class="btn hero__about-btn">КУПИТЬ ОНЛАЙН</a>

		</div>
	</section>
	<!-- end section hero__about -->

	<!-- start section stocks -->
	<section class="stocks">
		<div class="stocks__grid">

			<?php while( the_repeater_field('list_1') ): ?>
				<a href="<?php the_sub_field('link'); ?>" class="stocks__item">
					<div class="stocks__bg"><img src="<?php the_sub_field('bg'); ?>" alt=""></div>
					<div class="stocks__info"><?php the_sub_field('text'); ?></div>
					<div class="stocks__arrow">
						<svg preserveAspectRatio="xMidYMid meet" data-bbox="1.95 9.05 56.15 42" xmlns="http://www.w3.org/2000/svg" viewBox="1.95 9.05 56.15 42" role="presentation" aria-hidden="true">
							<path d="M56.5 27.6H10.4l14.7-14.7c.6-.6.6-1.6 0-2.2L24 9.5c-.6-.6-1.6-.6-2.2 0L2.4 28.9c-.6.6-.6 1.6 0 2.2l1.2 1.2 18.3 18.3c.6.6 1.6.6 2.2 0l1.2-1.2c.6-.6.6-1.6 0-2.2L10.4 32.4h46.1c.9 0 1.6-.7 1.6-1.6v-1.7c0-.8-.7-1.5-1.6-1.5z"></path>
						</svg>
					</div>
				</a>
			<?php endwhile; ?>

		</div>

		<div class="stocks__title"><?php the_field('title_3'); ?></div>
	</section>
	<!-- end section stocks -->

	<!-- start section more -->
	<section class="more">
		<div class="more__container">

			<div class="more__content">
				<?php the_field('text_2'); ?>
				<a href="#" class="more__btn btn btn_border">Читать подробнее</a>
			</div>

			<div class="more__img"><img src="<?php the_field('bg_2'); ?>" alt=""></div>

		</div>
	</section>
	<!-- end section more -->

	<!-- start section shop -->
	<section class="shop">
		<div class="shop__container">

			<h2 class="hero__about-title">МАГАЗИН КЛИМАТА</h2>
			<div class="shop__list">
				<?php echo do_shortcode ('[products limit="6" columns="5"]'); ?>
			</div>
			<div class="shop__btns">
				<!-- <a href="#" class="shop__btn btn">Показать еще</a> -->
				<a href="/magazin" class="shop__btn btn btn_border">ОНЛАЙН-МАГАЗИН ВЕНТИЛЯЦИИ</a>
			</div>

		</div>
	</section>
	<!-- end section shop -->

	<!-- start section dev -->
	<section class="dev">
		<div class="dev__container">

			<div class="dev__content">
				<h2 class="dev__title"><?php the_field('title_4'); ?></h2>
				<div class="dev__text"><?php the_field('text_3'); ?></div>
			</div>

			<div class="dev__grid">
				<?php while( the_repeater_field('list_2') ): ?>
					<a href="<?php the_sub_field('link'); ?>" class="dev__item"><img src="<?php the_sub_field('img'); ?>" alt="#"></a>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section dev -->

	<!-- start section contacts -->
	<section class="contacts">
		<div class="contacts__container">

			<h2 class="contacts__title"><?php the_field('title_5'); ?></h2>
			<div class="contacts__grid">
				<div class="contacts__item">
					<h3 class="contacts__item-title">АДРЕС</h3>
					<div class="contacts__item-text">
						<p><?php the_field('address'); ?></p>
					</div>
				</div>
				<div class="contacts__item">
					<h3 class="contacts__item-title">Контакты</h3>
					<div class="contacts__item-text">
						<?php
							$tel = get_field('tel');
							$result = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $tel);
						?>
						<p><a href="tel:<?php echo $tel; ?>"><?php the_field('tel'); ?></a></p>
						<p><a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></p>
					</div>
				</div>
				<div class="contacts__item">
					<h3 class="contacts__item-title">Часы работы</h3>
					<div class="contacts__item-text">
						<?php while( the_repeater_field('list_3') ): ?>
							<p><b><?php the_sub_field('title'); ?></b> <?php the_sub_field('text'); ?></p>
						<?php endwhile; ?>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- end section contacts -->

	<div class="map" id="map"><?php the_field('map'); ?></div>

<?php get_footer(); ?>