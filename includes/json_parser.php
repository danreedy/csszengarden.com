<?php
  header('Content-Type: application/json');
  /**
  * CSS Zen Garden Submission Parser
  * Author: Dan Reedy - dan@reedy.in - http://reedy.in
  * 
  * The premise of this is to parse existing CSS submissions to dynamically build
  * the master list. This can be used to create a JSON array for future enhancements.
  */

  function readFirstLine($filename) {
    $file = fopen($filename,'r');
    $line = fgets($file);
    fclose($file);
    return $line;
  }

  function parseDesignInformation($first_line) {
    preg_match('/(\d{3})/i',$first_line,$submission);
    $submission = $submission[1];
    preg_match("/\'(.+?)\'/i", $first_line, $title);
    $title = $title[1];
    preg_match("/by\ (.+?)(\ \*\/)/",$first_line,$author);
    $author_and_url = $author[1];
    preg_match("/(.*)(, |\ -\ )(.*)/",$author_and_url,$a_u);
    if(count($a_u) > 0) {
      $author = $a_u[1];
      $website = $a_u[3];
    } else {
      $author = $author_and_url;
      $website = "";
    }
    $design = array(
      "submission" => $submission,
      "title" => $title,
      "author" => trim($author),
      "website" => trim($website)
    );
    return $design;
  }

  $root_pathinfo = pathinfo(__DIR__);
  $all_entries = glob($root_pathinfo['dirname'] . '/' . "*", GLOB_ONLYDIR);
  $submissions = array();
  foreach($all_entries as $entry)
  {
    if(preg_match('/\d{3}$/',$entry,$matches)) {
      $css_file = $entry . '/' . $matches[0] . '.css';
      if(file_exists($css_file)) {
        $first_line = readFirstLine($css_file);
        $submissions[] = parseDesignInformation($first_line);
      } 
    }    
  }
  
  print json_encode($submissions);
?>
