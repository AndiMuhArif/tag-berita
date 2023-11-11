<?php

require_once "connection.php";
$hastag =$_POST["hashtag"];

$sql = "INSERT INTO hashtags (Hashtag) VALUES ('$hastag)'";
$result = connect()->query($sql);

if ($result) {
    echo "Hastag berhasil ditambahkan";
} else {
    echo "Hastag gagal ditambahkan";
}

connect()-close();

?>