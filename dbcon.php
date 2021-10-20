<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; //default password
    $database = "sms";

    $con = mysqli_connect($servername, $username, $password, $database);

    if($con == false){
        echo "Not connected :(";
    }
    // else{
    //     echo "Connected :)";
    // }

?>