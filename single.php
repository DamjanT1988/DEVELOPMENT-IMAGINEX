<?php get_header(); ?>


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
<script>
    let nameCurrPage = document.querySelector('[aria-current="page"]');
    let CurrPage = nameCurrPage.firstChild.nodeValue;
    document.getElementById("currentPage").innerHTML = CurrPage;
</script>



<?php get_footer(); ?>