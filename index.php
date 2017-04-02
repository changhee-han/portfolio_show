<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Final Draft</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/smooth_scroll.js"></script>
    <script src="https://use.fontawesome.com/bb140b11f8.js"></script>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php include("includes/nav.inc.php"); ?>

    <header id="home" class="landing">

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
        <h3 class="center"><strong>Grads</strong></h3>
        <ul class="job-groups">
          <li data-filter="all">
            <input id="select-type-all" name="radio-set-1" type="radio" class="ff-selector-type-all" checked="checked" />
	          <label for="select-type-all" class="ff-label-type-all">All</label>
          </li>
          <li data-filter=".designers">
            <input id="select-type-design" name="radio-set-1" type="radio" class="ff-selector-type-design" />
	          <label for="select-type-design" class="ff-label-type-design">Design</label>
          </li>
          <li data-filter=".developers">
            <input id="select-type-development" name="radio-set-1" type="radio" class="ff-selector-type-development" />
	          <label for="select-type-development" class="ff-label-type-development">Development</label>
          </li>
          <li data-filter=".multimedia">
            <input id="select-type-multimedia" name="radio-set-1" type="radio" class="ff-selector-type-multimedia" />
	          <label for="select-type-multimedia" class="ff-label-type-multimedia">Multimedia</label>
          </li>
        </ul>

        <ul class="container students">

        <?php
          include('db_connect.php');

          $mysql = get_connection();
          $result = mysql_query("USE ".DB_NAME) or DIE(mysql_error());
          $query = "SELECT firstname, lastname, title, isDesinger, isDeveloper, isMedia FROM student_bio ORDER BY firstname";
          $result = mysql_query($query) or DIE(mysql_error());
//
          while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $isDesinger= "";
            $isDeveloper= "";
            $isMedia= "";

            if($row['isDesinger']==1){
              $isDesinger= "designers";
            }
            if($row['isDeveloper']==1){
              $isDeveloper= "developers";
            }
            if($row['isMedia']==1){
              $isMedia= "multimedia";
            }
            echo "<li class= 'mix ".$isDesinger." ".$isDeveloper." ".$isMedia."'>
                    <a href='".lcfirst($row['firstname']).".php'><img src='http://placehold.it/250x350' alt='placeholder'>"
                    .ucwords($row['firstname'])." ".ucwords($row['lastname'])."<br><span>".$row['title'].
                    "</span></a>
                </li>";
          }
          mysql_close($mysql);
        ?>
        </ul>
      </section>

      <section id="schdule">
        <h2 class="uppercase">The Final Draft Gradshow</h2>
        <p><strong>Tuesday, April 26, 2017</strong></p>
        <p><em>5pm - show opens</em></p>
        <p><em>6pm - Award Ceremony</em></p>
        <p><em>7pm - Show Closes</em></p>
        <p><span><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></span> The Burroughes Building, 639 Queen St. West, Toronto</p>
        <ul class="boxes">
          <li><a href="#">RSVP</a></li>
          <li><a href="https://www.google.ca/maps/place/The+Burroughes+Building/@43.6471861,-79.4055349,17z/data=!3m1!4b1!4m5!3m4!1s0x882b34e75b32c1b1:0xf2bfe4629a54cda5!8m2!3d43.6471861!4d-79.4033462" target="_blank">Get Directions</a></li>
        </ul>
      </section>

      <div id="map"></div>
      <script src="js/google-maps.js"></script>
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdqxP4PXwg0Fruke1OOwGU22WSL4Fqve4&callback=initMap">
      </script>

      <?php include("includes/footer.inc.php"); ?>
    </div>
    <script src="js/mixitup.min.js"></script>
    <script src="js/mixitup-code.js"></script>
  </body>
</html>
