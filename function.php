<?php

function showdetails($standerd, $roll){
    include('dbcon.php');
    $sql = "SELECT * FROM `student` WHERE `rollno`='$roll' AND `standerd`='$standerd';";
    $run = mysqli_query($con, $sql);

    if(mysqli_num_rows($run) > 0){
        $data = mysqli_fetch_assoc($run);
        ?>

        <table border="1" style="width: 70%; margin-top: 30px;" align="center">
            <tr>
                <th colspan="3">Student Details</th>
            </tr>

            <tr>
                <td rowspan="5"><img style="max-height:150px; max-width: 120px;" src="dataimages/<?php echo $data['image']; ?>" alt="Student Image"  ></td>

                <th>Roll No.</th>
                <td><?php echo $data['rollno'] ?></td>
            </tr>

            <tr>
                <th>Name</th>
                <td><?php echo $data['name'] ?></td>
            </tr>


            <tr>
                <th>Standerd</th>
                <td><?php echo $data['standerd'] ?></td>
            </tr>

            <tr>
                <th>Contact no.</th>
                <td><?php echo $data['pcont'] ?></td>
            </tr>

            <tr>
                <th>City</th>
                <td><?php echo $data['city'] ?></td>
            </tr>

        </table>

        <?php
    }
    else{
        echo "<script> alert('No student found :(')</script>";
    }
}

?>