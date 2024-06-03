<?php
get_header();

$first_section = get_field('first_section');
$hero_name = $first_section['hero_name'];
$hero_specialization = $first_section['hero_specialization'];
$hero_text = $first_section['hero_text'];
$social_links = $first_section['social_links'];


$featured_work = get_field('featured_work');
$main_title = $featured_work ['main_title'];
$secondary_title = $featured_work ['secondary_title'];
$featured_text = $featured_work ['featured_text'];
$list_text = $featured_work ['list_text'];
$image = $featured_work ['card_image'];
$btnText = $featured_work ['button_text'];

$featured_works_2 = get_field('featured_work_2');

$featured_works_3 = get_field('featured_work_3');

$featured_works_4 = get_field('featured_work_4');

$featured_works_5 = get_field('featured_work_5');




// echo '<pre>';
// print_r($featured_works_2);
// echo '</pre>';




?>

<main class="home-page container">

    <!-- first section -->
    <section class="section-1 " >
        <div class="hero-content container">
              <div class="heroSection">
                <p class="hero-text"><?php echo $hero_text ?></p>
                    <h1 class="hero-title"><?php echo $hero_name ?></h1>
                    <p class="hero-text"><?php echo $hero_specialization ?></p>
                <div class="hero-social">
                    <?php if($social_links['twitter']):?>
                    <a href="<?php echo $social_links['twitter']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/twitter.png' ?>" alt="Twitter">
                    </a>
                    <?php endif; ?>
                    <?php if($social_links['linkedin']):?>
                    <a href="<?php echo $social_links['linkedin']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/linkedin.png' ?>" alt="linkedin">
                    </a>
                    <?php endif; ?>
                    <?php if($social_links['instagram']):?>
                    <a href="<?php echo $social_links['instagram'] ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/instagram.png' ?>" alt="instagram">
                    </a>
                    <?php endif; ?>
                    <?php if($social_links['behance']):?>
                    <a href="<?php echo $social_links['behance'] ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . './assets/images/behance.png' ?>" alt="behance">
                    </a>
                    <?php endif; ?>
                </div>
              </div>
        </div>
    </section>

    <!-- second section -->
    <section class="section-2">
        <div class="section-2-box container">
        <h1><?php echo $main_title ?></h1>
            <div class="featured-content">
                <div class="featured-content-text">
                    <h3><?php echo $secondary_title ?></h3>
                    <p> <?php echo $featured_text ?></p>
                    <ul><?php echo $list_text ?></ul>
                    <button class="myBtn"><?php echo $btnText?></button>
                </div>
                <div class="img-box">
                    <img src=<?php echo $image ?> alt="img">
                </div>
            </div>
            <div class="featured-content">
                <div class="img-box">
                    <img src=<?php echo $featured_works_2 ['card_image_2']; ?> alt="img">
                </div>
                <div class="featured-content-text">
                    <h3><?php echo $featured_works_2 ['secondary_title_2']; ?> </h3>
                    <p> <?php echo $featured_works_2 ['featured_text_2']; ?> </p>
                    <ul><?php echo $featured_works_2 ['list_text_2']; ?></ul>
                    <button class="myBtn"><?php echo $featured_works_2 ['button_text_2']; ?></button>
                </div>
            </div>
            <div class="featured-content">
                <div class="featured-content-text">
                    <h3><?php echo $featured_works_3 ['secondary_title_3']; ?> </h3>
                    <p><?php echo $featured_works_3 ['featured_text_3']; ?> </p>
                    <ul><?php echo $featured_works_3 ['list_text_3']; ?></ul>
                    <button class="myBtn"><?php echo $featured_works_3 ['button_text_3']; ?></button>
                </div>
                <div class="img-box">
                    <img src=<?php echo $featured_works_3 ['card_image_3']; ?> alt="img">
                </div>
            </div>
            <div class="featured-content">
                <div class="img-box">
                    <img src=<?php echo $featured_works_4 ['card_image_4']; ?> alt="img">
                </div>
                <div class="featured-content-text">
                    <h3><?php echo $featured_works_4 ['secondary_title_4']; ?></h3>
                    <p><?php echo $featured_works_4 ['featured_text_4']; ?></p>
                    <button class="myBtn"><?php echo $featured_works_4 ['button_text_4']; ?></button>
                </div>
            </div>
            <div class="featured-content">
                <div class="featured-content-text">
                    <h3><?php echo $featured_works_5 ['secondary_title_5']; ?></h3>
                    <p><?php echo $featured_works_5 ['featured_text_5']; ?></p>
                    <button class="myBtn"><?php echo $featured_works_5 ['button_text_5']; ?></button>
                </div>
                <div class="img-box">
                    <img src=<?php echo $featured_works_5 ['card_image_5']; ?> alt="img">
                </div>
            </div>
        </div>
    </section>

    <!-- third section -->
    <section-3 class="section-3">
        <div class="playground-box container">
            <h1>#Playground</h1>
            <div class="playground-images">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/men.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl-with-horse.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl-and-men.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl2.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/men.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl-with-horse.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl-and-men.png' ?>" alt="">
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/girl2.png' ?>" alt="">
            </div>
    </section-3>

    <!-- fourth section -->
    

    <div>
        
    </div>

</main>
<?php
   get_footer();


