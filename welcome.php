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
  <meta name="viewport" content="width=device-width,intial-scale=1.0">
  
  
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
    width: 50%;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
  height: auto;
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
a.test:visited {
background-color: yellow;
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
li a:visited {
  background-color: yellow;
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
    
}
/*style the amenities*/
#amenities {
  width: 52%;
  margin-left: auto;
  margin-right: auto;

}

#gallery {
  width: 52%;
  margin-left: auto;
  margin-right: auto;
}
#rooms {
  width: 52%;
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

<br>
        <!--print the session for this user-->
          <ul style="margin-top: 5px;margin-left: auto;margin-right: auto;width: 600px;">
  <li style="float: left;border-right:1px solid #bbb;"><a href="#home" class="test"><b>HOME</b></a></li>
  <li style="float: left;border-right:1px solid #bbb;"> <a href="#contact" class="test"><b>SERVICES</b></a></li>
  <li style="float: left;border-right:1px solid #bbb;"><a href="template.php" class="test"><b>CONTACT</b></a></li>
  <li style="float: left;border-right:1px solid #bbb;"><a href="#About" class="test"><b>ABOUT US</b></a></li>
  <li style="float: left;border-right:1px solid #bbb;"><a href="menu.php" class="test"><b>MENU </b></a></li>
    
   <li style="float:right"><a class="active" href="logout.php"><b>Logout</b></a></li>
   
    
</ul>
 
<h1 style="text-align:center;margin-top:30px;">Grand Hotel Kenya</h1>
<p style="text-align:center;color:white;font-size:40px;color:rgb(0,25,51);font-weight:bolder;">Ideal Hotel for you and your family. A luxury hotel that blends the elegance of <br> gracious living in an exclusive and serene setting.</p>
    </div>
    
    <!--this div displayed the user logged in the database-->
    <div style="background-color:rgb(51,153,255);width:60%;margin-left:auto;margin-right:auto;opacity:0.7;">
        <div id="session_display">

        <h1 style="color:orange;font-size:40px;"><span><img src="logo_3.png"></span><span style="color:green;">WELCOME&nbsp;&nbsp;</span><?php 
          //allocate the session variabke only if it is set
        if (isset($_SESSION['username'])) {
          # code...
          $full_name=$_SESSION['username'];
          $fullname_caps=strtoupper($full_name);

        }
        else
        {
          $_SESSION['username']="To Grand Hotel";
        }
                        //create a conditional block to only show the username when it is set
            ?><span style="color:purple;font-family:Forte;"><?php  
              if (isset($full_name)) {
                # code...
                echo "$fullname_caps";
              }
              else
              {
                echo "To Grand Hotel";
              }
            ?></span></h1>
    </div>
     </div>
  
<!--the end of transbox-->
    </div>

<div class="hero">
  <div id="gallery">
<a name="Gallery">
<p style="text-align:center;color:black;font-size:300%;">Gallery</p></a>
<p style="text-align:center;color:black;font-size:120%;">Just off Thika Supperhighway, Grand Hotel features a spacious parking space. Rooms include free <br>Wi-Fi and free water upon arrival. This elegant hotel has spacious, air-conditioned rooms with flat<br>-screen satellite TV and a CD player. The modern bathrooms include amenities, a hairdryer and a<br> bathrobe.</p>
<hr style="text-align:center;width:10%;color:solid black;">
</div>
<table width="100%" height="90%" border="0" padding="0" margin="0">
  <tr>
    <td width="25%"><img src="poolcafe.jpeg" width="400px" height="250px"></td>
    <td width="25%"><img src="garden06cafe.jpg"  width="400px" height="250px"></td>
    <td width="25%"><img src="food.jpg"  width="400px" height="250px"></td>
</tr>
<tr>
    <td width="25%"><img src="waiterscafe.jpeg" width="400px" height="250px"></td>
    <td width="25%"><img src="partygardencafe.jpeg"  width="400px" height="250px"></td>
    <td width="25%"><img src="kidsconer.png"  width="400px" height="250px"></td>
</tr>
<tr>
    <td width="25%"><img src="rooms.png" width="400px" height="250px"></td>
    <td width="25%"><img src="cafehotel.jpeg"  width="400px" height="250px"></td>
    <td width="25%"><img src="weedingcafe.jpeg"  width="400px" height="250px"></td>
</tr>
</table>

    </div>

