<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Final Draft</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php include("includes/nav.inc.php"); ?>

    <header class="landing">

      <!-- <h1>The Final Draft</h1> -->
      <!-- <h2>2017 Portfolio Showcase</h2> -->
      <div class="videos">
        <video autoplay loop poster="posterimage.jpg">
          <source src="http://taxify.co/wp-content/uploads/2014/06/file.mp4" type="video/mp4" />
        </video>
      </div>
      <!-- <h3>April 26, 2017, 5:00pm - 8:00pm</h3> -->
    </header>

    <div id="wrapper">
      <section id="about">
        <h2 class="all-caps"><strong>Humber College</strong></h2>
        <h2 class="all-caps lighter">Multimedia Design & Development</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum
          dolore eu fugiat nulla pariatur. Excepteur sint occaecat
          cupidatat non proident, sunt in culpa qui officia deserunt
          mollit anim id est laborum.
        </p>
      </section>

      <section id="grads">
        <h3><strong>Grads</strong></h3>
        <ul class="job-groups">
          <li><strong>All</strong></li>
          <li><strong>Design</strong></li>
          <li><strong>Development</strong></li>
          <li><strong>Multimedia</strong></li>
        </ul>

        <!-- <ul>
          <li>
            <a href="#">
              <img src="http://placehold.it/250x350" alt="placehold">
              <p>Student</p>
              <p>Title</p>
            </a>
          </li>
        </ul> -->

        <ul class="students">


        <?php
          include('db_connect.php');

          $mysql = get_connection();
          $result = mysql_query("USE ".DB_NAME) or DIE(mysql_error());
          $query = "SELECT firstname, lastname, title FROM student_bio";
          $result = mysql_query($query) or DIE(mysql_error());
//
          while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            echo "<li>
                    <a href='".lcfirst($row['firstname']).".php'><img src='http://placehold.it/250x350' alt='placeholder'>"
                    .$row['firstname']." ".$row['lastname']."<br><span>".$row['title'].
                    "</span></a>
                </li>";
          }
          mysql_close($mysql);
        ?>
        </ul>
      </section>

      <section id="map">
        <h2 class="uppercase">The Final Draft Gradshow</h2>
        <p><strong>Tuesday, April 26, 2017</strong></p>
        <p><em>5pm - show opens</em></p>
        <p><em>6pm - Award Ceremony</em></p>
        <p><em>7pm - Show Closes</em></p>
        <p> The Burroughes Building, 639 Queen St. West, Toronto</p>
        <ul class="boxes">
          <li><a href="#">RSVP</a></li>
          <li><a href="#">Directions</a></li>
        </ul>
      </section>

      <?php include("includes/footer.inc.php"); ?>
    </div>
  </body>
</html>
