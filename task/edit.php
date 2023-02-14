<?php
if(isset($_POST["Update"]))
{
  header('Location:show.php');
}
?>
<?php
require("connection.php");
error_reporting(0);
$_GET['na'];
$_GET['ln'];
$_GET['fn'];
$_GET['rn'];
$_GET['em'];
$_GET['cn'];
$_GET['pn'];
$_GET['ad'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
</head>
<body>
<div class="parent-div">
    <form method='GET' >
        <input type="text" id="name" name="name" value="<?php echo $_GET['na']; ?>" placeholder ="Your First Name"><br><br>

        <input type="text" id="lname" name="lname" value="<?php echo $_GET['ln']; ?>" placeholder ="Your Last Name"><br><br>

        <input type="text" id="fname" name="fname" value="<?php echo $_GET['fn']; ?>" placeholder ="Your Father Name"><br><br>

        <input type="number" id="rnum" name="rnum" value="<?php echo $_GET['rn']; ?>" placeholder ="Your Roll Number"><br><br>

       <input type="email" id="email" name="email" value="<?php echo $_GET['em']; ?>" placeholder ="Your Email Address"><br><br>

        <input type="number" id="cnic" name="cnic" value="<?php echo $_GET['cn']; ?>" pattren="11" placeholder ="Your CNIC Number"><br><br>

        <input type="number" id="num" name="num" value="<?php echo $_GET['pn']; ?>" pattren="11" placeholder ="Your Phone Number"><br><br>

        <input type="text" id="add" name="add" value="<?php echo $_GET['ad']; ?>" placeholder ="Your Address"><br><br>

        <input type="submit"name ="submit" value="Update"></a>
      </form>
      </div>  
</body>
</html>

<?php
require("connection.php");
if($_GET['submit'])
{
  
  $name = $_GET['name'];
  $lname = $_GET['lname'];
  $fname = $_GET['fname'];
  $rnum = $_GET['rnum'];
  $email = $_GET['email'];
  $cnic = $_GET['cnic'];
  $num = $_GET['num'];
  $add = $_GET['add'];
  
  $query = "UPDATE `student` SET `first_name`='$name',`last_name`='$lname',`father_name`='$fname',`roll_number`='$rnum',`email`='$email',`cnic`='$cnic',`phone_number`='$num',`address`='$add' WHERE `roll_number` = '$rnum'";
  $data = mysqli_query($con, $query);
}
  if($data)
  {
    echo "Updated Successfully";
  }
  else
  {
    echo "Not Updated";
  }

?>

