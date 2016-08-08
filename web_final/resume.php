<!DOCTYPE html>
<html>
<head>
<TITLE> Resume </TITLE>

<meta charset=utf-8>
<link rel='stylesheet' media="screen" type='text/css' href='style.css' />

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
	
	var queryString = "?url=" + url ;
	
	ajaxRequest.open("GET", "commentinit.php" + queryString, true);
	
	ajaxRequest.send(null); 
}

 

</script>
</head>

<body onload="loadcom();">

<div id="header" style = font: 100px; align="center">
	<h2><br/><br/>This is my Resume</h2>
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
	
	
	<div id = "inerlink" style= height:1500px;>
	   <ul>
	      <li> <a href="resume.php#resume">Resume</a></li>
	      <li> <a href="resume.php#download">Download</a></li>
	      <li> <a href="resume.php#comments">Commments</a></li>
	   </ul>
	</div>

	
	
<div id="content" style= height:1500px;>
	<div id ="resume" >
	<h2>Resume</h2>
	this is the sample resume <br/>
	<br>
	<center><b>Hyung Jin Kim</b><br/>
	1234 alba blvd<br/>
	Los Angeles, California, 90020<br/>
	E- mail: 1234@hotmail.com</center>

	<br>
	<b>PROFESSIONAL OBJECTIVE:<br/> </b>
	To learn more about the various fields in computer and working environment in real life.<br/>
	Also base on the experiences, I want to find the field that I want to study for my future.<br/>

	<br>
	<b>SUMMARY OF QUALIFICATIONS</b><br/>
	<ul>
		<li>Two years of JAVA experience</li>
		<li>Capable of agent designing</li>
		<li>One year of C++ experience</li>
		<li>Capable of object oriented programming</li>
		<li>Various Data Structures</li>
		<li>Have experience in group projects one year of group project</li>
		<li>Capable of scheduling the task in order to finish it on time</li>
	</ul>
	<br>
	<b>ACTIVITES</b><br/>
	<ul>
	<li>Working in a group for the USC iCampus Project developing web, android, apple app for USC                      -- current</li>
	<li>Was a member of Alpha Gama Sigma Honor Society at Pasadena City College.</li>
	</ul>
	<br/>
	<b>PERTINENT SKILLS</b><br/>
	<ul>
		<li>Group project</li>
		<li>Able to communicate with each other and work as a group (factory project)</li>
		<li>Multi-threaded programing(agent programing)</li>
		<li>Data structures</li>
		<li>Learned data structures</li>
		<li>Time management</li>
		<li>Never had late submission problem in the University</li>
	</ul>
	<br/>
	<b>SPECIAL COMPETENCIES</b><br/>
	<ul>
		<li>Write, speak, read Korean fluently</li>
	</ul>
	</div>
	<hr>
<br/>
	<div id="download">
		<h3>Download</h3>
		Download the resume through this link.<br/>
		<a href="download.php">Download resume(PDF)</a>
        <br/>
		<br/>
		<br/>
		
	</div
	
	<hr>
	<br/>
	
	<div id="comments">
	<h3>Write your comments here. </h3><br/> 
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