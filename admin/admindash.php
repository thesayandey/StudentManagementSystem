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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    
<?php
    include('header.php');
?>

    <div class="admintitle" align='center'>
        <h1>Welcome to Admin Dashboard</h1>
        <h3 style="float: right;"><a href="logout.php">Log Out</a></h3>
    </div>

    <div class="dashboard">
        <table style="width: 50%;" align='center'>
            <tr>
                <td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
            </tr>

            <tr>
                <td>2.</td><td><a href="updatestudent.php">Update Student Student</a></td>
            </tr>

            <tr>
                <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
            </tr>
        </table>
    </div>

</body>
</html>