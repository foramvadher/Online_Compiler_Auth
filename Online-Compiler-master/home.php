<?php 
include 'header.php'; ?>

<br><br>
<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Your Codes</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>
<div>
<table class = "center">
  <tr>
    <th>Sr. No. </th>
    <th>Code Name</th>
  </tr>
<?php
$sql = "SELECT codeName FROM codes WHERE username = ?";

if($stmt = mysqli_prepare($link, $sql)){
	// Bind variables to the prepared statement as parameters
	mysqli_stmt_bind_param($stmt, "s", $param_username);
	
	// Set parameters
	$param_username = $_SESSION["username"];
	//echo $_SESSION["username"];
	// Attempt to execute the prepared statement
	if(mysqli_stmt_execute($stmt)){
		// Store result
		mysqli_stmt_store_result($stmt);
		
		// Check if username exists, if yes then verify password
		if(mysqli_stmt_num_rows($stmt) > 0){                    
			// Bind result variables
			mysqli_stmt_bind_result($stmt, $codeNames);
			$i=1;
			while(mysqli_stmt_fetch($stmt)){                    
				echo " <tr><td>{$i}</td><td><a href=\"compiler.php?codeName={$codeNames}\" >{$codeNames}</a></td></tr>";
				echo "<br>";
				$i++;
			}
		} else{
			// Display an error message if username doesn't exist
			echo "No files cretaed yet.";
		}
	} else{
		echo "Error:\n";
		print_r($stmt->error_list);
	}
}else {
	echo"Bad luck...";
}
	// Close statement
	mysqli_stmt_close($stmt);
?>
</table>	
</div>
<?php 	
include 'footer.php'; 
?>