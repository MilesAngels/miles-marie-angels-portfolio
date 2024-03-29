<section class="about-me-container">
    <div class="about-image-container">
        <div class="about-image" style="background-image: url('<?php the_field('profile_image')?>'); background-size: contain; height: 400px; background-repeat: no-repeat;"></div>
    </div>
    <div class="about-text">
        <h2 class="montserrat">Hi, I'm Miles Angels!</h2>
        <p>I am an aspiring Wordpress Developer apprentice based in Sacramento, who enjoys problem solving: be it in web developing or a puzzle. Creating accessible websites is my passion. Making sure everyone is given the opportunity to enjoy the websites I create.</p>
        <p>I enjoy learning new things at least anywhere between coding and science. The deep and space are both my long time fascination. I love researching about new discoveries in both aspects.</p>
        <p>Playing vidoegames and creating art are some of my hobbies. I have been slowly discovering the wonders of digital art and CSS art. I find that creating things that spring from my imagination to be my form of relaxation.</p>
        <h3><a href="<?php echo get_permalink(get_page_by_path('projects'))?>">My Projects &#x2192;</a></h3>
        <h3><a href="<?php echo get_permalink(get_page_by_path('art'))?>">My Art &#x2192;</a></h3>
    </div>
</section>

<section class="credentials">
    <div class="skills">
        <h3 id="skills">Skillset</h3>
        <article>
            <img class="icons" src="<?php the_field("icon_1");?>">
            <img class="icons" src="<?php the_field("icon_2")?>" >
            <img class="icons" src="<?php the_field("icon_3")?>" >
            <img class="icons" src="<?php the_field("icon_4")?>" >
            <img class="icons" src="<?php the_field("icon_5")?>" >
            <img class="icons" src="<?php the_field("icon_6")?>" >
            <img class="icons" src="<?php the_field("icon_7")?>" >
            <img class="icons" src="<?php the_field("icon_8")?>" >
            <img class="icons" src="<?php the_field("icon_9")?>">
            <img class="icons" src="<?php the_field("icon_10")?>">
        </article>
    </div>
    <div class="background">
        <h3 id="background-content">Experience</h3>
        <div>
            <h4>Wordpress Apprentice</h4>
            <p>Alphaworks, Bitwise Industries Aprrenciticeship Program</p>
            <p>January 2022 - Present</p>
        </div>
        <div>
            <h4>Front Desk</h4>
            <p>The Waterleaf at Land Park</p>
            <p>January 2022 - January 2022</p>
        </div>
        <div>
            <h4>Student</h4>
            <p>Bitwise WorkForce Training</p>
            <p>November 2021 - Present</p>
        </div>
        <div>
            <h4>Personal Assitant</h4>
            <p>Carolyn Knox</p>
            <p>June 2021 - January 2022</p>
        </div>
        <div>
            <h4>Caregiver</h4>
            <p>Caregivers of Land Park</p>
            <p>February 2017 - June 2017</p>
        </div>
    </div>
    <!-- <button class="project-button"><a href="<?php echo get_permalink(get_page_by_path('projects'))?>"></a></button> -->
</section>