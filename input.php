<?php

require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $hashtag = $_POST["hashtag"];


  $query = "INSERT INTO hashtags (hashtag) VALUES ('$hashtag')";

  
  if (mysqli_query($conn, $query)) {
    echo "Data berhasil disimpan.";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}


mysqli_close($conn);






?>