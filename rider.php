<?php
/*
Template Name: Custom Rider Template
*/

get_header(); ?>

<main class="rider-main">
    <h2>Benefits of a rider</h2>
    <div class="rider-flex">
        <div class="rider-card-1">
            <p>Physical benefits for all riders may include improved balance, coordination,
                sensory, integration and increased motor planning. For a rider with CP muscles
                may be relaxed and stretched resulting in decreased spasticity. The muscles
                of a rider with hypotonia will be strengthened thus improving posture. There
                could be an increase in the range of motion for certain joints as well
                as improved respiration and circulation.</p>
            <p>Social benefits for a rider who has Autism could be an increase in socially
                appropiate behaviours, an increase in patience and the development of
                respect and friendship for animals and other human beings. The riders will also
                interact with the instructor and the volunteer(s) assisting them, giving the benefit
                of developing good listening and communication skills.</p>
            <p>Cognitive benefits for a rider with global developmental delays would be
                to achieve an increase in attention span, an increase in the ability to follow
                directions and as well an increase in visual and spatial perception. Memory
                can be improved as well as sequencing skills.</p>
            <p>Riders will be able to enjoy trail rides that take them through the forest and
                up and down small hills, over grass, gravel, concrete, sand, mud and water.
                They may ride on a warm sunny day, get caught in a short rain, or be out
                on a breezy day. All of these sensations add to the overall experience of
                connecting with nature.</p>
            <p>All riders could experience emotional benefits via a sense of achievement
                and the ability to take risks. Riding provides persons with disabilities a sense
                of normalcy, as this is an activity which most any person can take part in.
                Riding can be highly motivating for some individuals and great for increasing
                self-confidence. It is a fun and enjoyable way to have “therapy” in a non-therapeutic
                setting. The horses are the therapy equipment and their movement affects each rider
                in a positive, non-clinical manner.</p>
        </div>
        <!--this is where we add the editable images from wordpress-->
        <div>
            <?php $image_1 = get_field('image_1'); ?>
            <?php if ($image_1): ?>
                <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
            <?php endif; ?>
        </div>
    </div>
    <div class="rider-application-intro">
        <h2>Rider Application Form</h2>
        <p>This application is to ascertain the eligibility of each individual for consideration of entrance into this
            riding program. Please read the rider criteria carefully, as therapeutic riding is not appropriate for all
            individuals. These criteria are used as guidelines, and each client will be assessed on an individual basis.
        </p>
    </div>
    <div class="rider-criteria">
        <ul>
            <li>Must be able to maintain a sitting position while the horse is in motion</li>
            <li>Minimum recommended age of 3 years</li>
            <li>Seizures must be controlled by medication</li>
            <li>Maximum recommended weight of 165 pounds</li>
            <li>Negative finding of Atlantoaxial Instability (For persons with Downs Syndrome)</li>
            <li>Riders accepted into the program are done so on a trial basis</li>
            <li>Currently riders are being placed into the program 18 to 24 months after the application has been
                received</li>
            <li>No new adult application are being accepted at this moment.</li>
        </ul>
    </div>
    <div class="rider-form-container">
        <div class="personal-rider-info">
            <h3>Rider Information</h3>
            <p></p>
            <form action="" class="rider-form">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="last-name">Last Name</label>
                    <input type="text" name="last-name">
                </div>
                <div>
                    <label for="disablity">Disiabiity</label>
                    <input type="text" name="disability">
                </div>
                <div>
                    <label for="date-of-birth">Date of Birth</label>
                    <input type="text" name="date-of-birth">
                </div>
                <div>
                    <label for="height">Height in feet/inches</label>
                    <input type="text" name="height">
                </div>
                <div>
                    <label for="weight">Weight in Pounds</label>
                    <input type="text" name="weight">
                </div>
                <div>
                    <label for="ambulatory">Ambulatory Status</label>
                    <input type="text" name="ambulatory">
                </div>

                <div class="">
                    <p>*Is a Personal Aid Required?</p>
                    <input type="radio" name="personal-aid">
                    <label for="yes">Yes</label>|
                    <input type="radio" name="personal-aid">
                    <label for="no">No</label>|
                </div>
                <div>
                    <p>Preferred Day:</p>
                    <p>Whitemud Equine Centre</p>
                    <input type="checkbox" name="preferred-day">
                    <label for="sunday-am">Sunday AM</label>
                    <input type="checkbox" name="preferred-day">
                    <label for="sunday-pm">Sunday PM</label>
                    <input type="checkbox" name="preferred-day">
                    <label for="monday-am-adult">Monday AM(Adult)</label>
                    <input type="checkbox" name="preferred-day">
                    <label for="tuseday-am-adult">Tuesday AM(Adult)</label>
                    <input type="checkbox" name="preferred-day">
                    <label for="tuesday-pm">Tuesday PM</label>
                    <input type="checkbox" name="preferred-day">
                    <label for="wednesday-Pm">Wednesday PM</label>
                </div>
        </div>
        <div class="emergency-contact">
            <div>

                <label for="emergenecy-first-name">First Name</label>
                <input type="text" name="emergency-first-name">
            </div>
            <div>

                <label for="emergenecy-last-name">Last Name</label>
                <input type="text" name="emergency-last-name">
            </div>
            <div>

                <label for="addresss">Address</label>
                <input type="text" name="address">
            </div>
            <div>

                <label for="city">City</label>
                <input type="text" name="city">
            </div>
            <div>
                <label for="postal-code">Postal Code</label>
                <input type="text" name="postal-code">
            </div>
            <div>
                <label for="email">Email Address</label>
                <input type="text" name="email">
            </div>
            <div>
                <label for="phone-number">Phone Number</label>
                <input type="text" name="phone-number">
            </div>
            <div>
                <label for="secondary-phone-number">Secondary Phone Number</label>
                <input type="text" name="secondary-phone-number">
            </div>
            <div>
                <label for="questions">Questions or comments</label>
                <textarea name="questions" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" name="submit" value="submit">

        </form>
    </div>
</main>
<?php
get_footer();
?>
</body>

</html>