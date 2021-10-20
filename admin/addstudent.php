<?php
    session_start();
    if(isset($_SESSION['uid'])){
        // echo $_SESSION['uid'];
    }
    else{
        // echo "ERROR";
        header('location: ../login.php');
    }
?>

<?php
    include('header.php');
    include('titlehead.php');
?>

<form action="addstudent.php" method="post" enctype="multipart/form-data" style="width: 100%; margin-top: 40px; margin-left: 580px;" align='center'>

<!-- For storing image enc type should be defined as "multipart/form-data" -->

<table >
    <tr>
        <th>Roll no.</th>
        <td> <input type="text" name="rollno" id="rollno" placeholder="Enter roll no" ></td>
    </tr>

    <tr>
        <th>Name</th>
        <td><input type="text" name="name" id="name" placeholder="Enter name" ></td>
    </tr>

    <tr>
        <th>City</th>
        <td><input type="text" name="city" id="city" placeholder="Enter city" ></td>
    </tr>

    <tr>
        <th>Contact no.</th>
        <td><input type="text" name="pcon" id="pcon" placeholder="Enter contact no" ></td>
    </tr>

    <tr>
        <th>Standerd</th>
        <td><input type="number" name="std" id="standerd" placeholder="Enter standerd" ></td>
    </tr>

    <tr>
        <th>Image</th>
        <td><input type="file" name="simg" id="simg"  ></td>
    </tr>

    <tr>
        <td colspan="4" align="center" style="margin-right: 30px;"><input type="submit" name="submit" value="submit"></td>
    </tr>

   
</table>

</form>




    </body>
</html>    

<?php 
    if(isset($_POST['submit'])){

        include('../dbcon.php');
        
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcon = $_POST['pcon'];
        $std = $_POST['std'];
        $imagename = $_FILES['simg']['name'];
        $tempname =  $_FILES['simg']['tmp_name'];   //getting the temporary name of the image filej

        move_uploaded_file($tempname, "../dataimages/$imagename");
        
        $qry = "INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ( '$rollno', '$name', '$city', '$pcon', '$std', '$imagename')";

        $run = mysqli_query($con, $qry);
        // echo $qry;
        

        if($run == true){
            ?>

            <script>
                alert('Inserted :)');
            </script>

            <?php
        }

    }

?>