<?php
/*
Template Name: Custom Facility Template
*/

get_header(); ?>

<main class="facility-main">

    <h2>Our New Facility</h2>
    <div>
        <p>The Whitemud Equine Centre has been our home since 1975. It is an ideal location for Little Bits, accessible
            by DATS, E.T.S. and it offers easy access to major highways. In 2017 we said "Good-Bye" to our old barn and
            arena and "Hello" to our new facility that the City of Edmonton and Whitemud Equine Learning Centre
            Association came together to build.</p>

        <p>The new facility allows Little Bits to expand the program allowing it run throughout the year. We are now
            able to accommodate the needs of more individuals with special needs in our community. </p>

    </div>
    <h3>Advantages of the New Facility</h3>
    <ul>
        <li>Shared Office space with WELCA and LBTRA </li>
        <li>Classroom with a small kitchen area and appliances available</li>
        <li>Event rental spaces which can used be for indoor and outdoor events</li>
        <li>Climate controlled stables for volunteers to work with the horses</li>
        <li>Two tack rooms (separate WELCA and LBTRA)</li>
        <li>Grooming stalls with one larger stall designed for other uses</li>
        <li>Climate controlled indoor riding arena</li>
        <li>Accessible for everyone</li>
        <li>A facility that will allow us to run our programs all year long</li>
        <li>Indoor accessible washrooms</li>
        <li>Water fountains with water bottle dispenser</li>
    </ul>

    <div>
        <?php $image_1 = get_field('image_1'); ?>
        <?php if ($image_1): ?>
            <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
        <?php endif; ?>

    </div>

    <div>
        <p> Yes, it did happen... the ground breaking ceremony was held by WELCA with a huge audience attending. A pair
            of Belgian horses were used with a plow and onlooker were able to pose for photo's after the initial
            ceremony.</p>

    </div>
    <div>
        <div>
            <h3>2020</h3>
            <!-- Image Carousel -->
        </div>
        <div>
            <h3>2019</h3>
            <!-- Image Carousel -->
        </div>
        <div>
            <h3>2017</h3>
            <!-- Image Carousel -->
        </div>
        <div>
            <h3>2016</h3>
            <!-- Image Carousel -->
        </div>
    </div>
</main>
<?php

get_footer();
?>
</body>

</html>