<br>
<div id="amenities">
<a name="Amenities">
<p style="text-align:center;color:black;font-size:300%;">Amenities</p></a>
<p style="text-align:center;color:black;font-size:120%;">Grand Hotel is the best restaurant along Thika superhighway represents culture, tradition & <br> cuisines which are just perfect for you. We offer different types of experience/restaurant facilities to <br> the visitors. We are solely dedicated and famed for our legacy, culture ,royal preservance and regal <br>dinning.</p>
<hr style="text-align:center;width:10%;color:solid black;">
</div>
<table bgcolor="white" width="100%" height="90%" border="0">
  <tr height="30%">
    <td width="25%"><img src="rooms.png" width="300px"></td>
    <td width="25%">
      <p style="text-align:center;color:black;font-size:200%;">Luxurious Rooms</p>
      
      Place where guests can expect to enjoy a meal prepared by expert chefs from the finest seasonal, local ingredients, before climbing the stairs to sleep in comfort and luxury.<hr style="text-align:center;width:20%;border:1px solid black"></td>
    <td width="25%"><img src="chefs.png"  width="300px"></td>
    <td width="25%">
    <p style="text-align:center;color:black;font-size:200%;">World Class Chefs</p>
      Think about setting the table and the mood, the right setting, tablecloth, real glasses, matching plates & etc, that's our tradition.
      <br><hr style="text-align:center;width:20%;border:1px solid black"></td>
  </tr>
  <tr height="30%">
  <td width="25%">
      <p style="text-align:center;color:black;font-size:200%;">Conference and Events</p>
      Wireless high speed internet is accessible in all public areas and meeting rooms. Air conditioned meeting rooms and easy accessibility for the physically challenged. Inquire for rates.<hr style="text-align:center;width:20%;color:black;"></td>
      
      <td width="25%"><img src="conference.png" width="300px"></td>
    <td width="25%">
    <p style="text-align:center;color:black;font-size:200%;">Coffee Shop</p>
    Coffee Shop, located at the hotel lobby, keeps your composure with deep and smooth original African coffees. It's a great place to stay with friends, family and business partners.<hr style="text-align:center;width:20%;color:black;"></td>
      <td width="25%"><img src="coffee.png"  width="300px"></td>
        </tr>
  <tr height="30%">
    <td width="25%"><img src="kidsconer.png" width="300px"></td>
    <td width="25%">
      <p style="text-align:center;color:black;font-size:200%;">Kids Corner</p>
      
      Our outdoor Kids playground has a soft fall floor to soften the blow if your little one takes a tumble. With a slide and lots of tubes to climb in and out of, our playground is sure to tire them out. Children must be supervised at all times on the playground.<hr style="text-align:center;width:20%;border:1px solid black"></td>
    <td width="25%"><img src="bar.png"  width="300px"></td>
    <td width="25%">
    <p style="text-align:center;color:black;font-size:200%;">Restaurant & Bar</p>
    If you are looking for a place to discover the traditional culinary taste and and home-style cooking GRAND HOTEL would be exactly what you need.<hr style="text-align:center;width:20%;border:1px solid black"></td>
  </tr>
</table>
<br>
<br>
<a name="Rooms">
  <div id="rooms">
<p style="text-align:center;color:black;font-size:300%;">Our Rooms</p></a>
<p style="text-align:center;color:black;font-size:120%;">Exuding designs that embrace an appreciation for color, texture and local artistry each of the 35<br> guest rooms provide an ideal relaxing escape away from the hustle and bustle of the city, and include<br> stylish amenities and the very latest in-room technology to elevate your stay. Standard features<br> include High-speed WiFi/Wired connectivity, Minibar, Tea/Coffee making facilities, Flatscreen<br> Satellite TV's, Hairdryer, Bathrobes, Bedroom Slippers, Toiletry set, In-room, Bedside control panel  <br> and Connecting rooms available on request.</p>
<hr style="text-align:center;width:10%;color:solid black;">
</div>
<table width="100%">
  <tr>
  <td>
    <div class="back">
      <div class="box">
      <p style="text-align:left;font-size:120%;"><b>Standard Rooms</b> </p>
      <p>The spacious, chic entrance and warm modern tones give this room a city-style atmosphere while providing the peace and relaxation one expects from a resort. Enjoy comfort and convenience at your own pace.</p>
                                            
                                           
      <p style="text-align:right;font-size:100%;"><b><span class="wk_roomType_price ">KSh 3,000</span>
                                                    
                                                    /&nbsp;Per Night</b> </p>
</div>
</div>
  
</td>
<td>
    <div class="back">
      <div class="box">
      <p style="text-align:left;font-size:120%;"><b>Executive Rooms</b> </p>
      <p>These rooms offer space making them ideal for business and leisure travellers seeking extra space and comfort. They are design with double queen-size bed, large desk, beautiful marble bathroom, contemporary African decoration and allows 2 adult occupancy.</p>
                                            
                                           
      <p style="text-align:right;font-size:100%;"><b><span class="wk_roomType_price ">KSh 3,000</span>
                                                    
                                                    /&nbsp;Per Night</b> </p>
</div>
</div>
  
</td>
  

</tr>
</table>
<br>

<div class="div1">
    <p>ABOUT</p>
</div>

<div class="div1">
  <p> EXPLORE</P>
</div>

<div class="div1">
  <p> PAYMENT ACCEPTED</p>
</div>

<div class="div1">
  <p> CONTACT</p>
  <hr style="color:yellow;">
</div>
<div class="div2">
  <p style="font-size:120%;"> The Grand Hotel is an exclusive<br> Afrikan Continental hotel with a<br> touch of chinese cuisine located at<br> High Point, Juja, along the Thika <br>Superhighway, a 30 minutes drive<br> from Nairobi City</P>
</div>
<div class="div2">
<ul>
  <br>
    <li><a href="#Home">    Home</a></li>
<br>
    <li><a href="#Amenities">Amenities</a></li>
<br>
    <li><a href="#Gallery">Gallery</a></li>
<br>
    <li><a href="#Rooms">Our Rooms</a></li>
<br>
</ul>
</div>

<div class="div2">
  <img src="mpesa.png" width="70px" >
<br>
  <img src="visa.png" width="70px">
  <br>
  <img src="mastercard.png" width="70px">
  <br>
  <img src="paypal.jpg" width="70px">
  <br>
  <img src="american express.png" width="70px">
</div>
<div class="div2">
<form>
<label for="fname">Enter Email</label>
    <input type="text"  name="email">

<br><br>
  <input type="submit" value="Subscribe">
</form>
</div>
    


<footer class="footer"><p style="text-align:center;"> &copy;<?php echo date("Y");?> Grand Hotel Kenya.  All Rights Reserved</p></footer>
<script type="text/javascript" src="js/jquery"></script>
<script type="text/javascript">
  $test=$(document);
  alert($test.width());
</script>
</body>


</html>