<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="jujitsu_onlineregistrationCSS.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<header>
<nav>
<div id="nav1">
<a href="home.php"><input type="button" value="Home" class="nav_tags"/></a>
<a href="aboutus.php"><input type="button" value="About us" class="nav_tags"/></a>
<a href="onlineregistration.php"><input type="button" value="Online Registration" class="nav_tags"/></a>
<a href="contactus.php"><input type="button" value="Contact us" class="nav_tags"/></a>
</div>
</nav>
</header>
<br>
<div id="jujitsu_logo">
<img src="logo.jpg" alt="This is the logo"/>
</div>
<br>
	<div id="wrapper">
	<div id="header">
		<h1>Register</h1>
	</div>
	<div id="para">
		<p>Submit your details & we will revert back to you.</p>
	</div>
	<form name="myRegistrationForm" action="includes/register.inc.php" method="post" onchange="return checkpassword()">

		
		<input type="text" name="Firstname" placeholder="First Name">
		<input type="text" name="Lastname" placeholder="Last Name">
		
		<br>
		<br>
		<input type="email" name="email" required placeholder="Email">

		<br>
		<br>

		<input type="password"  id="p"  placeholder="Password" value=""/>
		<span id="messages" style="color: red;"></span>

		<br>
		<br>

		<input type="text" name="txt_pwd"  placeholder="Phone number"/>

		<br>
		<br>

		<input type="checkbox" name="AcceptTerms" value="i"><span id="span">I accept the Terms of Use & Privacy Policy.</span>
		<br>

		<br>
		
		<a href="registerbutton.php"><input type="button" value="RegisterNow"></button></a>
		
	</form>

	</div>

	<script type="text/javascript">

		function checkpassword() {
			var a = document.getElementById("p").value ;

			if (a == ""){
				alert("Please enter a password between 8 and 10 characters");
				return false ;

			}

			if (a.length < 8 ){
				alert("The password must be greater than 8 characters");
				return false ;
			}

			if (a.length > 10 ){
				alert("The password must be between 8 and 10 characters ");
				return false ;

			}



		}
		
	</script>



</body>
</html>