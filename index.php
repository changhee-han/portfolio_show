<?php include("includes/config.inc.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Final Draft</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/smooth_scroll.js"></script>
    <!-- <script type="js/mobile_toggle.js"></script> -->
    <script src="https://use.fontawesome.com/bb140b11f8.js"></script>
    <!-- Adds CSS3 Media Queries to older browsers such as IES+  -->
    <script src="js/css3-mediaqueries.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/media.css">
  </head>
  <body>
    <?php include("includes/nav.inc.php"); ?>

    <header id="home" class="landing fadeIn">
      <hgroup>
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1517.4 128.97"><title>final_draft</title><path d="M273.82,498.36v-8h24.11v-8H209.14v8h40.38V595.18h8.23V490.32h8v112.9h-24.3V498.36H201.3V474.25H306v24.11Z" transform="translate(-201.3 -474.25)"/><path d="M402.78,603.22V554.8h8v40.38h8V546.77H346.34v56.45H322.23v-129h24.11v48.41h56.45V474.25h24.11V530.7h-8V482.28h-8V530.7H338.3V482.28h-8v112.9h8V538.73h88.59v64.48Z" transform="translate(-201.3 -474.25)"/><path d="M457.46,603.22v-129H538v24.11H481.57v40.38h40.38v-8H489.61v-8H530v24.11H473.54V490.32H530v-8H465.5v112.9H538v-8H473.54V554.8h8v24.3h64.48v24.11Z" transform="translate(-201.3 -474.25)"/><path d="M641.7,498.36v40.38H674v-8h-24.3v-8h32.34v24.11H633.67V490.32h56.45v-8H625.63v112.9h8V554.8h8v48.41H617.59v-129h80.56v24.11Z" transform="translate(-201.3 -474.25)"/><path d="M712.65,603.22V490.32h16.07v-8H712.65v-8h24.11v24.11H720.69v96.82h8V506.39h8v96.82Z" transform="translate(-201.3 -474.25)"/><path d="M854.16,603.22,781.64,482.28h-8v112.9h8V498.36l63.11,104.86H835l-45.28-75.85v75.85H765.57v-129h20.78l67.82,112.9V482.28h-8v75.85l-8-13.72V474.25H862.2v129Z" transform="translate(-201.3 -474.25)"/><path d="M963.13,603.22l-11-32.34H913.55l-11.17,32.34H876.5l43.9-129h25.68l-9,27.24,18.42,53.31H910L923.94,514l4.51,13.13-7.06,19.6h22.54L928.44,501.3l6.47-19h-8.62l-38.81,112.9h8.62l11.17-32.34H958l11,32.34h8.62l-31.95-93.69,4.51-12.94,39,114.66Z" transform="translate(-201.3 -474.25)"/><path d="M1005.47,603.22v-8H1078v-8h-72.52V474.25h24.11v96.63h-8V482.28h-8v96.82H1086v24.11Z" transform="translate(-201.3 -474.25)"/><path d="M1195.39,603.22h-44.1v-129h44.1c34.1,0,52.53,29.2,52.53,60.56,0,26.07-21,52.33-48.41,52.33h-32.14V490.32h28c26.85,0,36.06,25.48,36.06,48.41h-.78c-.2-20.38-13.33-40.38-35.28-40.38h-20v80.75h24.11c21.76,0,40.57-23.52,40.57-44.1,0-26.85-15.68-52.72-44.88-52.72h-35.87v112.9h36.06c32.93,0,60.56-22.15,60.56-56.45h.78C1256.74,573,1230.47,603.22,1195.39,603.22Z" transform="translate(-201.3 -474.25)"/><path d="M1352.58,603.22l-32.34-56.45h-16.07v56.45h-24.11v-129h52.53a28,28,0,0,1,28,27.83c0,15.29-12,28.62-27.44,28.62h-37V490.32h30.18c12,0,18.23,2.74,18.23,16.07h-1c0-7.25-6.47-8-12.15-8h-27.24v24.3h29.4c11.17,0,19-10,19-20.58a19.83,19.83,0,0,0-19.6-19.8H1288.1v112.9h8V538.73h28l32.34,56.45h9.41l-32.34-56.45c17.84,0,34.3-13.33,34.3-31.95h.78c0,16.07-5.68,32.54-22.34,37.83l33.32,58.6Z" transform="translate(-201.3 -474.25)"/><path d="M1473.32,603.22l-11-32.34h-38.61l-11.17,32.34h-25.87l43.9-129h25.68l-9,27.24,18.42,53.31H1420.2L1434.12,514l4.51,13.13-7.06,19.6h22.54l-15.48-45.47,6.47-19h-8.62l-38.81,112.9h8.62l11.17-32.34h50.76l11,32.34h8.62l-31.95-93.69,4.51-12.94,39,114.66Z" transform="translate(-201.3 -474.25)"/><path d="M1523.69,498.36v96.82h8V538.73h40.38v-8h-40.37v-24.3h8v16.27h40.38v24.11h-40.38v56.45h-24.11V490.32h72.52v-8h-72.52v-8h80.56v24.11Z" transform="translate(-201.3 -474.25)"/><path d="M1662.45,498.36v96.82h8V506.39h7.84v96.82h-24.11V490.32h56.45v-8h-96.82v8h32.34v8H1606V474.25h112.7v24.11Z" transform="translate(-201.3 -474.25)"/></svg>
      </hgroup>
      <!-- <div class="videos">
        <video autoplay loop poster="posterimage.jpg">
          <source src="http://taxify.co/wp-content/uploads/2014/06/file.mp4" type="video/mp4" />
        </video>
      </div> -->
      <!-- <img src="images/video_placeholder.png" alt="Video placeholder"> -->
    </header>

    <div id="wrapper">
      <section id="about">
        <h2 class="all-caps"><strong>Humber College</strong></h2>
        <h2 class="all-caps lighter">Multimedia Design & Development</h2>
        <p>
          The Final Draft is a showcase for the Multimedia Design and Development
          2017 Graduating Class of Humber College. Emerging designers, developers,
          and multimedia artists coming together to showcase the final draft of a
          range works including web design, mobile interface design, experience design,
          motion graphics, 2-D animation, web coding, streaming, user testing, video
          and sound editing, user interface prototyping, digital storytelling, and
          interactive design.
        </p>
        <p>Interested in meeting or drafting new talent? <a href="https://mmddthefinaldraft.eventbrite.ca" target="_blank">RSVP</a> now.</p>
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
//          $query = "SELECT firstname, lastname, title, isDesinger, isDeveloper, isMedia, workThumbnail, portrait FROM student_bio ORDER BY firstname";

            //Changhee - edited

          $query = "SELECT * FROM student_bio ORDER BY firstname";

          $result = mysql_query($query) or DIE(mysql_error());

          while($row = mysql_fetch_array($result, MYSQL_ASSOC)){

            $isDesinger= "";
            $isDeveloper= "";
            $isMedia= "";

            $studentPortrait= "<img class='portrait' src='".$row['workThumbnail']."' alt='".$row['firstname']." ".$row['lastname']."'>";

            if(empty($row['workThumbnail'])){
                // it's empty!
                $studentPortrait= "";
            }

            if($row['isDesinger']==1){
              $isDesinger= "designers";
            }
            if($row['isDeveloper']==1){
              $isDeveloper= "developers";
            }
            if($row['isMedia']==1){
              $isMedia= "multimedia";
            }

//            $firstnamelink = $row['firstname'];
//            $firstnamelink = str_replace(" ", "_", $row['firstname']);

//            echo "<li class= 'mix ".$isDesinger." ".$isDeveloper." ".$isMedia."'>
//                    <a href='".strtolower($firstnamelink).".php'><img src='".$row['portrait']."' alt='".$row['firstname']." ".$row['lastname']."'>"
//                    .ucwords($row['firstname'])." ".ucwords($row['lastname'])."<br><span>".$row['title'].
//                    "</span>
//                      ".$studentPortrait."
//                    </a>
//                </li>";

            echo "<li class= 'mix ".$isDesinger." ".$isDeveloper." ".$isMedia."'>
                    <a href='profile.php?id=".$row['ID']."'><img src='".$row['portrait']."' alt='".$row['firstname']." ".$row['lastname']."'>"
                    .ucwords($row['firstname'])." ".ucwords($row['lastname'])."<br><span>".$row['title'].
                    "</span>
                      ".$studentPortrait."
                    </a>
                </li>";
          }
          mysql_close($mysql);
        ?>
        </ul>
      </section>

      <section id="schdule">
        <h2 class="uppercase">The Final Draft Gradshow</h2>
        <p><strong>Tuesday, April 25, 2017</strong></p>
        <p><em>5pm - show opens</em></p>
        <p><em>6pm - Award Ceremony</em></p>
        <p><em>7pm - Show Closes</em></p>
        <p><span><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></span> The Burroughes Building, 639 Queen St. West, Toronto</p>
        <ul class="boxes rsvp">
          <li><a href="https://mmddthefinaldraft.eventbrite.ca" target="_blank">RSVP</a></li>
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
