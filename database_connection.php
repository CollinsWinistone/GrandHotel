<?php 

    $sql = "SELECT username,password FROM try WHERE username='$username' and password='$password'";

$login_results=mysqli_query($con,$sql);
if($login_results)
{
    while($row=mysqli_fetch_array($login_results,MYSQLI_ASSOC))
    {
        $jina=$row['username'];
        $security=$row['password'];
    }
}

//print out the results
echo "Hello world";
    
    

?>