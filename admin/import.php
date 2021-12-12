<?php

//import.php

if(isset($_POST["safname"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");

 session_start();

 $file_data = $_SESSION['file_data'];

 unset($_SESSION['file_data']);

 foreach($file_data as $row)
 {
  $data[] = '("'.$row[$_POST["safname"]].'", "'.$row[$_POST["salname"]].'", "'.$row[$_POST["sapemail"]].'")';
 }

 if(isset($data))
 {
  $query = "
  INSERT INTO tbl_acad 
  (safname, salname, sapemail) 
  VALUES ".implode(",", $data)."
  ";

  $statement = $connect->prepare($query);

  if($statement->execute())
  {
   echo 'Data Imported Successfully';
  }
 }
}



?>