<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package littlebits
 */

 
 get_header();
 ?> 
<main id="primary" class="site-main">
<h1>Home</h1>
    <section class="home-intro">\
            <!--background image -->

    <h2>Little Bits therapeutic Riding association</h2>
    <p>Little Bits Therapeutic Riding Association, We have been serving Edmonton since 1975.Each year, up to 195 riders benefit from our winter, spring and fallprogram and summer riding week.</p>
    </section>
    <section>
        <h2>Program</h2>
        <div class="">
            <!-- images to be added in the cards -->
            <h3>Horse Back Riding</h3>
            <p>Experience the thrill of horseback riding at our facility, where every hoofbeat is a symphony of adventure and every ride is a journey into the heart of excitement!</p>
           <button><a href="program_profile.php">Read more</a></button>
        </div>
        
        <div class="">
            <!-- images to be added in the cards -->
            <h3>New experiences </h3>
            <p>Experience the thrill of horseback riding at our facility, where every hoofbeat is a symphony of adventure and every ride is a journey into the heart of excitement!</p>
           <button><a href="program_profile.php">Read more</a></button>
        </div>
        <div class="">
            <!-- images to be added in the cards -->
            <h3>volunteer</h3>
            <p>At our facility, we believe in the power of volunteers who generously dedicate their time and passion to make a difference in the lives of kids in need.</p>
           <button><a href="program_profile.php">Read more</a></button>
        </div>
    </section>
    <section class="reviews">
    <div>   

    </div>
    <div>
        
    </div>
    <div>
        
    </div>
    </section>
</main>
    <?php
   get_footer();
    ?>