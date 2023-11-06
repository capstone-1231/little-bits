<?php
/*
Template Name: Custom Staff Template
*/

get_header(); ?>
<main class="staff-main">
    <h2>Staff</h2>
    <div class="staff-intro">
        <p>Following is a listing of our current staff. Click on a name to learn more about the staff.Please feel free
            to contact us at: 780-476-1233 </p>
    </div>
    <div>
        <?php
        $args = array(
            'post_type' => 'staff-main',
            'posts_per_page' => -1,
        );

        $staff_main_query = new WP_Query($args);

        if ($staff_main_query->have_posts()):
            while ($staff_main_query->have_posts()):
                $staff_main_query->the_post();

                // Use ACF functions to get custom field values
                $title = get_field('title');
                $photo = get_field('photo');
                $name = get_field('name');
                $description = get_field('description');

                // Display the custom field values
                echo '<h3>' . $name . '</h3>';
                if ($photo) {
                    echo '<img src="' . $photo['url'] . '" alt="' . $name . '" />';
                }
                echo '<p>' . $title . '</p>';
                echo '<p>' . $description . '</p>';

            endwhile;
            wp_reset_postdata();
        else:
            echo 'No staff-main posts found.';
        endif;
        ?>
    </div>
    <div>
        <h2>Instructors</h2>
        <?php
        $args = array(
            'post_type' => 'staff-instructors',
            'posts_per_page' => -1,
        );

        $instructors_query = new WP_Query($args);

        if ($instructors_query->have_posts()):
            while ($instructors_query->have_posts()):
                $instructors_query->the_post();

                // Use ACF functions to get custom field values
                $photo = get_field('photo');
                $name = get_field('name');
                $description = get_field('description');

                // Display the custom field values
                echo '<h3>' . $name . '</h3>';
                if ($photo) {
                    echo '<img src="' . $photo['url'] . '" alt="' . $name . '" />';
                }
                echo '<p>' . $description . '</p>';

            endwhile;
            wp_reset_postdata();
        else:
            echo 'No instructors posts found.';
        endif;
        ?>
    </div>
</main>
<?php
get_footer();
?>
</body>

</html>