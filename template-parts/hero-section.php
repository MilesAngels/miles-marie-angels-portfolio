<section class="hero-section">
    <?php if(is_page('projects')):?>
        <div class="water">
            <div class="grid">
            <!--   div  1   -->
                <div class="big-bubbles">
                <div class="tiny-bubbles"></div>
                <div class="medium-bubbles"></div>
                </div>
            <!-- div 2 -->
                <div class="small-bubbles">
                <div class="medium-bubbles"></div>
                <div class="tiny-bubbles">
                    <div class="big-bubbles"></div>
                </div>
                </div>
            <!-- div 3 -->
                <div class="medium-bubbles">
                <div class="tiny-bubbles"></div>
                <div class="small-bubbles"></div>
                </div>

            <!-- div 4 -->
                <div class="tiny-bubbles">
                <div class="medium-bubbles">
                    <div class="tiny-bubbles"></div>
                </div>
                <div class="small-bubbles"></div>
                </div>
            <!-- div 5 -->
                <div class="small-bubbles">
                <div class="tiny-bubbles"></div>
                <div class="tiny-bubbles"></div>
                <div class="small-bubbles"></div>
                </div>
            <!-- div 6 -->
                <div class="medium-bubbles">
                <div class="tiny-bubbles"></div>
                <div class="small-bubbles"></div>
                </div> 
                <!--   div  7   -->
                <div class="big-bubbles">
                <div class="tiny-bubbles"></div>
                <div class="medium-bubbles"></div>
                </div>
                <!-- div 5 -->
                <div class="small-bubbles">
                <div class="tiny-bubbles"></div>
                <div class="tiny-bubbles"></div>
                <div class="small-bubbles"></div>
                </div>
            </div>
            </div>
    <?php elseif(is_page('about')):?>
        <?php get_template_part('template-parts/stars');?>
    <?php else:?>
        <img src="<?php the_field('hero-image');?>" class="hero-image">
    <?php endif; ?> 
    
    <!-- Display when it is the front-page -->
    <?php if(is_front_page()):?>
        <div class="overlay">
            <div class="front-text">
                <p>Hey! My name is <strong>Miles</strong>.</p>
                <p>I'm a <span>WordPress</span> developer.</p>
                <button class="project-button"><a href="<?php echo get_permalink(get_page_by_path('projects'))?>">See my work</a></button>
            </div>
        </div>
    <?php elseif (is_page() && !is_page('contact')): ?>
        <div class="overlay center">
            <h1 class="weight-600 name"><?php the_field('overlay_text'); ?></h1>
        </div>
    <?php elseif (is_page('contact')):?>
        
        <?php get_template_part('template-parts/contact-hero');?>
        
    <?php endif; ?>
</section>