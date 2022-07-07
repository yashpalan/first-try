<?php
    define("DB_server", "localhost");
    define("DB_name", "root");
    define("DB_password", "");
    define("DB_nm", "test");

    $conn = mysqli_connect(DB_server, DB_name, DB_password, DB_nm);

    if(!$conn){
        echo "<script>alert('something went wronge')</script>";
    }
?>