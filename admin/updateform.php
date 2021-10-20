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
    include('../dbcon.php');

    $sid = $_GET['sid'];
    $sql = "SELECT * FROM `student` WHERE `id`='$sid'";

    $run = mysqli_query($con, $sql);

    //there is only one student with given sid, thats why we aren't using any while loop
    $data = mysqli_fetch_assoc($run);
?>




<!-- form -->



<form action="updatedata.php" method="post" enctype="multipart/form-data" style="width: 100%; margin-top: 40px; margin-left: 580px;" align='center'>

<!-- For storing image enc type should be defined as "multipart/form-data" -->

<table >
    <tr>
        <th>Roll no.</th>
        <td> <input type="text" name="rollno" id="rollno" value=<?php echo $data['rollno']; ?> ></td>
    </tr>

    <tr>
        <th>Name</th>
        <td><input type="text" name="name" id="name" value=<?php echo $data['name']; ?> ></td>
    </tr>

    <tr>
        <th>City</th>
        <td><input type="text" name="city" id="city" value=<?php echo $data['city']; ?> ></td>
    </tr>

    <tr>
        <th>Contact no.</th>
        <td><input type="text" name="pcon" id="pcon" value=<?php echo $data['pcont']; ?> ></td>
    </tr>

    <tr>
        <th>Standerd</th>
        <td><input type="number" name="std" id="standerd" value=<?php echo $data['standerd']; ?> ></td>
    </tr>

    <tr>
        <th>Image</th>
        <td><input type="file" name="simg" id="simg"  ></td>
    </tr>

    <tr>
        <td colspan="4" align="center" style="margin-right: 30px;">
        <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
        <input type="submit" name="submit" value="submit">
        
        </td>
    </tr>

   
</table>

</form>