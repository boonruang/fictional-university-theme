<div class="hero-slider__slide" style="background-image: url(<?php echo get_field('hero_slider_background_image')['sizes']['hereSlider']; ?>)">
    <div class="hero-slider__interior container">
        <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center"><?php the_title() ?></h2>
        <p class="t-center"><?php echo wp_trim_words(get_the_content(), 12);?></p>
        <p class="t-center no-margin"><a href="<?php the_permalink() ?>" class="btn btn--blue"><?php echo get_field('hero_slider_button_text'); ?></a></p>
        </div>
    </div>
</div>