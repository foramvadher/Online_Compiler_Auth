<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../AuthService/config.php";
?>

<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js" </script>
<style>
table, th, td {
  border: 1px solid black;
  padding:10px
}
table.center {
  margin-left: auto;
  margin-right: auto;
  width : 60%;
}
</style>







</head>
<body>
<div class="main">

<div class="row">
  <div class="col-sm-12">
  <nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="index.php">Online Compiler</a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
    </div>
   <div class="collapse navbar-collapse navbar-menubuilder">
    <ul class="nav navbar-nav">
      <li class="space"><a href="index.php"><i class="fa fa-code ispace"></i>New Code</a></li>
      <li class="space"><a href="home.php"><i class="fa fa-archive ispace"></i>You Codes</a></li>
      <!--<li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li>-->
      <li class="space"><a href="#"><i class="fa fa-check-square ispace"></i>Debug</a></li>
      
    </ul>
    </div>
	<div align="right">
	Logged in as : <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
	</div>
</nav>
</div>
</div>




</div>


