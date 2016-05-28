<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tes";

$tabel="";

$location = $_POST["name"];
// Create connection
$conn = mysql_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 
$db_selected = mysql_select_db("tes",$conn);

$sql = "SELECT * FROM hotel WHERE `city` = "."'$location'";
$result = mysql_query($sql, $conn);

$num_rows = mysql_num_rows($result);
	if($num_rows > 0){
    // output data of each row
	    while($row = mysql_fetch_object($result)) {
	        $id = $row->id;

			$name = $row->name;

			$city = $row->city;

			echo $tabel .= "
			<table>
				<tr>
				    <td>".$id."</td>
				
					<td>".$name."</td>
			
				    <td>".$city."</td>
				    <br>
				</tr>
			</table>
		  
		  ";
	    }
    }
    else{
    	echo "0 result";
    }

//$conn->close();
?>