
<? 
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>

<html>
<head>
	<meta http-equiv="refresh" content="2; url=main.php">
	<meta name="keywords" content="automatic redirection">
</head>
<body  background ="images/woodenbg.jpg">
<br/>
<br/><br/><br/>
	<div align="center">
	<img border="0" src= "images/welcome_mat.jpg" alt="welcome" width="400" height="250" align="middle"  hspace="100" >
<br/><br/><br/>
	</div>	
	<div align="center">
	<font size = "10">
	Login was successful <br/>
	Welcome to my webpage.
	</font></div>
	<div align="center">
	&copy; Hyung-Jin Kim
	</div>
</body>
</html>
