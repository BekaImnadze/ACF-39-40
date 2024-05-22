<?php
//Template Name: Featured 

get_header();


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

$featured_works_5 = get_field('featured_work_5')
?>          


<section class="section-2">
        <div class="section-2-box container">
           
            <div class="featured-content">
                <div class="featured-content-text">
                    <h3><?php echo $secondary_title ?></h3>
                    <p> <?php echo $featured_text ?></p>
                    <ul>
                        <li><?php echo $list_text ?></li>
                        
                    </ul>
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
                    <img src= <?php echo $featured_works_3['card_image_3']?> alt="img">
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
   <?php
   get_footer();