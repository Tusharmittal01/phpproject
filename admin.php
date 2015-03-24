<?php
  //manage the session
  include 'session.php';
?>
<html>
	<head>
	<title>Admin</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "reg.js"></script>
	<!-- script execute after java script is off done by browser -->
		<noscript>
			<style type = "text/css">
			#checkvalue {display:none;}
			</style>
			<div class = "noscriptmsg">
			You don't have javascript enabled.  Good luck with that.
			<br>
			Please Enable your java Sript.
			</div>
		</noscript>
	</head>
	<body>
	<!-- include header file -->
		<?php
		  include 'header.html';
		?>
        <!-- this subheader show the some link to forward next page and show logout button-->
		<div class = "formdes" id="page">
			<div class="subheader">
			<span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href="logout.php"><span class="logout">Logout</span></a>

		</div>

			<!-- form description -->

			<p id = "formid"><b>Please Create New  Account</b></p>

			<form id = "checkvalue"   action= "register.php" method = "POST" >
			<input type = "text"    placeholder = "Enter email"  id = "email" class = "textbox" name = "email">	<br>
			<input type = "text"     placeholder = "Enter username"   id = "uname" class = "textbox" name = "uname"><br>
			<input type = "password" placeholder = "Create password"  id = "pass" class = "textbox" name = "pass"><br>
			<input type = "text"     placeholder = "First name" class = "in"  id = "fname" name = "fname">
			<input type = "text"     placeholder = "Last name" class = "in1"  id = "lname" name = "lname"><br>
			<select class = "textbox" id = "utype" name = "utype">
			<option><span style = "font-family: cambria;">Select UserType</span></option>
			<option><span style = "font-family: cambria;">admin</span></option>
			<option><span style = "font-family: cambria;">student</span></option>
			<option><span style = "font-family: cambria;">teacher</span></option>
			</select>
			<input type = "checkbox" class = "checkboxid1">  <span id = "checkboxid"> keep me logged when using this computer </span><br>
			<input type = "checkbox" class = "checkboxid1" > <span id = "checkboxid"> Email me a weekly newslatter </span>
			<input type = "checkbox" class = "checkboxid" > <span id = "checkboxid"> Email me a daily newslatter </span>
			<?php 
				  echo '<div class = "loginerror">';
				  $reasons = array("password" => "Provide All The Field", "blank" => "You have left one or more fields blank.", "email" => "Email already used"); 
				  if ($_GET["loginFailed"]) 
				  echo $reasons[$_GET["reason"]];
				  echo '</div>'; 
			?>	
			<!-- code of the submit button and that div-->
			<div class = "submit">
			<input type = "submit" value = "Complete Sign-up" id = "sub" >
			<span class = "submittext" >&nbsp;   By Registering you confirm that you agree with our
			<br>
			<a href = "">Terms &amp Conditions</a>&nbsp; and &nbsp;<a href = "">Privacy policy</a>
			</span>
			</div>
			</form>
			</div>
		<!--include bottoom file  -->
		<?php
		  include 'bottom.html';
		?>
	</body>
</html>