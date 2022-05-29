<?php get_header(); ?>


<div class="wrapper5">
    <section>
        <!--wp print out content about the company-->
        <article>
            <?php
            if (have_posts()) {
                the_content();
            }
            ?>
        </article>
        <br>
        <hr>
    </section>
</div>
<br>


<div class="wrapper5">
    <section>
        <!--wp print of posts-->
        <article>
            <h2>Senaste nytt:</h2>
            <?php
            query_posts('posts_per_page=2');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
            
                        <h3><?= the_title(); ?><br><?= get_the_date(); ?></h3>
                        <?php 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        the_excerpt();?>

                        <a href="<?= the_permalink(); ?>" class="button1" >LÄS MER >></a>
                        
                        <br><br>
                    <hr>
                    </article>
            <?php
                }
            }
            ?>
            
    </section>
</div>



<?php get_footer(); ?>