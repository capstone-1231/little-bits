<?php
/*
Template Name: Custom Rider Template
*/
include('connect.php');
if(isset($_POST['submit'])){

$first_name_message="";
$last_name_message="";
$disability_message="";
$date_of_birth_message="";
$height_message="";
$weight_message="";
$ambulatory_message="";
$personal_aid_message="";
$prefered_day_message="";
$emergency_first_name_message="";
$emergency_last_name_message="";
$address_message ="";
$city_message="";
$postal_code_message="";
$email_message="";
$phone_number_message="";
$secondary_phone_number_message="";
$questions_message="";

$phone_number= $_POST['phone_number'];
$secondary_phone_number= $_POST['secondary_phone_number'];



$personal_aid= $_POST['personal_aid'];
$form_good=true;


//first name
$first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);

if (strlen($first_name) < 2 || strlen($first_name) > 60) {
    $form_good = FALSE;
    $first_name_message .= "<p>please enter your first name</p>";
} else {
    if (str_contains($first_name, "'") or str_contains($first_name, '"')) {
        $first_name = mysqli_real_escape_string($connection, $first_name);
    }
}

//last name
$last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);

if (strlen($last_name) < 2 || strlen($last_name) > 60) {
    $form_good = FALSE;
    $last_name_message .= "<p>please enter your last name</p>";
} else {
    if (str_contains($last_name, "'") or str_contains($last_name, '"')) {
        $last_name = mysqli_real_escape_string($connection, $last_name);
    }
}

//disability
$disability = filter_var($_POST['disability'], FILTER_SANITIZE_STRING);

if (strlen($disability) < 2 || strlen($disability) > 60) {
    $form_good = FALSE;
    $disability_message .= "<p>please tell us what disability you have. its important for our instructors to be aware.</p>";
} else {
    if (str_contains($disability, "'") or str_contains($disability, '"')) {
        $disability = mysqli_real_escape_string($connection, $disability);
    }
}

//date of birth
$date_of_birth = filter_var($_POST['date_of_birth'], FILTER_SANITIZE_STRING);

if (strlen($date_of_birth) < 2 || strlen($date_of_birth) > 60) {
    $form_good = FALSE;
    $date_of_birth_message .= "<p>please enter your birthday</p>";
} else {
    if (str_contains($date_of_birth, "'") or str_contains($date_of_birth, '"')) {
        $date_of_birth = mysqli_real_escape_string($connection, $date_of_birth);
    }
}

//height
$height = filter_var($_POST['height'], FILTER_SANITIZE_STRING);

if (preg_match("/^\d+'[0-9]+$/", $heightInput)) {
    $form_good = FALSE;
     $height .= "<p>please enter your height in feet and inches</p>";
 } else {
     if (str_contains($height, "'") or str_contains($height, '"')) {
         $height = mysqli_real_escape_string($connection, $height);
     }
 }

//because its in inches and feet this might be an issue.
//as of right now there is no reason to be fixated on it

//weight
$weight = filter_var($_POST['weight'], FILTER_SANITIZE_STRING);

if (strlen($weight) < 2 || strlen($weight) > 60) {
    $form_good = FALSE;
    $weight_message .= "<p>please enter your weight in pounds</p>";
} else {
    if (str_contains($weight, "'") or str_contains($weight, '"')) {
        $weight = mysqli_real_escape_string($connection, $weight);
    }
}


//ambulatory
$ambulatory = filter_var($_POST['ambulatory'], FILTER_SANITIZE_STRING);

if (strlen($ambulatory) < 2 || strlen($ambulatory) > 60) {
    $form_good = FALSE;
    $ambulatory_message .= "<p>please describe on the scale from 0-5 your ambulator status<a href=\"https://strokengine.ca/en/assessments/fac/\">read more</a>
    </p>";
} else {
    if (str_contains($ambulatory, "'") or str_contains($ambulatory, '"')) {
        $ambulatory = mysqli_real_escape_string($connection, $ambulatory);
    }
}

//personal aid
$personal_aid= $_POST['personal_aid'];

