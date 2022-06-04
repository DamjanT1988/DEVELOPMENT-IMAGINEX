<?php get_header(); ?>


<section class="wrapper5">
    
        <!--wp print out content about the company-->
        
            <?php
            if (have_posts()) {
                the_content();
            }
            ?>
        
        <br>
        <hr>
    </section>
<br>


<section class="wrapper5">
        <!--wp print of posts-->
            <h2>Läs det senaste om oss:</h2>
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

            <?php
                }
            }
            ?>
            
    </section>



<?php get_footer(); ?>