<?php get_header(); ?>



<div class="wrapper5">
    <section>
<!--wp print-->
        <article>
            <?php
            if (have_posts()) {
                the_content();
            }
            ?>
        </article>

    </section>
</div>




<?php get_footer(); ?>