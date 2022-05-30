<?php get_header(); 
/*
Template Name: New page with posts
*/
?>


<div class="wrapper5">
    <section>

<!--wp print-->
        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article>
                    <h3><?= get_the_date(); ?></h3>
                    <?php the_content(); ?>

                </article>
                <br>
        <?php
            }
        }
        ?>
    </section>
</div>

<!--menu object marking script-->
<script src="JS/main.js"></script>



<?php get_footer(); ?>