<?php
  
  if (($open = fopen("filename.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }
  echo "<pre>";
  //To display array data
  var_dump($array);
  echo "</pre>";