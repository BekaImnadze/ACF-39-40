<!-- 
    template Name: Archive Projects
 -->

 <?php
$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1

);

$posts = get_posts($args);

// echo '<pre>';
// print_r($posts);
// echo '</pre>';

 get_header();
 ?>


<main class="archive-projects">
    <div class="container">
        <h1 class="Archive-page"><?php echo get_the_title();?></h1>
        <div class="project-archive-grid">
            <?php foreach ($posts as $post): ?>
                <div class="projects-archive-card">
                    <div class="projects-archive-card-text">
                        <h2 Class="secondary-title">
                            <?php echo $post->post_title?>
                        </h2>
                        <p class="projects-archive-card-excerpt">
                        <?php echo $post->post_excerpt?>
                        </p>
                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="myBtn">Read More</a>
                    </div>
                    <div class="projects-archive-card-img">
                        <a href="<?php echo get_the_permalink($post->ID); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID);?>" alt="">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>


<?php
get_footer();