if (strlen($personal_aid) < 2 || strlen($personal_aid) > 60) {
    $form_good = FALSE;
    $personal_aid_message .= "<p>Please tell us if you require personal aid.</p>";
} else {
    if (str_contains($personal_aid, "'") or str_contains($personal_aid, '"')) {
        $personal_aid = mysqli_real_escape_string($connection, $personal_aid);
    }
}

$prefered_day = filter_var($_POST['prefered_day'], FILTER_SANITIZE_STRING);

if (strlen($prefered_day) < 2 || strlen($prefered_day) > 60) {
    $form_good = FALSE;
    $prefered_day_message .= "<p>Please tell us which days you'd like to prefer.</p>";
} else {
    if (str_contains($prefered_day, "'") or str_contains($prefered_day, '"')) {
        $prefered_day = mysqli_real_escape_string($connection, $prefered_day);
    }
}


//emergency first name
$emergency_first_name = filter_var($_POST['emergency_first_name'], FILTER_SANITIZE_STRING);

if (strlen($emergency_first_name) < 2 || strlen($emergency_first_name) > 60) {
    $form_good = FALSE;
    $emergency_last_name_message .= "<p>Your emergency contact's first name is required.</p>";
} else {
    if (str_contains($emergency_first_name, "'") or str_contains($emergency_first_name, '"')) {
        $emergency_first_name = mysqli_real_escape_string($connection, $emergency_first_name);
    }
}

$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

if (strlen($address) < 2 || strlen($address) > 60) {
    $form_good = FALSE;
    $address_message .= "<p>Your emergency contact's address is required.</p>";
} else {
    if (str_contains($address, "'") or str_contains($address, '"')) {
        $address = mysqli_real_escape_string($connection, $address);
    }
}


//emergency last name 
$emergency_last_name = filter_var($_POST['emergency_last_name'], FILTER_SANITIZE_STRING);

if (strlen($emergency_last_name) < 2 || strlen($emergency_last_name) > 60) {
    $form_good = FALSE;
    $emergency_last_name_message .= "<p>Your emergency contact's last name is required.</p>";
} else {
    if (str_contains($emergency_last_name, "'") or str_contains($emergency_last_name, '"')) {
        $emergency_last_name = mysqli_real_escape_string($connection, $emergency_last_name);
    }
}


//city
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);

if (strlen($city) < 2 || strlen($city) > 60) {
    $form_good = FALSE;
    $city_message .= "<p>Your emergency contact's city is required.</p>";
} else {
    if (str_contains($city, "'") or str_contains($city, '"')) {
        $city = mysqli_real_escape_string($connection, $city);
    }
}

//postal code
$postal_code = filter_var($_POST['postal_code'], FILTER_SANITIZE_STRING);

if (strlen($postal_code) < 2 || strlen($postal_code) > 60) {
    $form_good = FALSE;
    $postal_code_message .= "<p>Your emergency contact's postal code is required.</p>";
} else {
    if (str_contains($postal_code, "'") or str_contains($postal_code, '"')) {
        $postal_code = mysqli_real_escape_string($connection, $postal_code);
    }
}

//email
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

if (strlen($email) < 2 || strlen($email) > 60) {
    $form_good = FALSE;
    $email_message .= "<p>Your emergency contact's email is required.</p>";
} else {
    if (str_contains($email, "'") or str_contains($email, '"')) {
        $email = mysqli_real_escape_string($connection, $email);
    }
}


//phone number

if (!preg_match("/^(\+1\s?)?(\d{3}[-\s]?)?\d{3}[-\s]?\d{4}$/",$phone_number)) {
    $form_good = FALSE;
    $phone_number_message .= "<p>Your emergency contact's phone number is required.</p>";
} else {
    $sanitized_phone_number = preg_replace("/[^0-9]/", "", $phone_number);

    if (str_contains($phone_number, "'") or str_contains($phone_number, '"')) {
        $phone_number = mysqli_real_escape_string($connection, $phone_number);
    }
}

//secondary phone number

