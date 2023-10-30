<?php
/*
Template Name: Custom Newsletter Template
*/

get_header(); ?>

<main class="newsletter-main">
    <?php $image_1 = get_field('image_1'); ?>
    <?php if ($image_1): ?>
        <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
    <?php endif; ?>
    <!--Newsletter form-->
    <?php echo do_shortcode('[mailpoet_form id="1"]'); ?>
</main>
<?php
get_footer();
?>
</body>

</html>