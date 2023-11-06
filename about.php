<?php
/*
Template Name: Custom About Template
*/

get_header(); ?>
<main class="about-main">
    <h2>Our Story</h2>
    <div class="about-main-flex-card1">
        <div>
            <p>Established in 1975, Little bits Therapeutic Riding Association (LBTRA) is a non-profit organization that
                offers recreational riding programs with therapeutic benefits for children and adults with disabilities.
                Each year up to 210 riders can benefit from our services. The organization is governed by a volunteer
                board
                of directors and funded through donations and fundraising activities.</p>
        </div>
        <div><!--adding editable image -->
            <?php $image_1 = get_field('image_1'); ?>
            <?php if ($image_1): ?>
                <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
            <?php endif; ?>
        </div>
    </div>
    <div class="about-main-flex-card2">
        <p>Adrienne Lamb from CBC visited the Equine Centre on Tuesday Nov.14,2017 in morning and filmed all aspects of
            the facility Including a bit of our program. Click HERE to see a segment From CBC about Little Bits.</p>
    </div>
    <div><!--adding editable image -->
        <?php
        echo do_shortcode('[smartslider3 slider="3"]');
        ?>
    </div>
</main>
<?php
get_footer();
?>
</body>

</html>