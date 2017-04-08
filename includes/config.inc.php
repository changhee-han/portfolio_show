<?php
  $site_title = "The Final Draft";

  //Generate the site title based on the current URL
  $page_title = $_SERVER["PHP_SELF"];
  //Look for a forward slash and replace it with nothing
  $page_title = str_replace("/", "", $page_title);
  //Look for an underscore and replace with a space
  //This is for filenames with two or more words
  $page_title = str_replace("_", " ", $page_title);
  //Remove .php from the end of a string
  $page_title = substr($page_title, 0, -4);
  //Uppercase each first letter of a word
  $page_title = ucwords($page_title);

  //Changes the page title variable if it match Index or Form
  if($page_title == "Index") {
    $page_title = "Home";
  }
 ?>
