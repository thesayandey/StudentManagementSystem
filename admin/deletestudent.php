<!-- This is for deleting student records -->

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

<table align="center">
    <form action="deletestudent.php" method="post">
    
    <tr>
        <th>Enter Standerd</th>
        <td><input type="number" name="standerd" id="standerd" placeholder="Enter standerd"></td>
    

    
        <th>Enter name</th>
        <td><input type="text" name="stuname" placeholder="Enter student name"></td>
    

    <td colspan="2"><input type="submit" name="submit" value="search" align='center'></td>

    </tr>
     
    </form>
</table>

<table align="center" width='80%' border="1" style="margin-top: 20px;">
    <tr ">
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll no</th>
        <th>Delete</th>
    </tr>

    
<?php 

if(isset($_POST['submit'])){
    include('../dbcon.php');

    $name = $_POST['stuname'];
    $standerd = $_POST['standerd'];

    $sql = "SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";

    $run = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($run) < 1){
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    else{
        $count = 0;
        while($data = mysqli_fetch_assoc($run)){
            $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><img style="max-width: 100px;" src="../dataimages/<?php echo $data['image']; ?> " alt="student image" ></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['rollno']; ?></td>
                    <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
                </tr>
                <!-- updateform.php?sid , here left side of the ? mark is url and the right portion is variable, we can use this as get method -->

            <?php
        }
    }
}

?>
</table>

