<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Grad Bios | The Final Draft</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/styles.css">
    <script type="text/javascript">

         function validateForm() {

            var studentFirstName = document.student_bio_form.student_first_name.value;
            var studentLastName = document.student_bio_form.student_last_name.value;

            var studentSite = document.student_bio_form.student_website.value;

            var isDesinger = document.getElementById('student_designer');
            var isDeveloper = document.getElementById('student_developer');
            var isMedia = document.getElementById('student_media');

            var studentTitle = document.student_bio_form.student_title.value;
            var studentStatement = document.student_bio_form.student_quote.value;
            var studentBio = document.student_bio_form.student_bio.value;
            var bioLength = countWords(studentBio);

            if (studentFirstName == "" || studentLastName == "" || studentBio == "" || studentSite == "" || studentTitle == "" || studentStatement == "" || studentFirstName == null || studentLastName == null || studentBio == null || studentSite == null || studentTitle == null || studentStatement == null) {
                alert('Fields cannot be empty.');
                return false;
            }
            else if (isDesinger.checked == false && isDeveloper.checked == false && isMedia.checked == false){
                alert('Please select a group');
                return false;
            }
            else if (bioLength > 200) {
                alert('Bio cannot be longer than 200 words');
                return false;
            }

            return true;
        }

        function countWords(text) {
            s = text;
            s = s.replace(/(^\s*)|(\s*$)/gi, "");
            s = s.replace(/[ ]{2,}/gi, " ");
            s = s.replace(/\n /, "\n");
            return s.split(' ').length;
        }
    </script>
</head>
<body>
  <div class="bio-wrapper">
    <header>
        <h1>The Final Draft</h1>
        <!-- <img src="" id="logo"> -->
    </header>
    <form onSubmit="return validateForm();" method="POST" action="bio_form.php"name="student_bio_form" id="student_bio_form">
        <fieldset>
            <legend>Student Bios</legend>
            <ul>
              <li>
                <input type="text" id="student_first_name" name="student_first_name" placeholder="First Name" value="">
              </li>
              <li>
                <input type="text" id="student_last_name" name="student_last_name" placeholder="Last Name" value="">
              </li>
              <li>
                <input type="text" id="student_website" name="student_website" placeholder="Your Portfolio Site" value="">
              </li>
              <li class="group-options">
                <input type="checkbox" id="student_designer" name="student_designer" value="0">
                <label for="student_designer">Designer</label>
              </li>
              <li class="group-options">
                <input type="checkbox" id="student_developer" name="student_developer" value="0">
                <label for="student_developer">Developer</label>
              </li>
              <li class="group-options">
                <input type="checkbox" id="student_media" name="student_media" value="0">
                <label for="student_media">Media</label>
              </li>
              <li>
                <input type="text" id="student_title" name="student_title" placeholder="Your Title (e.g. UX designer)" value="">
              </li>
              <li>
                <input type="text" id="student_quote" name="student_quote" placeholder="Special Statement" value="">
              </li>
              <li>
                <textarea name="student_bio" placeholder="Write your bio here. Max 200 words." id="student_bio"></textarea>
              </li>
              <li>
                <input type="submit" id="submit" name="submit" value="Submit">
              </li>
            </ul>
        </fieldset>
    </form>
  </div> <!-- End bio-wrapper -->
</body>
</html>


<?php

include('db_connect.php');

if(isset($_POST["submit"]))
{


    $firstname = $_POST["student_first_name"];
    $lastname = $_POST["student_last_name"];
    $websiteUrl = $_POST["student_website"];
    // $isDesinger = $_POST["student_designer"];
    $studentTitle = $_POST["student_title"];
    $studentStatement = $_POST["student_quote"];
    $studentBio = $_POST["student_bio"];

    //if statments for the groups
    if( isset($_POST['student_designer']) ) $isDesinger = 1;
    if( isset($_POST['student_developer']) ) $isDeveloper = 1;
    if( isset($_POST['student_media']) ) $isMedia = 1;

    $mysql = get_connection();
    $result = mysql_query("USE ".DB_NAME) or DIE(mysql_error());

    $query = "INSERT INTO student_bio (firstname, lastname, website_url, isDesinger, isDeveloper, isMedia, title, statement, bio) VALUES ('".$firstname."', '".$lastname."', '".utf8_encode($websiteUrl)."', '".$isDesinger."', '".$isDeveloper."', '".$isMedia."', '".$studentTitle."', '".$studentStatement."', '".$studentBio."')";

    $result = mysql_query($query) or DIE(mysql_error());


    if($result){

        echo "<h2>Your information saved to database!</h2>";
    } else {
        echo "<h2>Sorry, there is something wrong. Contact Dev team!</h2>";
    }

    mysql_close($mysql);

}

?>
