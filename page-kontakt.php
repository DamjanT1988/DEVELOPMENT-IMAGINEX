<?php get_header(); ?>



<div class="wrapper5">
    <section>
<!--contact form-->
        
            <fieldset>
                <legend>Kontaktfomulär</legend>
<!--wp print-->
                <?php
                if (have_posts()) {
                    the_content();
                }
                ?>
            </fieldset>
        


    </section>
</div>




<?php get_footer(); ?>