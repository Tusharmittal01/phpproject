<?php
  //manage the session
include 'session.php';
?>
<html>
<head>
	<title>full news</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/head_bottom.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>

<body >
	<?php
	include '../../common/html/header.html' ;

	//$aid = $_GET['aid'];
	//echo $aid;
	session_start();
	$aid = $_SESSION['aid'];
	//echo $aid;
	?>
	<div class="formdes" id="page">
		<div class="subheader">	
			<?php
			  include 'selectSubHeader.php'; 
			?>
			
		</div>

		<!-- <div style = "width:700px; height:auto; background-color:#6D61A9; margin-left: auto;
		margin-right:auto; text-align:center;margin-top:50px;" id="cdiv"> -->
		<div class="formbackground>">
		<?php
		include 'createComment.php';
		?>
		<!-- design of comment button  -->
		<br>
		<form method="POST" action="fullnew.php">
			<input type = "text" class="textbox" name="comment" placeholder="Comment here"><br>
			<div style = "width:700px;height:40px;background-color:#9281D6;" id="aa">
            <input type = "submit" value = "Comment" class="sub" name="submit" >
			</div>
		</form>
	</div>
</div>
<?php 
include '../html/bottom.html';
?>
</body>

</html>