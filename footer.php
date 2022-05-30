


<!--sidfoten med kontakt, länkar & sociala medier-->
<footer>
    <div id="footer1">

        <!--wp widget code-->
        <?php if (is_active_sidebar('footer1')) : ?>
            <div>
                <?php dynamic_sidebar('footer1'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div id="footer2">
        <?php if (is_active_sidebar('footer2')) : ?>
            <div>
                <?php/dynamic_sidebar('footer2'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div id="footer3">
        <?php if (is_active_sidebar('footer3')) : ?>
            <div>
                <?php dynamic_sidebar('footer3'); ?>
            </div>
        <?php endif; ?>
    </div>

</footer>
<?php wp_footer(); ?>
</div>

<!--script for mobile menu-->
<script src="JS/main.js"></script>

</body>