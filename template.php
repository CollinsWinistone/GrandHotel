<!--start php script-->
<?php 
    session_start();
    

?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
  
  <link rel="stylesheet" type="text/css" href="my.css">
  <link rel="stylesheet" type="text/css" href="hotelroom.css">
  
  
	<style>
     div.back {
  background: url(rooms.png) ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
  width:600px;

}
div.box {
  position:absolute;
  top:3474.5px;
    background-color: #ffffff;
  height:150px;
  width:600px;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

   
    input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin-top: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: auto;
    margin-left: 10px;
    
    
}
input[type=submit]:hover {
    background-color: #45a049;
}


    .div1{
      background-color:#202020;
      color:white;
      width:315.75px;
      margin:0;
      float:left;
      height:70px;
      text-align:center;
      vertical-align:middle;
      line-height:40px;

    }
    .div2{
      background-color:#080808;
      color:white;
      width:315.75px;
      margin:0;
      float:left;
      height:300px;
      text-align:center;
      border:0;
      padding:0;

    }
  
  


    div.background-image {
  background: url(bb.jpg) ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
}
div.transbox {
  margin: 30px;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

h1 {
    font-size: 70px;
    color:white;
    text-align:center;
}
body{
  height: 100%;
}
html{
  height: 100%;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: transparent;
}


li:last-child {
    border-right: none;
}

li a {
    color: white;
    display:table-cell;
    text-align:center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
table, td {
    border:none;
}
td {
text-align:center;
    height: 50px;
    vertical-align: middle;
    border: 0;
}
footer {
    background-color:#383838 ;
    color:white;
    text-align:center;
    padding:5px;
    clear: left;
    position: fixed;
    bottom: 0px;
    left: 0px;
    width: 100%;
    
}
        
        textarea {
            
            
            width: 100%;
            color: fuchsia;
            font-size: 15px;
            background-repeat: no-repeat;
            background-size: cover;
            
            
        }
        
        #feedback {
            width: 70%;
            
            margin-left: auto;
            margin-right: auto;
        }
        
        
</style>
</head>

<!------body background="bb.jpg"; width="100%" height="100%"--------------->
<body>
<div class="background-image">
<div class="transbox">
  <br>
<ul>
  <li style="float: left;border-right:1px solid #bbb;"><a href="welcome.php"><b>HOME</b></a></li>
  <li style="float: left;border-right:1px solid #bbb;"> <a href="#"><b>SERVICES</b></a></li>
  <li style="float: left;border-right:1px solid #bbb;"><a href="#"><b>CONTACT</b></a></li>
  <li style="float: left;border-right:1px solid #bbb;"><a href="welcome.php#about"><b>ABOUT US</b></a></li>
    
    
    
</ul>


<h1 style="text-align:center;margin-top:60px;"><span><img src="logo_3.png"></span>Grand Hotel Kenya</h1>
<p style="text-align:center;color:white;font-size:140%;">Ideal Hotel for you and your family. A luxury hotel that blends the elegance of <br> gracious living in an exclusive and serene setting.</p>
    </div>
    
    <div id="feedback">
    <!--textarea  for users feedback-->
        <form action="#" method="post">
    <textarea cols="50" rows="10"></textarea><br>
        <div style="width:40%;margin-left:auto;margin-right:auto;">
        <input type="submit" value="Send your feedback">
            </div>
        
        
    
    </form>
    </div>

    </div>
    
    
    
    
    <!--create a footer-->
    <footer class="footer"><p style="text-align:center;"> &copy;<?php echo date("Y");?> Grand Hotel Kenya.  All Rights Reserved</p></footer>



<script src="js/jquery"></script>
<script src="js/test.js"></script>
</body>


</html>