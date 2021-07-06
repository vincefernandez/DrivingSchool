<?php 
require('connection.php');
// Enrollment Query!
if(isset($_POST['EnrollSubmit'])){

    $firstname = $_POST['fn'];
    $email = $_POST['email'];
    $lastname = $_POST['ln'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $course = $_POST['courses'];
    $date = date("Y-m-d");
    $sql = "INSERT INTO enroll (first_name, last_name, address,email,contact,course,status,date) 
    VALUES ('$firstname', '$lastname','$address','$email','$contact','$course','Pending',NOW())";
    if(mysqli_query($con, $sql)){
        ?>
        <script>alert('You are  Successfully Enroll \n Wait for the Approval of Admin');</script>
       <?php
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    }
// Approved Request 
    if(isset($_GET['approved'])){
        $id = $_GET['approved'];
        $sql = "Update enroll SET status = 'Approved' Where id = $id";
        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            header('location: pending-students.php');
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
    }
    // Declined Request
    if(isset($_GET['declined'])){
        $id = $_GET['declined'];
        $declineSQL = "DELETE from enroll where id =$id";
        if ($con->query($declineSQL) === TRUE) {
            header('location: pending-students.php');
          echo"success deleted";
          } else {
            echo "Error: " . $declineSQL . "<br>" . $con->error;
          }
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * from adminlogin where email = '$email' AND password = '$password'";
        $result = mysqli_query($con,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $count = mysqli_num_rows($result);
        
       if($count === 1){
           header('location: pages/tables.php');
       }else{
           ?>
           <script>alert('Error Login');</script>
           <?php
       }
            
    }

    
    
    
?>