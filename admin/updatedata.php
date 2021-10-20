<?php

include('../dbcon.php');
        
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcon = $_POST['pcon'];
        $std = $_POST['std'];
        $imagename = $_FILES['simg']['name'];
        $tempname =  $_FILES['simg']['tmp_name'];   //getting the temporary name of the image filej

        //From hidden input
        $id = $_POST['sid'];

        move_uploaded_file($tempname, "../dataimages/$imagename");
        
        $qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `image` = '$imagename' WHERE `id` = $id; ";

        $run = mysqli_query($con, $qry);
        // echo $qry;
        

        if($run == true){
            ?>

            <script>
                alert('Updated :)');
                //back to update page
                window.open('updateform.php?sid=<?php echo $id; ?>', '_self')
               
            </script>

            <?php
        }

    


?>