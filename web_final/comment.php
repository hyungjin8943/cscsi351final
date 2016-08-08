<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "comment";
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);

	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$url = $_GET['url'];
$name = $_GET['name'];
$mess = $_GET['message'];
$time = $_GET['time'];
//insert the table comment 

$query = "INSERT INTO comments VALUES 	('$url','$name','$mess','$time')";
	mysql_query($query)or die(mysql_error());

	//build query
$query = "SELECT * FROM comments WHERE url = '$url'";

$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String
$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>Name</th>";
$display_string .= "<th>      </th>";
$display_string .= "<th>      </th>";
$display_string .= "<th>Commnet</th>";
$display_string .= "<th>      </th>";
$display_string .= "<th>      </th>";
$display_string .= "<th>time</th>";
$display_string .= "</tr>";

	// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
	$display_string .= "<tr>";
	$display_string .= "<td>$row[name]</td>";
	$display_string .= "<td>      </td>";
	$display_string .= "<td>      </td>";
	$display_string .= "<td>$row[comment]</td>";
	$display_string .= "<td>      </td>";
	$display_string .= "<td>      </td>";
	$display_string .= "<td>$row[time]</td>";
	$display_string .= "</tr>";
}
$display_string .= "</table>";
echo $display_string;
mysql_close();

?>
