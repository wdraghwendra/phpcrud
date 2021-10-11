<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.raghwendra.com/blog/wp-content/uploads/2018/09/logo-rwsn.png" alt="" width="240" height="64">
        <h2>Contact us form</h2>
        <p class="lead">Below is an example form How to connect HTML to database with MySQL using PHP? An example</p>
      </div>
	  
	  <?php
/* Include your connection file  */
require_once('connect.php');

if(isset($_GET['id']))
{
	
/*  Write a SQL that pick all records of your my sql table */
$sql = "SELECT * FROM `tbl_contact` WHERE Id=".$_GET['id'];

/*  Run sql with yout database connection variable  */
$result = mysqli_query($con, $sql);

/* get total numbers of records */
$totalitems = mysqli_num_rows($result);


if($totalitems > 0){
	/*  Get database records of selected Id   */
		$row = mysqli_fetch_assoc($result);
		/* Assign each database field records in a variable  */
		$id=$row['Id'];
		$fldName=$row['fldName'];
		$fldEmail=$row['fldEmail'];
		$fldPhone=$row['fldPhone'];
		$fldMessage=$row['fldMessage'];
			
	
	?>

	<fieldset>
	  
	  <form name="frmContact" class="needs-validation " method="post" action="update-submit.php">
		<p>
		  <label for="Name">Your Name </label><input type="hidden" name="selectedid" value="<?php echo $id;?>" />
		  <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" value="<?php echo $fldName;?>" required>
		  <div class="invalid-feedback">
					  Valid first name is required.
					</div>
		</p>
		<p>
		  <label for="email">Your Email</label>
		  <input type="text"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="Email" value="<?php echo $fldEmail;?>" required>
		</p>
		<p>
		  <label for="phone">Your Phone</label>
		  <input type="text"  class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="<?php echo $fldPhone;?>" required>
		</p>
		<p>
		  <label for="message">Message</label>
		  <textarea name="txtMessage" class="form-control"  id="txtMessage"  placeholder="Message" required><?php echo $fldMessage;?></textarea>
		</p>
		<p>&nbsp;</p>
		<p>
		  <input type="submit" name="Submit" id="Submit" value="Click me to Update"  class="btn btn-primary btn-lg btn-block">
		</p>
	  </form>
	</fieldset>
	<?php
	}
	else
	{
		echo "There is no records of slected id in our database?";
		
	}

}
else
{
	echo "You didn't provide any record id!";
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
