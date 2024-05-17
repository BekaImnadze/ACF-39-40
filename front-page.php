<?php
get_header();

$first_section = get_field('first_section');
$hero_name = $first_section['hero_name'];
$hero_specialization = $first_section['hero_specialization'];
$hero_text = $first_section['hero_text'];
$social_links = $first_section['social_links'];

// error კოდი
$featured_works = get_field('featured_works');
$main_title = $featured_works ['main_title'];
$secondary_title = $featured_works ['secondary_title'];
$feature_text = $featured_works ['feature_text'];
$secondary_paragraph = $featured_works ['secondary_paragraph'];
$image = $featured_works ['card_image'];

// $featured_works = get_field('featured_works') ?? [];
// $main_title = $featured_works['main_title'] ?? '';
// $secondary_title = $featured_works['secondary_title'] ?? '';
// $feature_text = $featured_works['feature_text'] ?? '';
// $secondary_paragraph = $featured_works['secondary_paragraph'] ?? '';
// $image = $featured_works['card_image'] ?? '';



$test_post = get_field('test_post');
echo '<pre>';
print_r($test_post);
echo '</pre>';




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
                    <p> <?php echo $feature_text ?></p>
                    <ul>
                        <li><?php echo $secondary_paragraph ?></li>
                        
                    </ul>
                    <button class="myBtn">
                        Read More
                    </button>
                </div>
                <div class="img-box">
                    <img src=<?php echo $image ?> alt="img">
                </div>
            </div>
            <div class="featured-content">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/men.png" alt="img">
                </div>
                <div class="featured-content-text">
                    <h3>
                        Id vel varius mauris morbi quis at commodo, cras
                    </h3>
                    <p>
                    Eget diam purus, a massa sed egestas pulvinar id. Tristique odio eu.
                    </p>
                    <ul>
                        <li>Eget diam purus, a massa</li>
                        <li>Eget diam purus, a massa</li>
                        <li>Eget diam purus, a massa</li>
                    </ul>
                    <button class="myBtn">
                        Download
                    </button>
                </div>
            </div>
            <div class="featured-content">
                <div class="featured-content-text">
                    <h3>
                        Id vel varius mauris morbi quis at commodo, cras
                    </h3>
                    <p>
                    Eget diam purus, a massa sed egestas pulvinar id. Tristique odio eu.
                    </p>
                    <ul>
                        <li>Eget diam purus, a massa</li>
                        <li>Eget diam purus, a massa</li>
                        <li>Eget diam purus, a massa</li>
                    </ul>
                    <button class="myBtn">
                        Read More
                    </button>
                </div>
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/girl-with-horse.png" alt="img">
                </div>
            </div>
            <div class="featured-content">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/girl-and-men.png" alt="img">
                </div>
                <div class="featured-content-text">
                    <h3>
                        Id vel varius mauris morbi quis at commodo, cras
                    </h3>
                    <p>
                    In dignissim ut tortor quam. In et convallis suspendisse vel. Urna, ante ut mauris, dolor interdum libero, proin accumsan, vitae. In risus sit convallis volutpat a magna pulvinar volutpat.
                    </p>
                    <button class="myBtn">
                        Live Demo
                    </button>
                </div>
            </div>
            <div class="featured-content">
                <div class="featured-content-text">
                    <h3>
                        Id vel varius mauris morbi quis at commodo, cras
                    </h3>
                    <p>
                    In dignissim ut tortor quam. In et convallis suspendisse vel. Urna, ante ut mauris, dolor interdum libero, proin accumsan, vitae. In risus sit convallis volutpat a magna pulvinar volutpat.
                    </p>
                    <button class="myBtn">
                        Live Demo
                    </button>
                </div>
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/girl2.png" alt="img">
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

    <div>
        
    </div>

</main>


