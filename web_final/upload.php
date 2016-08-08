
<html>
<head>
<title>upload image</title>
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
<?php

if(isset($_POST['submit'])) {
  // get filename
  $image = $_FILES['upload']['name'];
 
  // the folder that will have all the stored image
  $folder = "images/"; 
 
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
</script>
</head>

<body>

<form  name="imgUpload" action="" method="post" enctype="multipart/form-data">
<input type="file" name="upload" id="upload" />
<input type="submit" name="submit" value="Upload" onClick="return checkExt()" />
</form>


<?php 
$files = glob("images/*.*"); 
for ($i=0; $i<count($files); $i++) 
{ 
    $num = $files[$i]; 
    echo  '&nbsp;<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;&nbsp;"; 
    }
?> 



</body>
</html>