<?php
require 'connection.php';

$query="select * from student"; 
$result= mysqli_query($con, $query);
$total = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: grey;
  color: white;
}
h1{
  width: 90%;
  background-color: grey;
  color:white;
  padding: 30px;
  text-align: center;
}
}
</style>
</head>
<body>
   <h1>All Updated Data</h1> 
   <table style="width:100%" id="customers">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Father Name</th> 
    <th>Roll Number</th>
    <th>Email</th>
    <th>CNIC</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Operations</th>
  </tr>
  <?php

  	while($fet = mysqli_fetch_array($result))
	{
    echo "<tr>
	          <td>".$fet['first_name']."</td>
          	<td>".$fet['last_name']."</td>
	          <td>".$fet['father_name']."</td>
            <td>".$fet['roll_number']."</td>
            <td>".$fet['email']."</td>
            <td>".$fet['cnic']."</td>
            <td>".$fet['phone_number']."</td>
            <td>".$fet['address']."</td>
            <td><a href='edit.php?na=$fet[first_name]&ln=$fet[last_name]&fn=$fet[father_name]&rn=$fet[roll_number]&em=$fet[email]&cn=$fet[cnic]&pn=$fet[phone_number]&ad=$fet[address]' >Edit</a></td>
            <td><a href='delete.php?rn=$fet[roll_number]' >Delete</a></td>
       </tr>";
  
  }
	?>

</table>
</body>
</html>
