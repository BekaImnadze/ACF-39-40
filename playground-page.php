<?php 

//Template Name: Playground

$playground_image = get_field('playground');

// echo '<pre>'; 
// print_r($playground_image);
// echo '</pre>';

get_header();
?>




<div class="playground-box container"> 
    <div class="playground-images">
        <?php 
            for($i = 1; $i <= sizeof($playground_image); $i++) {
                $image = 'image_' . $i;
                echo '
                <img src="'. $playground_image[$image] .'"alt="img">

                ';
            }
            ?>

    </div>
</div>
    <?php
    get_footer();