<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "pweb_db";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("error bang");
    }

?>