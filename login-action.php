<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'trials');

if(!$con)
{
  echo 'Not Connected to Server';

}
else
{
$username = $_POST['username'];
$password = $_POST['password'];

//set the session variable for username
$_SESSION['username']=$username;
    
//check if there the user name exists and log in if user is a member

$sql = "SELECT username,password FROM try WHERE username='$username' and password='$password'";

$login_results=mysqli_query($con,$sql);
if($login_results)
{
    while($row=mysqli_fetch_array($login_results,MYSQLI_ASSOC))
    {
        $jina=$row['username'];
        $security=$row['password'];
    }
    
    //prevent the site from crashing incase of no array is returned by msql fetch
    
    while(!$row=mysqli_fetch_array($login_results,MYSQLI_ASSOC))
    {
        echo "sorry for the inconvenience caused..";
        break;
    }
    
    if($jina==$username and $security==$password)
    {
        header('location:welcome.php');
        
    }
    else
    {
        echo "sorry there is no connection";
        //header('location:index.php');
        
        
    }
}
else
{
    echo "unsuccessfull";
}
}

?>




































