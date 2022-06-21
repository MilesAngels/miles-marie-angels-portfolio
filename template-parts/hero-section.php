<section class="hero-section">
    <img src="<?php the_field('hero-image');?>" class="hero-image">
        
    <!-- Display when it is the front-page -->
    <?php if(is_front_page()):?>
        <div class="overlay">
            <p>Hey! My name is Miles.</p>
            <p>I'm a WordPress developer.</p>
            <button class="project-button"><a href="#">See my work</a></button>
        </div>
    <?php elseif (is_page() && !is_page('contact')): ?>
        <div class="overlay center">
            <h1><?php the_field('overlay_text'); ?></h1>

        </div>
    <?php elseif (is_page('contact')):?>
        <?php get_template_part('template-parts/contact-form');?>
        
    <?php endif; ?>
</section>