<?php
if(isset($_POST["submit"]))
{
  header('Location:show.php');
}
?>
<?php
require("connection.php");

$rnum = $_GET['rn'];
$query = "DELETE FROM `student` WHERE roll_number = '$rnum'";
$data = mysqli_query($con, $query);

if($data)
{
    echo "Record Successfully Deleted";
}
else
{
    echo "There is a Problem";
}
?>