<!DOCTYPE html>
<html>
<head>
<TITLE> Projects </TITLE>

<meta charset=utf-8>
<link rel='stylesheet' media="screen" type='text/css' href='style.css' />
<script type="text/javascript" src="jquery.min.js">// jquery file </script>
<script type="text/javascript">

	$(document).ready(function(){   
		$("img").width(400);   
		$("img").mouseover(function()   {      
		$(this).css("cursor","pointer");   
		});   
		$("img").toggle(function()     {
		$(this).animate({width: "800px"}, 'slow');
		}, function()     {
		$(this).animate({width: "400px"}, 'slow');   
	});
});
</script>
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
	<h2><br/><br/>Projects That I did in USC</h2>
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
	
	
	<div id = "inerlink" style= height:3840px;>
	   <ul>
	      <li> <a href="academ.php#csci200">CSCI200(Java Gui) Project</a></li>
	      <li> <a href="academ.php#csci201">CSCI201(Multi-Thread) Project</a></li>
	      <li> <a href="academ.php#factory">Factory Group Project</a></li>
	      <li> <a href="academ.php#csci351">CSCI351(Web) Project</a></li>
		  <li> <a href="academ.php#csci460">CSCI460(AI) Project</a></li>
		  <li> <a href="academ.php#comments">Comments about my projects</a></li>
	   </ul>
	</div>

	
	
<div id="content">
	<div id ="csci200" >
	<h2>CSCI200</h2>
	<br/>
	click the image in order to see a bigger image and reclick it to shrink<br/>
	<img src= "images/cs200game.jpg" alt="GUIgame" style = width:400px;>
	<p>
	 The assignemnt for the CSCI200 was to make an roleplaying game in JAVA<br/>
	 I made many monsters and items. <br/>
	 The user has to avoid the monster and kill them.<br/>
	 When the HP of the play drops to 0, the game ends.<br/>
	 Also there are traps that trap the player for few seconds.<br/>
	 <br/>
	 What I leaned : how to make an GUI based game using boundary checking <br/>
	 What was challenging: to make a good picture of the characters </p>
	</div>
	<hr>
<br/>
	<div id="csci201">
		<h2>CSCI201</h2>
		<br/>
		
		click the image in order to see a bigger image and reclick it to shrink<br/>
		<img src= "images/restaur.jpg" alt="retaurat" style = width:400px;>
		<p>
		The assignment was making an multi-threaded agent in Java.<br/>
		The gui was given and we had to design our own agents.<br/>
		<br/>
		What I leaned: how to code an agent and make an multi-threaded agent<br/>
		What was challenging: the concept of an agent was not easy and designing the resturant was not simple<br/>
		</p>
	</div>
	<hr>
<br/>
	<div id="factory">
		<h2>Factory</h2>
		<br/>
		
		click the image in order to see a bigger image and reclick it to shrink<br/>
		<img src= "images/Factory201.jpg" alt="factory1" style = width:400px;><br/>
		<img src= "images/Factory201-1.jpg" alt="factory-1" style = width:400px;><br/>
		<img src= "images/glass.jpg" alt="glassline" style = width:400px;><br/>
		<br/><br/>
		Here is a youtube demo for the glass line factory <br/>
			<a href="http://www.youtube.com/watch?v=s96_XpMGx_4&feature=youtu.be"> Glass Line Factory Demo</a>
		
		<p>
		This assignment was group assignemnt.<br/>
		The csci200 and csci201 class will work together to make an working fatory.<br/>
		There are two version of factory becuase one was from when I was in csci200 side and the other is in csci201<br/>
		THere were at lest 10 team members in each group.<br/>
		<br/>
		What I leaned: how to work in groups and lean how to debug others code<br/>
		What was challenging: to meet everyone in our group was hard.<br/>
		</p>
	</div>
	<hr>
<br/>
	<div id="csci351">
		<h2>CSCI351</h2>
		<br/>
		
		click the image in order to see a bigger image and reclick it to shrink<br/>
		<img src= "images/web.jpg" alt="web1" style = width:400px;>
		<p>
		The assignment1 was making an html page.<br/>
		Since it was my first time making an web page, it was challenging <br/>
		<br/>
		What I leaned: how make webpage <br/>
		What was challenging: to make the web page good was hard<br/>
		</p>
	</div>
	<hr>
<br/>
	<div id="csci460">
		<h2>CSCI460</h2>
		<br/>
		
		click the image in order to see a bigger image and reclick it to shrink<br/>
		<img src= "images/aiprolog.jpg" alt="prolog" style = width:400px;>
		<p>
		The assignment was making a prolog program<br/>
		I never programed in prolog and it was my first time using it<br/>
		The structure of the program was different from what I was used to however it was interesting<br/>
		<br/>
		What I leaned: programing an logic program <br/>
		What was challenging: getting used to it's syntax<br/>
		</p>
	</div>
	
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