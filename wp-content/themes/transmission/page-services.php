<?php get_header(); ?>

<div class = "content wrapper-main">
        <h1 class = "h1--services"> Услуги </h1>
        <div class = "intercity_services">
            <div class = "intercity_services__item--service">
				<div class = "services__box">
                	<img src = "<?php bloginfo('template_url'); ?>/assets/images/services_1.png" alt = "Междугородние грузоперевозки">
				</div>
                <p class = "services__box__text">Междугородние<br> грузоперевозки</p>
            </div>
            <div class = "intercity_services__item--service">
				<div class = "services__box">
					<img src = "<?php bloginfo('template_url'); ?>/assets/images/services_2.png" alt = "Перевозки рефрижераторами">
                </div>
				<p class = "services__box__text">Перевозки<br> рефрижераторами</p>
            </div>
            <div class = "intercity_services__item--service">
                <div class = "services__box">
					<img src = "<?php bloginfo('template_url'); ?>/assets/images/services_3.png" alt = "Негабаритные перевозки">
				</div>
                <p class = "services__box__text">Негабаритные<br> перевозки</p>
            </div>
            <div class = "intercity_services__item--service">
				<div class = "services__box">
					<img src = "<?php bloginfo('template_url'); ?>/assets/images/services_4.png" alt = "Домашний переезд">
                </div>
				<p class = "services__box__text">Домашний<br> переезд</p>
            </div>
        </div>
    </div>

<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php /*the_content();*/ ?>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>