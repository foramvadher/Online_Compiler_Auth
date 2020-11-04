<?php 
include 'header.php';
//if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_GET["codeName"])){
		$codeName = $_GET["codeName"];
		$sql = "SELECT codeLang,codeText,codeOut FROM codes WHERE username = ? and codeName = ? ;";
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ss", $param_username , $param_codeName);
			
			// Set parameters
			$param_username = $_SESSION["username"];
			$param_codeName = $codeName;
			//echo $_SESSION["username"];
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Store result
				mysqli_stmt_store_result($stmt);
				
				// Check if username exists, if yes then verify password
				if(mysqli_stmt_num_rows($stmt) > 0){                    
					// Bind result variables
					mysqli_stmt_bind_result($stmt,$Lang,$Text,$Out);
					if(mysqli_stmt_fetch($stmt)){                    
						
					}
				} else{
					// Display an error message if username doesn't exist
					echo "Error";
				}
			} else{
				echo "Error:\n";
				print_r($stmt->error_list);
			}
		}else {
			echo"Bad luck...";
		}
	}
//}
?>
<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Your Codes</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>
<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" name="f2" method="POST">
<label for="Cname">Name of Code:</label>
   <input type="text" id="Cname" name="Cname" value= "<?php echo $codeName; ?>" readonly><br><br>
<label for="lang">Language : </label>
	<input type="text" id="language" name="language" value= "<?php echo $Lang; ?>" readonly><br><br>
	<label name="Language"><?php echo $Lang; ?></label>

  

</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"><?php echo $Text; ?></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<label for="in">Your Last Output</label>
<textarea class="form-control" name="input" rows="10" cols="50"><?php echo $Out; ?></textarea><br><br>
<input type="submit" class="btn btn-success" value="Run Code"><br><br><br>


</form>

</div>
</div>
</div>

<?php include 'footer.php' ?>


