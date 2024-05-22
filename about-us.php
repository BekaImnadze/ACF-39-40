<?php 
//Template Name: About us

get_header();  


?>


<section>
    <div class="container">
        <div class="about-box" >
            <div class="playground-images">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl.png' ?>" alt="">
            </div>
            <div class="heroSection" >
                <p class="hero-text">Hello,</p>
                <h1 class="hero-title">I’m Akhil T J</h1>
                <p class="hero-text">Freelance Designer, specialized in UI/UX.</p>
                <div class="hero-social">
                    <a href="<?php echo $social_links['twitter']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/twitter.png' ?>" alt="Twitter">
                    </a>
                    <a href="<?php echo $social_links['linkedin']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/linkedin.png' ?>" alt="linkedin">
                    </a>
                    <a href="<?php echo $social_links['instagram'] ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/instagram.png' ?>" alt="instagram">
                    </a>
                    <a href="<?php echo $social_links['behance'] ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/behance.png' ?>" alt="behance">
                    </a>
                </div>
            </div>
        </div>
        <div class="about-me">
            <h1>#About_Me</h1>
            <div class="about-text">
            <p>Vulputate nec risus montes, amet nam. Nulla ultricies nibh enim purus feugiat amet. Ac diam phasellus felis in pellentesque. Metus, tellus nec, in egestas adipiscing. Praesent vivamus urna enim urna, eu erat. Ultrices vitae lobortis quis sed felis.</p>
            </div>
        </div>
        <div class="experience">
            <h1>#Experience</h1>
            <div class="experience-text">
            <p>Vulputate nec risus montes, amet nam. Nulla ultricies nibh enim purus feugiat amet. Ac diam phasellus felis in pellentesque. Metus, tellus nec, in egestas adipiscing. Praesent vivamus urna enim urna, eu erat. Ultrices vitae lobortis quis sed felis.</p>
            </div>
            <div class="buttons">
                <div class="myBtn">Amazon</div>
                <div class="myBtn">Ea Games</div>
                <div class="myBtn">Spotify</div>
                <div class="myBtn">Linkedin</div>

            </div>
        </div>
        <div class="tools">
            <h1>#Tools</h1>
            <div class="tools-text">
            <p>Vulputate nec risus montes, amet nam. Nulla ultricies nibh enim purus feugiat amet. Ac diam phasellus felis in pellentesque. Metus, tellus nec, in egestas adipiscing. Praesent vivamus urna enim urna, eu erat. Ultrices vitae lobortis quis sed felis.</p>
            </div>
            <div class="buttons">
                <div class="myBtn">Figma</div>
                <div class="myBtn">Photoshop</div>
                <div class="myBtn">Illustrator</div>
                <div class="myBtn">Canva</div>
                <div class="myBtn">Trello</div>
                <div class="myBtn">Notion</div>

            </div>
        </div>
    </div>
</section>
<?php
   get_footer();



