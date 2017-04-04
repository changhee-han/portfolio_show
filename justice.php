<?php include("includes/config.inc.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("includes/meta_info.inc.php"); ?>
    <title><?php echo $page_title; ?> - <?= $site_title; ?></title>
  </head>
  <body>
    <?php include("includes/nav.inc.php"); ?>
    <div id="student-wrapper">
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
          $studentPortrait = $row['portrait'];
          $screenshot = $row['screenshot'];
        }
      ?>
      <h2><strong> <?php echo $firstname." ".$lastname; ?></strong></h2>
      <h2 class="title"><?php echo $title; ?></h2>
      <div id="student-group">
        <section id="info">
          <div class="pic-quote">
            <img src="<?php echo $studentPortrait; ?>" alt="<?php echo $firstname." ".$lastname; ?>">
            <h3 class="all-caps"><strong><?php echo $statement; ?></strong></h3>
          </div>
          <p><?php echo $bio; ?></p>
        </section>
        <section id="work">
          <a href="<?php echo $website; ?>" target="_blank">
            <img src="<?php echo $screenshot; ?>" alt="<?php echo $firstname; ?>">
            <?php echo $website; ?>
          </a>
        </section>
      </div>
    </div> <!-- End Student-wrapper -->
    <?php include("includes/footer.inc.php"); ?>
  </body>
</html>
