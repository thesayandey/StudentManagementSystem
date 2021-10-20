<?php
    
    session_start();
    //Destroying sessiuon
    session_destroy();
    header("location:../login.php");//redirecting to admin login page
?>