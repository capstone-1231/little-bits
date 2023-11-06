<?php
/*
Template Name: Custom Awards Template
*/

get_header(); ?>

<main class="awards-main">
    <div>
        <h2>Awards</h2>
    </div>
    <div>
        <div>
            <h3>15 Years</h3>
            <div>
            <?php
                $args = array(
                    'post_type' => 'awards-fifteen',
                    'posts_per_page' => -1,
                );

                $awards_fifteen_query = new WP_Query($args);

                if ($awards_fifteen_query->have_posts()):
                    while ($awards_fifteen_query->have_posts()):
                        $awards_fifteen_query->the_post();

                        // Use ACF functions to get custom field values
                        $photo = get_field('photo');
                        $name = get_field('name');

                        // Display the custom field values

                        if ($photo) {
                            echo '<img src="' . $photo['url'] . '" alt="' . $name . '" />';
                        }
                        echo '<h3>' . $name . '</h3>';
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo 'No fifteen-year awards posts found.';
                endif;
                ?>
            </div>
        </div>
        <div>
            <h3>10 Years</h3>
            <div>
            <?php
                $args = array(
                    'post_type' => 'awards-ten',
                    'posts_per_page' => -1,
                );

                $awards_ten_query = new WP_Query($args);

                if ($awards_ten_query->have_posts()):
                    while ($awards_ten_query->have_posts()):
                        $awards_ten_query->the_post();

                        // Use ACF functions to get custom field values
                        $photo = get_field('photo');
                        $name = get_field('name');

                        // Display the custom field values

                        if ($photo) {
                            echo '<img src="' . $photo['url'] . '" alt="' . $name . '" />';
                        }
                        echo '<h3>' . $name . '</h3>';
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo 'No ten-year awards posts found.';
                endif;
                ?>
            </div>
        </div>
        <div>
            <h3>5 Years</h3>
            <div>
                <?php
                $args = array(
                    'post_type' => 'awards-five',
                    'posts_per_page' => -1,
                );

                $awards_five_query = new WP_Query($args);

                if ($awards_five_query->have_posts()):
                    while ($awards_five_query->have_posts()):
                        $awards_five_query->the_post();

                        // Use ACF functions to get custom field values
                        $photo = get_field('photo');
                        $name = get_field('name');

                        // Display the custom field values

                        if ($photo) {
                            echo '<img src="' . $photo['url'] . '" alt="' . $name . '" />';
                        }
                        echo '<h3>' . $name . '</h3>';
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo 'No five-year awards posts found.';
                endif;
                ?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
</body>

</html>