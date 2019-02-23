<!DOCTYPE html>
<html>
<head>
	<title>Honey Bday</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Faster+One|Gloria+Hallelujah|Merienda|Oleo+Script:700|Yesteryear" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bday.css">
	<script language="javascript" type="text/javascript">
		
	</script>
	<style type="text/css">
.yogi {

	background-image: url("yogi.gif");
	background-repeat: no-repeat;
	background-position-x: center;
	background-position-y: center;
	background-attachment:fixed;
	
	background-size: cover;
	/* background-position-x: 100%;
	background-position-y: 100%; */

	padding-top: 4%;
	padding-bottom: 5%;
	padding-left: auto;
	padding-right: 2%; 
	margin-top: 2%;
	margin-right: 2%;
	margin-bottom:2%;
	margin-left: 2%;
}
.square1 {
	width: 50%;
	background-color: #AFEEEE ;
        background: #AFEEEE ;
	padding-left: 21%;
	padding-right: 21%;
	margin-right: 2%;
	margin-left: 2%;
	padding-top: 2%;
	padding-bottom: 3%;
	float: none;
	color: #DC143C;
 
	
}
.square2 {
	width: 50%;
	background-color:  #1E90FF  ; 
       background:  #1E90FF ;
	padding-left: 21%;
	padding-right: 21%;
	margin-right: 2%;
	margin-left: 2%;
	padding-top: 2%;
	padding-bottom: 3%;
	float: none;
	
	
}
	h1 {
  animation-duration: 4s;
  animation-name: slidein;
  animation-iteration-count: infinite;
  animation-direction: alternate;
font-family: 'Oleo Script', cursive;
}
#ddisp {font-family: 'Merienda', cursive; }
@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%; 
  }
 75% {
    font-size: 300%;
    margin-left: 25%;
    width: 150%;
  }
  to {
    margin-left: 0%;
    width: 100%;
  }
}
		.styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(0, 220, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: rgba(220, 0, 0, 1);;
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}
.square2:hover {
    background-color: #00FFFF;
}
.square1:hover {
    background-color: #90EE90;
}
input[type="text"] {
  
    background-color: #E0FFFF;
    font-family: 'Gloria Hallelujah', cursive;
color: #DC143C;
}

#s1 {
font-family: 'Gloria Hallelujah', cursive;
color: #FF69B4;
  }
  #s2 {
    font-family: 'Merienda', cursive;
color: #ADFF2F;
  }


	</style>
</head>
<body class="yogi">



<div class="square2 " style="border-radius: 50%;">
			<br><br>
				<h2 style="border-radius: 50%;">Write Your Wish  </h2><br>
				<form action="store2.php" name="wish"  method="POST">
					<input type="text" name="name" style="width:100%; height:15px"; maxlength="20" placeholder="    Your Name" required />
					<input type="text" name="message" style="width:100%; height:100px"; maxlength="40" placeholder="    Write Your Message / Reply      --        MAX 40 characters " required/><br><br>
					<center><input type="submit" value="SEND" class="styled" /></center>
					
				</form>
</div>
<br><br>
<div class="head">
  <marquee behavior="scroll" direction="left">
    <strong><h1 style="color: blue;" >Happy Birthday Honey !! &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<spam id="s1">Happy Birthday Honey !!</spam>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<spam id="s2">Happy Birthday Honey !!</spam>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<spam id="s1">Happy Birthday honey !!</spam>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Happy Birthday Honey !! </h1></strong>
  </marquee>
</div>
<br><br>
<div class="square1" id="ddisp" style="border-radius: 2%;">
		<h2 style="border-radius: 50%;">Wishes Display Board </h2>
		
		<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, message FROM messagehoney";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><strong>". $row["name"]. "  :- <br></strong> " ;
echo  $row["message"] ;
echo "<hr>";

    }
} else {
    echo "0 Message Available";
}

mysqli_close($conn);

?>
				
</div>
		





</body>
</html>