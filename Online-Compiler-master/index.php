<?php include 'header.php'; ?>
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
  <input type="text" id="Cname" name="Cname"><br><br>
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>

  

</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" class="btn btn-success" value="Run Code"><br><br><br>


</form>

</div>
</div>
</div>

<?php include 'footer.php' ?>