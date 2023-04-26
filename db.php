<?php

require ("connection.php");

if(isset($_POST['save']))
 {
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $mobile = $_POST['mobile'];

     $sql_query = "INSERT INTO user_detail (first_name,last_name,email,gender,mobile)
     VALUES ('$first_name','$last_name','$email','$gender','$mobile')";


     if (mysqli_query($conn, $sql_query))
     {
             echo "User Details Added Successfully..!";

     }
     else
     {
         echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?><br><br><br>
<a href="details.php" style="background-color: #12f5f1f2; padding: 15px 15px; text-decoration: none; border: 1px; border-color: black;">Show Details</a>