if (!preg_match("/^(\+1\s?)?(\d{3}[-\s]?)?\d{3}[-\s]?\d{4}$/",$secondary_phone_number)) {
    $form_good = FALSE;
    $phone_number_message .= "<p>Your emergency contact's phone number is required.</p>";
} else {
    $sanitized_phone_number = preg_replace("/[^0-9]/", "", $phone_number);
    if (str_contains($secondary_phone_number, "'") or str_contains($secondary_phone_number, '"')) {
        $secondary_phone_number = mysqli_real_escape_string($connection, $secondary_phone_number);
    }
}

//questions
$questions = filter_var($_POST['questions'], FILTER_SANITIZE_STRING);

if (strlen($emergency_last_name) < 2 || strlen($emergency_last_name) > 60) {
    $form_good = FALSE;
    $emergency_last_name_message .= "<p>Your emergency contact's last name is required.</p>";
} else {
    if (str_contains($emergency_last_name, "'") or str_contains($emergency_last_name, '"')) {
        $emergency_last_name = mysqli_real_escape_string($connection, $emergency_last_name);
    }
}

if ($form_good){
    echo"all is good";
}


}

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
        <div>
            <!--this is where we add the editable images from wordpress-->
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
                    <label for="first_name">Name</label>
                    <input type="text" name="first_name" value="<?php if(isset ($first_name)){$first_name;}?>">
                       <?php if (isset($first_name_message)): ?>
                            <div class="message">
                                <?php echo $first_name_message; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name"value="<?php if(isset ($last_name)){$last_name;}?>">
                      <?php if (isset($last_name_message)): ?>
                            <div class="message">
                                <?php echo $last_name_message; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div>
                    <label for="disablity">Disiabiity</label>
                    <input type="text" name="disability"value="<?php if(isset ($disability)){$disability;}?>">
                      <?php if (isset($disability_message)): ?>
                            <div class="message">
                                <?php echo $disability_message; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div>
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="text" name="date_of_birth"value="<?php if(isset ($date_of_birth)){$date_of_birth;}?>">
                      <?php if (isset($date_of_birth_message)): ?>
                            <div class="message">
                                <?php echo $date_of_birth_message; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div>
                    <label for="height">Height in feet/inches</label>
                    <input type="text" name="height" placeholder="e.g., 5'9"value="<?php if(isset ($height)){$height;}?>">
                      <?php if (isset($height_message)): ?>
                            <div class="message">
                                <?php echo $height_message; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div>
                    <label for="weight">Weight in Pounds</label>
                    <input type="text" name="weight"value="<?php if(isset ($weight)){$weight;}?>">
                      <?php if (isset($weight_message)): ?>
                            <div class="message">
                                <?php echo $weight_message; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div>
                    <label for="ambulatory">Ambulatory Status</label>
                    <input type="text" name="ambulatory"value="<?php if(isset ($ambulatory)){$ambulatory;}?>">
                      <?php if (isset($ambulatory_message)): ?>
                            <div class="message">
                                <?php echo $ambulatory_message; ?>
                            </div>
                        <?php endif; ?>
                </div>

                <div class="personal_aid">

                <p>*Is a Personal Aid Required?</p>
                <select name="personal_aid" id="personal_aid" class="personal-aid">
                    <?php
                    $personal_abbr = ['Yes' => 'yes', 'No' => 'no'];

                    foreach ($personal_abbr as $key => $value) {
                        $selected_personal_aid = isset($_POST['personal_aid']) && $_POST['personal_aid'] == $key ? 'selected' : '';
                        echo "<option value=\"$key\" $selected>$value</option>";
                    }
                    ?>
                      <?php if (isset($personal_aid_message)): ?>
                            <div class="message">
                                <?php echo $personal_aid_message; ?>
                            </div>
                        <?php endif; ?>
                </select>

                </div>
                <div>
                    <p>Preferred Day:</p>
                    <p>Whitemud Equine Centre</p>
                    <input type="checkbox" name="preferred_day[]" value="sunday_am" >
                    <label for="sunday_am">Sunday AM</label>
                    <input type="checkbox" name="preferred_day[]" value="sunday_pm">
                    <label for="sunday_pm">Sunday PM</label>
                    <input type="checkbox" name="preferred_day[]" value="monday_am_adult" >
                    <label for="monday_am_adult">Monday AM(Adult)</label>
                    <input type="checkbox" name="preferred_day[]" value="tuseday_am_adult" >
                    <label for="tuseday_am_adult">Tuesday AM(Adult)</label>
                    <input type="checkbox" name="preferred_day[]" value="tuesday_pm" >
                    <label for="tuesday_pm">Tuesday PM</label>
                    <input type="checkbox" name="preferred_day[]" value="wednesday_pm">
                    <label for="wednesday_pm">Wednesday PM</label>
                    <?php if (isset($prefered_day_message)): ?>
                            <div class="message">
                                <?php echo $prefered_day_message; ?>
                            </div>
                        <?php endif; ?>
                    
                </div>
        </div>
        <div class="emergency-contact">
            <div>
                    <label for="emergency_first_name">First Name</label>
                    <input type="text" name="emergency_first_name" value="<?php if(isset ($emergency_first_name)){$emergency_first_name;}?>">
                      <?php if (isset($emergency_first_name_message)): ?>
                            <div class="message">
                                <?php echo $emergency_first_name_message; ?>
                            </div>
                        <?php endif; ?>
                </div>
            <div>
                
                <label for="emergency_last_name">Last Name</label>
                <input type="text" name="emergency_last_name"value="<?php if(isset ($emergency_last_name)){$emergency_last_name;}?>">
                      <?php if (isset($emergency_last_name_message)): ?>
                            <div class="message">
                                <?php echo $emergency_last_name_message; ?>
                            </div>
                        <?php endif; ?>
            </div>
            <div>
                <label for="addresss">Address</label>
                <input type="text" name="address"value="<?php if(isset ($address)){$address;}?>">
                      <?php if (isset($address_message)): ?>
                            <div class="message">
                                <?php echo $address_message; ?>
                            </div>
                        <?php endif; ?>
            </div>
            <div>
                <label for="city">City</label>
                <input type="text" name="city"value="<?php if(isset ($city)){$city;}?>">
                      <?php if (isset($city_message)): ?>
                            <div class="message">
                                <?php echo $city_message; ?>
                            </div>
                        <?php endif; ?>
            </div>
            <div>
                <label for="postal_code">Postal Code</label>
                <input type="text" name="postal_code"value="<?php if(isset ($postal_code)){$postal_code;}?>">
                      <?php if (isset($postal_code_message)): ?>
                            <div class="message">
                                <?php echo $postal_code_message; ?>
                            </div>
                        <?php endif; ?>
            </div>
            <div>
                <label for="email">Email Address</label>
                <input type="text" name="email"value="<?php if(isset ($email)){$email;}?>">
                      <?php if (isset($email_message)): ?>
                            <div class="message">
                                <?php echo $email_message; ?>
                            </div>
                        <?php endif; ?>
            </div>
            <div>
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number"value="<?php if(isset ($phone_number)){$phone_number;}?>">
                      <?php if (isset($phone_number_message)): ?>
                            <div class="message">
                                <?php echo $phone_number_message; ?>
                            </div>
                        <?php endif; ?>
            </div>  
            <div>
                <label for="secondary_phone_number">Secondary Phone Number</label>
                <input type="text" name="secondary_phone_number"value="<?php if(isset ($secondary_phone_number)){$secondary_phone_number;}?>">
                      <?php if (isset($secondary_phone_number_message)): ?>
                            <div class="message">
                                <?php echo $secondary_phone_number_message; ?>
                            </div>
                        <?php endif; ?>
            </div>
            <div>
                <label for="questions">Questions or comments</label>
                <textarea name="questions" id="" cols="30" rows="10"value="<?php if(isset ($questions)){$questions;}?>"></textarea>
                      <?php if (isset($questions_message)): ?>
                            <div class="message">
                                <?php echo $questions_message; ?>
                            </div>
                        <?php endif; ?>
            </div>
        </div>
        <input type="submit" name="submit" value="submit">
        </form>
    </div>
</main>


