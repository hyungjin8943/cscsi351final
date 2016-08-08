<!DOCTYPE html>
<html>
<head>
<TITLE> Gallery </TITLE>

<meta charset=utf-8>
<link rel='stylesheet' media="screen" type='text/css' href='style.css' />
<script type="text/javascript" src="jquery.min.js"></script>
<style type="text/css">
div#resume{font-family:"Times New Roman",Times,serif;}

</style>

<script language="javascript" type="text/javascript">

//Browser Support Code
function addcom(){

	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById('commentdiv');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}
	var url = document.location.href;
	var name = document.getElementById('name').value;
	var message = document.getElementById('message').value;
	
	var currentTime = new Date();
	var month = currentTime.getMonth() + 1;
	var day = currentTime.getDate();
	var year = currentTime.getFullYear();
	var hours = currentTime.getHours();
	var minutes = currentTime.getMinutes();
	if (minutes < 10){
	minutes = "0" + minutes;
	}
	
	var time= hours + ":" + minutes+" "+ month + "/" + day + "/" + year;
	
	var queryString = "?url=" + url + "&name=" + name + "&message=" + message+ "&time=" +time;
	
	ajaxRequest.open("GET", "comment.php" + queryString, true);
	
	ajaxRequest.send(null); 
}
function loadcom(){

	var ajaxRequest;  
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// error
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById('commentdiv');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}
	var url = document.location.href;
	
	var queryString = "?url=" + url ;
	
	ajaxRequest.open("GET", "commentinit.php" + queryString, true);
	
	ajaxRequest.send(null); 
}

 

</script>

<script type="text/javascript">
  function checkExt(){
    var filename = document.getElementById('upload').value;
    var filelength = parseInt(filename.length) - 3;
    var fextension = filename.substring(filelength,filelength + 3);
  
    // Checking for file extenstion
    if (fextension.toLowerCase() != "png" && fext.toLowerCase() != "gif" && fextension.toLowerCase() != "jpg" ) {
      alert ("You can only upload jpg, gif, png images.");
      return false;
    } else {
      return true;
    }
}
</script>
<script type="text/javascript">

	$(document).ready(function(){

		$("#hideAll").click(function () {
			$("p").hide(3000);
		});

		$("#leftShift").click(function () {
			$("img").first().appendTo(".pic");
		});

		$("#rightShift").click(function () {
			$("img").last().prependTo(".pic");
		});

		$("#showAll").click(function (){
			$("p").show(2000, function showNext() {
			 $(this).next("p").show(2000, showNext);
			  	});
		});

	});


	</script>
<?php

if(isset($_POST['submit'])) {
  // get filename
  $image = $_FILES['upload']['name'];
 
  // the folder that will have all the stored image
  $folder = "user_uploaded_images/"; 
 
  // image checking if exist or the input field is not empty
  if($image) { 
    // creating a filename
    $filename = $folder . $image; 
 
    // uploading image
    $copied = copy($_FILES['upload']['tmp_name'], $filename); 
 
    // checking if upload succesfull
    if (!$copied) { 
		echo("unable to save the file");
    }
  }
}
?>

</head>

<body onload="loadcom();">

<div id="header" style = font: 100px; align="center">
	<h2><br/><br/>Welcom to the Gallery</h2>
	</div>
	

	 <div id="navigation">
			<ul>
            	<li><a href="main.php">Home</a></li>
                <li><a href="intro.php">Intro</a></li>
				<li><a href="resume.php">resume</a></li>
				<li><a href="academ.php">Project</a></li>
				<li><a href="photo.php">Photo</a><li>
			
			</ul>
	</div>    
	
	
	<div id = "inerlink" style= height:1570px;>
	   <ul>
	      <li> <a href="photo.php#up">Upload picture</a></li>
	      <li> <a href="photo.php#pi">Pictures</a></li>
	      <li> <a href="photo.php#comments">Write Commments</a></li>
	   </ul>
	</div>

	
	
<div id="content">
	<div id="up">
	<h2>Upload file </h2>	
	<p>
	You can upload the file by clicking the button<br/>
	You can only upload jpg, gif, png images<br/>
	</p>
	<form  name="imgUpload" action="" method="post" enctype="multipart/form-data">
	<input type="file" name="upload" id="upload" />
	<input type="submit" name="submit" value="Upload" onClick="return checkExt()" />
	</form>
	</div>
	
	<hr>
	<div id="pi">
	<h2>Display Picture </h2>
	shift the image left and right by clicking the button <br/>
	<button id="leftShift"> Left Shift</button>
	<button id="rightShift"> Right Shift</button>
	
	
	<p class ="pic">
	<?php 
	$files = glob("user_uploaded_images/*.*"); 
	for ($i=0; $i<count($files); $i++) 
	{ 
		$num = $files[$i]; 
		echo   '<img src="'.$num.'" alt="image"  width="200" height="200"  align="middle">';
		
	}
	?> 
	</p>
	
	<hr>
	<br/>
	</div>
	
	<div id="comments">
	<h2>Write your comments here. </h2><br/> 
	<form name='myForm'>
	User name: <input type='text' id='name' /> <br />
	<textarea id="message" name="message" cols="40" rows="10"></textarea> <br/>
	<input type='button' onclick='addcom()' value='add comment' />
	</form>
	
	<hr>
	<br/>
	<div id='commentdiv'>Your result will display here</div>
	</div>	
</div>



</body>
</html>