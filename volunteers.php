<?php
/*
Template Name: Custom Volunteer Template
*/

get_header(); ?>
<main class="volunteer-main">
        <h2>Get Involved</h2>
        <div>
            <p>Volunteers are an integral part of the program at Little Bits. They are indeed the backbone of the
                organization.</p>
            <p>Any person 14 years and over can volunteer (those 13 years old can help assist in the barn area);
                previous experience is not required but can be beneficial. The only requirement is the wish to help
                others achieve their goals. All volunteers are asked to participate in an orientation session before
                working in the program. Volunteers are needed on a weekly basis throughout the 10-week winter, spring
                and fall sessions and the 1-week (5 days) session. Their duties are primarily handling the horses and
                side-walking with the riders. They may also participate in grooming, tacking the horses, fundraising and
                promotion activities. Please, fill out a Volunteer Application online and our Volunteer Coordinator will
                reply back.</p>
            <button>Volunteer today</button>
        </div>
        <div>
            <p>Some of the many important functions performed by our volunteers include:</p>
            <div>
                <div>
                    <h4>Lessons</h4>
                    <p>This is the main area in which we require volunteers. Volunteers are asked to groom and tack
                        horses before and after lessons or leading and side-walking during the lessons. Commitment is
                        approximately 2 hours per week.</p>
                </div>
                <div><!--adding editable image -->
            <?php $image_1 = get_field('image_1'); ?>
            <?php if ($image_1): ?>
                <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
            <?php endif; ?>
        </div>
            </div>
            <div>
                <div>
                    <h4>Committees</h4>
                    <p>We have several committees that require volunteers including a "Fundraising Committee" and
                        "Communications/ Marketing Committee". Complete terms of reference for each committee are
                        available by contacting us at: 780-476-1233</p>
                </div>
                <div><!--adding editable image -->
            <?php $image_2 = get_field('image_2'); ?>
            <?php if ($image_2): ?>
                <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" />
            <?php endif; ?>
        </div>
            </div>
            <div>
                <div>
                    <h4>Casino</h4>
                    <p>Every eighteen months we run a casino. This takes a minimum number of volunteers over a two-day
                        period. Shifts are 4 - 6 hours long. The work is easy, and the money earned for Little Bits is
                        awesome!</p>
                </div>
                <div><!--adding editable image -->
            <?php $image_3 = get_field('image_3'); ?>
            <?php if ($image_3): ?>
                <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" />
            <?php endif; ?>
        </div>
            </div>
            <div>
                <div>
                    <h4>Fundraisers</h4>
                    <p>These are fundraisers that Little Bits may be involved in throughout the year. Examples of past
                        events are: Pancake Breakfast, 50/50 Raffle at Edmonton Prospects Baseball Games, etc...</p>
                </div>
                <div><!--adding editable image -->
            <?php $image_4 = get_field('image_4'); ?>
            <?php if ($image_4): ?>
                <img src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['alt']; ?>" />
            <?php endif; ?>
        </div>
            </div>
        </div>
        <div>
            <h3>Our Commitment to our Volunteers</h3>
            <p>As an organization committed to our volunteers, Little Bits will:</p>
            <ul>
                <li>Provide training and supervision to help you feel comfortable in your new role</li>
                <li>Provide a safe, secure and supportive environment that will make your time with Little Bits truly
                    worth while</li>
                <li>Help you attain your goals and objectives as a Little Bits volunteer</li>
                <li>Keep you up to date on rider cancellations or any other event that could affect your volunteer work
                    (as best we can)</li>
                <li>Recognize your value to this organization</li>
                <li>Recognize and work around your busy schedule</li>
            </ul>
        </div>
        </main>
<?php
get_footer();
?>
</body>

</html>