

    <?php
	session_start();
	?>
<html>

<head>

<title>CVR LOGIN

</title>

<link rel="icon" href="cvrlogo.jpg" type="image/icon type">
<link rel="stylesheet" type="text/css" href="login.css">
<script>
function validatePassword() {
    var p = document.getElementById('pwd').value,
        
    if (p.length < 8) {
        alert("Your password must be at least 8 characters"); 
    }
    if (p.search(/[a-z]/i) < 0) {
        alert("Your password must contain at least one letter.");
    }
    if (p.search(/[0-9]/) < 0) {
        alert("Your password must contain at least one digit."); 
    }
    
    return true;
}
</script>
</head>

<body background="bg.jpg" style="background-repeat: no-repeat;
  background-size: 1500px 1000px; opacity: 10 " >
  
<center>
<h1>CAPTCHA-ALTERNATE SOLUTION FOR VISUALLY IMPAIRED</h1><br>
<a href="cvr.ac.in">
  <img src="cvrlogo.jpg" alt="CVR College of Engineering" height="90" width="90">

</img></a><br><br><br>



<form action="login.php" method = "post">

<div class="container">


<input type="text" placeholder="Enter Username" name="username"  required>
 
</div>
<div>
<input type="password" placeholder="Enter Password" name="password" id="pwd" required>
</div>
<div>
<style>/* Top left text */
.click {
  position: absolute;
  top: 370px;
  left: 600px;
}
h1{
  color: darkslateblue;
  
}

input[type=text] {
  
  border: 2px inset;
  border-radius: 4px;
}
input[type=password] {
  
  border: 2px inset;
  border-radius: 4px;
}

</style>
<img src="oooo.jpg" alt="Workplace" usemap="#workmap" width="200" height="179">
<h4 style="color: slateblue">Click on "Hello" to Submit</h4>
<map name="workmap">
  <area shape="rect" coords="5,40,35,50" alt="Computer" href="rrr.php">
</map>


<audio controls   accesskey="h">
  <?php	
		$capt = array("30", "10", "8"  , "11" );
		$num=$capt[rand(0,3)];
    $_SESSION['capp']=$num;
    if ($num == 30) {
      $_SESSION['capp'] = 'multiply with 10';
     }
     else if ($num == 11) {
      $_SESSION['capp'] = 'add with 10';
     }
     else if ($num == 10) {
       $_SESSION['capp'] = 'multiply with 5';
      }
     else if($num == 8) {
      $_SESSION['capp'] = 'add with 5';
     }
  
  echo'	<source src="'.$num.'.mp3" type="audio/mpeg" >
Your browser does not support the audio element.
</audio></div>
<input type="text" placeholder = "Enter Captcha" name="fname"><br>
<div>
   
<input name="submit" type="submit" value=" Login " onsubmit="pwd.validatePassword()"><br>
<a href="/pass/forgot_password.php" style="color: slateblue">Forgot Password</a><br>
<a href="/pass/signup.php" style="color: slateblue">New User?? Sign Up</a>

</div>
</form>

</center>

</body>

</html>';
?>
