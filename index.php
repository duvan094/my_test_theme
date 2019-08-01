<?php get_header(); ?>

<main>
    
    <?php 
        if ( have_posts() ) {
        
        echo "<ul class='grid'>";
    
            while ( have_posts() ) {
                the_post(); 
            
    ?>
            <li class="grid-item">
                <a href=<?php echo the_permalink();?>>
                    <figure style="background:url('<?php echo get_the_post_thumbnail_url($post->ID,'full') ?>'); background-size:cover; background-position:center;">
                    </figure>
                    <!--                        
        <h2>
                        <?php //the_title() ?>
                    </h2>-->
                </a>
            </li>
    <?php

                
            } // end while
        
        echo "</ul>";

        }


?>

</main>



<?php get_footer(); ?>