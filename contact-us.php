<?php 
//Template Name: Contact Us

get_header();

?>

<section>
    <div class="container">
        <div class="contact">
            <div class="contact-box">
                <div class="contact-page">
                    <?php echo do_shortcode('[contact-form-7 id="05ddd81" title="Contact Form" html_class="portfolio-contact-form"]')?>
                </div>
                    <div class="social-box">
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
    </div>
</section>

<?php
get_footer();