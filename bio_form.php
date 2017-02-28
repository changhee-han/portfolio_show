<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Grad Bios | The Final Draft</title>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script type="text/javascript">

         function validateForm() {
            
            var studentFirstName = document.student_bio_form.student_first_name.value;
            var studentLastName = document.student_bio_form.student_last_name.value;
             
            var studentSite = document.student_bio_form.student_website.value;
            var studentBio = document.student_bio_form.student_bio.value;
            var bioLength = countWords(studentBio);
            
            if (studentFirstName == "" || studentLastName == "" || studentBio == "" || studentSite == "" || studentFirstName == null || studentLastName == null || studentBio == null || studentSite == null) {
                alert('Fields cannot be empty.');
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
    <header>
        <h1>The Final Draft</h1> 
<!--         <img src="" id="logo"> -->
    </header>
    <form onSubmit="return validateForm();" method="POST" action="bio_form.php"name="student_bio_form" id="student_bio_form">
        <fieldset>
            <legend>Student Bios</legend>
            <input type="text" id="student_first_name" name="student_first_name" placeholder="Fisrt Name" value="">
            <input type="text" id="student_last_name" name="student_last_name" placeholder="Last Name" value="">
            
            <input type="text" id="student_website" name="student_website" placeholder="Your Portfolio Site" value="">
            <textarea name="student_bio" placeholder="Write your bio here. Max 200 words." id="student_bio"></textarea>
            <input type="submit" id="submit" name="submit" value="Submit"> </fieldset>
    </form>
</body>
</html>


<?php

include('db_connect.php');

if(isset($_POST["submit"]))
{
    
    
    $firstname = $_POST["student_first_name"];
    $lastname = $_POST["student_last_name"];
    $websiteUrl = $_POST["student_website"];
    $studentBio = $_POST["student_bio"]; 
    
    
    $mysql = get_connection();
    $result = mysql_query("USE ".DB_NAME) or DIE(mysql_error());
    
    $query = "INSERT INTO student_bio (firstname, lastname, website_url, bio) VALUES ('".$firstname."', '".$lastname."', '".utf8_encode($websiteUrl)."', '".$studentBio."')";
    
    $result = mysql_query($query) or DIE(mysql_error());
    
    
    if($result){
        
        echo "<h2>Your information saved to database!</h2>";
    } else {
        echo "<h2>Sorry, there is something wrong. Contact Dev team!</h2>";
    }
    
    mysql_close($mysql);

}

?>