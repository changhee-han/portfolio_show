<?php include("includes/config.inc.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("includes/meta_info.inc.php"); ?>
    <title><?php echo $page_title; ?> - <?= $site_title; ?></title>
  </head>
  <body>
    <?php include("includes/nav.inc.php"); ?>
    <?php
      include('db_connect.php');

      $mysql = get_connection();
      $result = mysql_query("USE ".DB_NAME) or DIE(mysql_error());
      $query = "SELECT * FROM student_bio WHERE firstname = '".$page_title."'";
      $result = mysql_query($query) or DIE(mysql_error());
      // if($result)
      // {
      //   echo "We found You!";
      // }
      while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
        // echo $row['firstname'];
        // echo $row['lastname'];
        // echo $row['website_url'];
        // echo $row['title'];
        // echo $row['statement'];
        // echo $row['bio'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $website = $row['website_url'];
        $title = $row['title'];
        $statement = $row['statement'];
        $bio = $row['bio'];
      }
    ?>
    <h2> <?php echo $firstname." ".$lastname; ?></h2>
    <h3><?php echo $title; ?></h3>

    <h3><?php echo $statement; ?></h3>
    <p><?php echo $bio; ?></p>
    <?php include("includes/footer.inc.php"); ?>
  </body>
</html>
