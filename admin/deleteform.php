<?php  


include('../dbcon.php');
   
        $id = $_REQUEST['sid'];
        $qry = "DELETE FROM `student` WHERE `id` = '$id';";

        $run = mysqli_query($con, $qry);
        // echo $qry;
        

        if($run == true){
            ?>

            <script>
                alert('Deleted :)');
                //back to update page
                window.open('deletestudent.php', '_self')
               
            </script>

            <?php
        }


?>
