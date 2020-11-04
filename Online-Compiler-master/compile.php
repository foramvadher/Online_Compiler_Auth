<?php include 'header.php'; ?>
<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Output</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-1">
</div>
<div class="col-sm-8">






<?php

	$languageID=$_POST["language"];
		error_reporting(0);
	if($_FILES["file"]["name"]!="")
	{
		include "compilers/make.php";
	}
	else
	{
		switch($languageID)
			{
				case "c":
				{
					include("compilers/c.php");
					break;
				}
				case "cpp":
				{
					include("compilers/cpp.php");
					break;
				}

				case "cpp11":
				{
					include("compilers/cpp11.php");
					break;
				}
				case "java":
				{	
					include("compilers/java.php");
					break;
				}
				case "python2.7":
				{
					include("compilers/python27.php");
					break;
				}
				case "python3.2":
				{
					include("compilers/python32.php");
					break;
				}
			}
	}
	$sql = "call saveCode(?,?,?,?,?);";
	if($stmt = mysqli_prepare($link, $sql)){
		// Bind variables to the prepared statement as parameters
		mysqli_stmt_bind_param($stmt, "sssss", $param_username,$param_name,$param_lang,$param_text,$param_out);
		
		// Set parameters
		$param_username = $_SESSION["username"];
		$param_name = $_POST["Cname"];
		$param_lang = $languageID;
		$param_text = $_POST["code"];
		if(trim($error)=="")
		{
			$param_out =  $out;
		}
		else
		{
			$param_out = $error;
		}
		if(mysqli_stmt_execute($stmt)){
		}
		else{
			echo "Error:\n";
			print_r($stmt->error_list);
		}
	} else {
		
		echo "Oops! Something went wrong. Please try again later.";
	}
	// Close statement
	mysqli_stmt_close($stmt);
?>

</div>

<div class="col-sm-3">

</div>
</div>
</div>
</div>

<?php include 'footer.php' ?>
