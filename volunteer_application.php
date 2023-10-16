<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Application</title>
</head>
<body>
    <main>

    <form>
        <h2>Volunteer Application</h2>

        <label for="name">*First and last name </label>
        <input type="text" id="name" name="name"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>

        <label for="address">Postal Code:</label>
        <input type="text" id="postcode" name="postcode"><br>

        <label for="email">Email Address</label> 
        <input type="email" id="email" name="email"><br>

        <label for="age">Age</label>
        <input type="radio" id="ageLessThan14" name="age" value="LESS than 14 years">LESS than 14 years
        <input type="radio" id="age14to18" name="age" value="14 to 18 years">14 to 18 years
        <input type="radio" id="ageOver18" name="age" value="OVER 18 years">OVER 18 years<br>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone"><br>

        <label for="phoneSecondary">Phone Number (secondary)</label>
        <input type="text" id="phoneSecondary" name="phoneSecondary"><br>

        <label for="medicalConditions">Please indicate any medical conditions</label>
        <input type="text" id="medicalConditions" name="medicalConditions"><br>

        <h3>Emergency Contact Person</h3>

        <label for="emergencyContact">*Name</label>
        <input type="text" id="emergencyContact" name="emergencyContact"><br>

        <label for="emergencyContactPhone">*Phone:</label>
        <input type="text" id="emergencyContactPhone" name="emergencyContactPhone"><br>


        <label for="whyChooseLittleBits">How did you hear about us and what made you choose us as a place to volunteer?</label>
        <input type="text" id="whyChooseLittleBits" name="whyChooseLittleBits"><br>

        <label for="peopleWithDdisabilities">Do you have experience working with people with disabilities?</label>
        <input type="radio" id="peopleWithDisabilities" name="peopleWithDisabilities" value="YES">YES
        <input type="radio" id="peopleWithDisabilities" name="peopleWithDisabilities" value="NO">NO<br>

        <label for="PeopleWithDisabilitiesDescription">If yes, please describe:</label>
        <input type="text" id="PeopleWithDisabilitiesDescription" name="PeopleWithDisabilitiesDescription"><br>

        <label for="experienceWithHorses">Do you have any experience with horses?</label>
        <input type="radio" id="experienceWithHorsesYes" name="experienceWithHorses" value="YES">YES
        <input type="radio" id="experienceWithHorsesNo" name="experienceWithHorses" value="NO">NO<br>

        <label for="experienceWithHorsesDescription">If yes, please describe:</label>
        <input type="text" id="experienceWithHorsesDescription" name="experienceWithHorsesDescription"><br>

        <label for="additionalSkills">Please list any additional skills or interests that you would be willing to share with Little Bits:</label>
        <input type="text" id="additionalSkills" name="additionalSkills"><br>

        <label for="vulnerabilities">Are you able to work with “people with vulnerabilities?”</label>
        <input type="radio" id="vulnerabilitiesYes" name="vulnerabilities" value="YES">YES
        <input type="radio" id="vulnerabilitiesNo" name="vulnerabilities" value="NO">NO<br>

        <label for="criminalRecord">Do you have a criminal record?</label>
        <input type="radio" id="criminalRecordYes" name="criminalRecord" value="YES">YES
        <input type="radio" id="criminalRecordNo" name="criminalRecord" value="NO">NO<br>

        <p>Availability (WINTER)</p>
        <select name="winterAvailability">
            <option value="Sunday9:30-12:15">Sunday 9:30am - 12:15pm</option>
            <option value="Sunday11:45-1:15">Sunday 11:45am - 1:15pm</option>
            <option value="Sunday12:45-3:15">Sunday 12:45am - 3:15pm</option>
            <option value="Wednesday3:30-6:15">Wednesday 3:30pm - 6:15pm</option>
            <option value="Wednesday5:00-7:15">Wednesday 5:00pm - 7:15pm</option>
            <option value="Wednesday6:45-9:15">Wednesday 6:45pm - 9:15pm</option>
        </select>

        <p>Availability (SUMMER)</p>
        <select name="summerAvailability">
            <option value="Monday9:30-1:15">Monday 9:30am - 1:15pm</option>
            <option value="Monday11:45-3:15">Monday 11:45am - 3:15pm</option>
            <option value="Tuesday9:30-1:15">Tuesday 9:30am - 1:15pm</option>
            <option value="Tuesday11:45-3:15">Tuesday 11:45am - 3:15pm</option>
            <option value="Wednesday9:30-1:15">Wednesday 9:30am - 1:15pm</option>
            <option value="Wednesday11:45-3:15">Wednesday 11:45am - 3:15pm</option>
            <option value="Thursday9:30-1:15">Thursday 9:30am - 1:15pm</option>
            <option value="Thursday11:45-3:15">Thursday 11:45am - 3:15pm</option>
            <option value="Friday9:30-1:15">Friday 9:30am - 1:15pm</option>
            <option value="Friday11:45-3:15">Friday 11:45am - 3:15pm</option>
            <option value="AllWeek">All week</option>
        </select>

        <p>Availability (Spring and Fall)</p>
        <select name="springFallAvailability">
            <option value="SundayAllDay">All Day - 9:30am to 6:15pm</option>
            <option value="Sunday9:30-12:15">Sunday 9:30am - 12:15pm</option>
            <option value="Sunday11:45-2:15">Sunday 11:45am - 2:15pm</option>
            <option value="Sunday1:45-4:15">Sunday 1:45pm - 4:15pm</option>
            <option value="Sunday3:45-6:15">Sunday 3:45pm - 6:15pm</option>
            <option value="Monday9:30-12:15">Monday 9:30am - 12:15pm</option>
            <option value="Monday10:45-1:15">Monday 10:45am - 1:15pm</option>
            <option value="TuesdayAM8:30-12:15">Tuesday AM 8:30am - 12:15pm</option>
            <option value="TuesdayAM10:45-1:15">Tuesday AM 10:45am - 1:15pm</option>
            <option value="TuesdayPM3:30-6:15">Tuesday PM 3:30pm - 6:15pm</option>
            <option value="TuesdayPM5:00-7:15">Tuesday PM 5:00pm - 7:15pm</option>
            <option value="TuesdayPM6:45-9:15">Tuesday PM 6:45pm - 9:15pm</option>
            <option value="Wednesday2:30-5:15">Wednesday 2:30pm - 5:15pm</option>
            <option value="Wednesday4:45-7:15">Wednesday 4:45pm - 7:15pm</option>
            <option value="Wednesday6:45-9:15">Wednesday 6:45pm - 9:15pm</option>
        </select>

        <h3>REFERENCE</h3>
        <p>Little Bits Therapeutic Riding Association requires that all new volunteers provide information for two references. These may come from teachers, employers, other agencies you volunteer with, coworkers, etc.</p>

        <label for="reference1Name">*Name</label>
        <input type="text" id="reference1Name" name="reference1Name"><br>

        <label for="reference1Relationship">*Relationship to you</label>
        <input type="text" id="reference1Relationship" name="reference1Relationship"><br>

        <label for="reference1Phone">*Phone</label>
        <input type="text" id="reference1Phone" name="reference1Phone"><br>

        <label for="reference1Email">*Email</label>
        <input type="email" id="reference1Email" name="reference1Email"><br>

        <label for="reference2Name">NAME:</label>
        <input type="text" id="reference2Name" name="reference2Name"><br>

        <label for="reference2Relationship">RELATIONSHIP TO YOU:</label>
        <input type="text" id="reference2Relationship" name="reference2Relationship"><br>

        <label for="reference2Email">EMAIL:</label>
        <input type="email" id="reference2Email" name="reference2Email"><br>

        <label for="reference2Phone">PHONE:</label>
        <input type="text" id="reference2Phone" name="reference2Phone"><br>

        <input type="submit" value="Submit">
    </form>

    </main>
</body>
</html>