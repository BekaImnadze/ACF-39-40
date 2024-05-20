<?php 
//Template Name: Contact Us

get_header();

?>

<section>
    <div class="container">
        <div class="contact">
            <div class="input-box">
                <div class="contact-inputs">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Message">
                </div>
            </div>
            <div class="social-box">
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
                <div class="divBtn">
                    <button class="myBtn">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-4">
        <div class="allRights container">
            <p>
            All Rights Reserved
            </p>
            <img src="<?php echo get_template_directory_uri() . './assets/images/copyright.png' ?>" alt="">
            <p>
            2021 akhiltj
            </p>
            <img src="<?php echo get_template_directory_uri() . './assets/images/heart.png' ?>" alt="">
        </div>

</section>