
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
body{
    background-color: lightgrey;
}
.parent-div{
  width: 400px;
  height: 600px;
  border:5px lightblue;
    display:flex;
    align-items:center;
    justify-content: center;
    margin: 50px;
    margin-left: 500px;    
}
div {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 5px;
} 
 input[type=text], select {
  align:center;
  padding: 8px 50px;
  margin: 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=number], select {
  padding: 8px 50px;
  margin: 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=email], select {
  padding: 8px 50px;
  margin:0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=submit] {
  background-color: grey;
  color: white;
  padding: 14px 100px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  }
</style>
<body>
<div class="parent-div">
    <form method='POST' id="user_form">
        <input type="text" id="name" name="name" value="" placeholder ="Your First Name" required><br><br>

        <input type="text" id="lname" name="lname" value="" placeholder ="Your Last Name" required><br><br>

        <input type="text" id="fname" name="fname" value="" placeholder ="Your Father Name" required><br><br>

        <input type="number" id="rnum" name="rnum" value="" placeholder ="Your Roll Number" required><br><br>

       <input type="email" id="email" name="email" value="" placeholder ="Your Email Address" required><br><br>

        <input type="number" id="cnic" name="cnic" value="" pattren="11" placeholder ="Your CNIC Number" required><br><br>

        <input type="number" id="num" name="num" value="" pattren="11" placeholder ="Your Phone Number" required><br><br>

        <input type="text" id="add" name="add" value="" placeholder ="Your Address" required><br><br>
<b id="mesg"></b>
        <input type="submit"name ="submit" value="Submit" id="myform"></a>
      </form>
      </div>  
</body>
</html>
<?php
require 'connection.php';
if(isset($_POST['submit']))
{     
$name = $_POST['name'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$rnum = $_POST['rnum'];
$email = $_POST['email'];
$cnic = $_POST['cnic'];
$num = $_POST['num'];
$add = $_POST['add'];
//   echo $name;
//   echo $lname;
//   echo $fname;
//   echo $rnum;
//   echo $email;
//   echo $cnic;
//   echo $num;
//   echo $add;
// $con = mysqli_connect('localhost', 'root', '','form');
$query = "INSERT INTO `student` ( `first_name`, `last_name`, `father_name`, `roll_number`, `email`, `cnic`, `phone_number`, `address`) VALUES ('$name', '$lname', '$fname', '$rnum', '$email', '$cnic', '$num', '$add')";
//    echo $query;
$run = mysqli_query($con, $query);
if($run == TRUE)
     echo "Data insert sucessful";
 else
 	echo "error !";
}
?>
<script>
$(document).ready(function(){
    $('#myform').submit(function(){
      var data=$('#user_form').serialize()+'&submit=submit';
    $.ajax({
  url:'show.php',
  type:'POST',
  data:data,
  success: function(response){
$('#mesg').text(response);
  }
    });
    });
    });
</script>