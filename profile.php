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
  <body class="student">
      <?php include("includes/nav.inc.php"); ?>

<?php

$student_id = $_GET['id'] == "" ? 13 : $_GET['id'];

//if($student_id){
     include('db_connect.php');

     $mysql = get_connection();
     $result = mysql_query("USE ".DB_NAME) or DIE(mysql_error());

     $query = "SELECT * FROM student_bio ORDER BY firstname";
     $result = mysql_query($query) or DIE(mysql_error());
     $data = array();
     while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
         $data[] = $row;
     }

$html = '';
$dataLength = count($data);
for($i = 0; $i <$dataLength; $i++ ){

    $previous = $i - 1;
    if($previous < 0){
        $previous = $dataLength - 1;
    }
    $next = $i + 1;
    if($next == $dataLength){
        $next = 0;
    }
    $display = ($data[$i]['ID'] == $student_id) ? 'displayProfile' : '';
    $html .= '<div class="studentProfile student-wrapper '.$display.'" id="'.$data[$i]['ID'].'">
                <div id="student-group">
                    <section id="info">
                        <div class="pic-quote">
                            <img src="'.$data[$i]['portrait'].'" alt="'.$data[$i]['firstname'].'">
                            <div class="title-quote">
                                <h3 class="student_name"><strong> '.$data[$i]['firstname'].' '.$data[$i]['lastname'].' </strong></h3>
                                <h3 class="title">'.$data[$i]['title'].'</h3>
                                <h4 class="all-caps student_statement"><strong>'.$data[$i]['statement'].'</strong></h4>
                            </div>
                        </div>
                        <p>'.$data[$i]['bio'].'</p>
                    </section>
                    <div id="work">
                        <a href="'.$data[$i]['website_url'].'" target="_blank">
                            <img src="'.$data[$i]['screenshot'].'" alt="'.$data[$i]['firstname'].'">
                            <h4 class="all-caps"><strong>View Website</strong></h4>
                        </a>
                    </div>
                </div>
                <ul class="boxes buttons">
                    <li><a href="javascript:changeProfileDisplay(\''.$data[$previous]['ID'].'\')">Previous</a></li>
                    <li><a href="javascript:changeProfileDisplay(\''.$data[$next]['ID'].'\')">Next</a></li>
                </ul>
             </div>';


}

echo $html;

?>
      <?php include("includes/footer.inc.php"); ?>
  </body>
</html>
