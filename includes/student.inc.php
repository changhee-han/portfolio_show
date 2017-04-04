<?php
$mysql = get_connection();
$result = mysql_query("USE ".DB_NAME) or DIE(mysql_error());
$query = "SELECT * FROM student_bio WHERE firstname = '".$page_title."'";
$result = mysql_query($query) or DIE(mysql_error());
mysql_set_charset("utf8");
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){

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

<div id="student-wrapper">
  <div id="student-group">
    <section id="info">
      <div class="pic-quote">
        <img src="<?php echo $studentPortrait; ?>" alt="<?php echo $firstname." ".$lastname; ?>">
        <div class="title-quote">
          <h3><strong> <?php echo $firstname." ".$lastname; ?></strong></h2>
          <h3 class="title"><?php echo $title; ?></h2>
          <h4 class="all-caps"><strong><?php echo $statement; ?></strong></h3>
        </div>
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
