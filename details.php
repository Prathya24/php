<?php
require ("connection.php");

$query = "SELECT * FROM user_detail";
$data = mysqli_query($conn, $query);

$result = mysqli_num_rows($data);
$total = mysqli_fetch_assoc($data);


if($result != 0)
{?>

        <table border="3">
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email id</th>
                <th>Gender</th>
                <th>Mobile No.</th>
                </tr>


<?php
        while($total = mysqli_fetch_assoc($data))
        {
                echo "<tr>
                <td>".$total['first_name']."</td>
                <td>".$total['last_name']."</td>
                <td>".$total['email']."</td>
                <td>".$total['gender']."</td>
                <td>".$total['mobile']."</td>
                </tr>";
               
        }
        echo "</table>";
}
else
{
        echo "No Records Found.";

}
?>
