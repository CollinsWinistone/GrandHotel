<?php



$con = mysqli_connect('localhost', 'root', '', 'trials');

if(!$con)
{
  echo 'Not Connected to Server';

}
if(!mysqli_select_db($con,'trials'))
{
  echo 'Database Not Selected';
}
$Username = $_POST['username'];
$Password = $_POST['password'];
$Fullname = $_POST['name'];

$sql = "INSERT INTO try (username,password,fullname) VALUES ('$Username', '$Password', '$Fullname')";



if(!mysqli_query($con,$sql))
{
  echo 'Not Inserted';
}
else
{
  echo 'Inserted';
}
header("Location:registration.php?register_action=success");
?>


