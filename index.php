<?php

$conserver = 'localhost'; $conusername = 'root'; $conpassword = ''; $dbname = 'ob';
$connectnow = mysqli_connect($conserver, $conusername, $conpassword, $dbname);

?>




<!doctype html>
<html>
<head>
<title>O BOUNCE TECHNOLOGY</title>
<style>

 ul {
    list-style-type: none;
    margin: 0;
    padding:0;
    overflow: hidden;
   
	width:100%
}

li {
    float: center;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 10px;
    text-decoration: none;
	width:70px;
}

li a:hover {
    background-color: green;
}
div  {
      color:white;
	 
	  padding:10px;
	
	 
	
	  }
</style>	 
</head>
<body>	


<div style="font-family:Andalus; text-align:center; color:blue; float:left"><img src="bb logo.png"></div> 
<h1 style="font-family:Bookman Old Style; font-size:120%">WELCOME to <span style='color:green;'><strong>O'BOUNCE TECHNOLOGY</span> LEARNING INSTITUE</p> </strong> <br><br></h1>

	 <div>
	 
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="">Projects</a></li>
<li><a href="">Company</a></li>
<li><a href="">Request a Quote</a></li>
<li><a href="">News</a></li>
<li><a href="">Shop</a></li>
</ul>
	 </div>
	 
	 

	
		 
	  <h1><div style="text-align:center;  color: green;"> Returning Student Login Details </div> </h1> <br>


<h2>Sign In</h2><br></h2>
<?php
if (isset($_POST['uname'])){
    $uname = $_POST['uname'];
    $pword= $_POST['pword'];
   
   
    echo '<p>Your username is '.$uname.'</p>';
    echo '<p>Your password is '.$pword.'</p>';
	
	
	
	$login = "SELECT * FROM classwork WHERE EMAIL='$uname' and PASSWORD=md5('$pword')";
	$runsql = mysqli_query($connectnow, $login);
	
	$checkme = mysqli_num_rows($runsql);
	
	if ($checkme > 0){
		echo '<p>Welcome back '.$uname.', you have been successfully logged in.</p>';
		header("location: home.php");
	} else {
		echo '<h1>Incorrect login details.</h1> ';
		
	}
    }
 
?>

<form name="login" method="POST" action="">
<fieldset>
<legend>Login Now!</legend>
<p>Username: <input name="uname" placeholder="Username here" style="padding:8px; "></p>
<p>Password: <input name="pword" type="password" style="padding:8px;"></p>
<p><button type="submit"  style="padding:8px; border:1px solid #444;">Submit</button></p>
</fieldset>
</form>
 

<?php

if(isset ($_POST['regnow'])){

 $fname=    $_POST['fname'];
 $lastname= $_POST['lname'];
 $gender=   $_POST['gender'];
 $email=    $_POST['email'];
 $address=  $_POST['address'];
 $password= $_POST['pword'];
 
 $rpassword = md5($password);
 
 echo '<p> Welcome to O\'Bounce Techologies\'s Learning  Institue '.$fname.', We will add you to our database now  you will login very soon with the details below';
 
 $sql = "INSERT INTO `ob`.`classwork` (FIRSTNAME, LASTNAME, GENDER, EMAIL, ADDRESS, PASSWORD) values ('$fname', '$lastname', '$gender', '$email', '$address', '$rpassword')";
 $runsql = mysqli_query($connectnow, $sql) or die (mysqli_error($connectnow));


if ($runsql){
	echo "<p>Congratulations ".$fname." ".$lastname."! You're now a student of O'Bounce Computer Institute and can now login with the details below;";
} 
echo '
<p>Username: '.$email.'</p>
<p>Password:'.$password.'</p>

</p>';

}

?>


<h1><div style= "text-align:center; color:green;"> New Student Registration </div></h1> <br>
<br>

<h2 style="color:blue;">Sign Up</h2><br>





<form method='post' action=''>
<fieldset> 
<legend>Application Form</legend>
<p>Firstname: <input name="fname" placeholder="Firstname here" style="padding:8px; "></p>
<p>Lastname: <input name="lname" style="padding:8px;"></p>
<p>Gender: <input name="gender" style="padding:8px;"></p>
<p>E-Mail: <input name="email" type="email" required style="padding:8px;"></p>
<p>Address: <input name="address" style="padding:8px;"></p>
<p>Password: <input name="pword" type="password" style="padding:8px;"></p>
<p><button type="submit" name="regnow" style="padding:8px; border:1px solid #444;">Submit</button></p>
	<br> 
	 
	 </fieldset>
	 
	 </form>
	 
	 </body>