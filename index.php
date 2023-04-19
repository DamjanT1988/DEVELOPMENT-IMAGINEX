<?php get_header(); 
require_once 'vendor/autoload.php'; // Path to the OpenAI PHP library?>
?>

<div class="wrapper5">
    <section>

    
        <!--wp print out posts-->
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article>
                    

                    <h3><?= the_title(); ?><br><?= get_the_date(); ?></h3>
                    <?php //$content = get_the_content();
                        //echo mb_strimwidth($content, 0, 600, '...'); 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        the_excerpt();?>

                        <a href="<?= the_permalink(); ?>" class="button1" >LÄS MER</a>
                        
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


