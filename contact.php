<?php
/*
Template Name: Custom Contact Template
*/

get_header(); ?>

<main class="contact-main">
    <h2>Contact us</h2>
    <div>
    <?php
        $args = array(
            'post_type' => 'contact_us',
            'posts_per_page' => -1,
        );

        $contact_us_query = new WP_Query($args);

        if ($contact_us_query->have_posts()):
            while ($contact_us_query->have_posts()):
                $contact_us_query->the_post();

                $title = get_field('title');
                $description = get_field('description');

                // Display the custom field values
                echo '<h3>' . $title . '</h3>';
                echo '<p>' . $description . '</p>';

            endwhile;
            wp_reset_postdata();
        else:
            echo 'No contact_us posts found.';
        endif;
        ?>
    </div>
    <div>
    <?php
        echo do_shortcode('[contact-form-7 id="c3e77eb" title="Contact form 1"]');
        ?>
    </div>
</main>
<?php
get_footer();
?>
</body>

</html>