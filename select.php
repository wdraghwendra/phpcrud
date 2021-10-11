<?php
/* Include your connection file  */
require_once('connect.php');

/*  Write a SQL that pick all records of your my sql table */
$sql = "SELECT * FROM `tbl_contact` WHERE 1=1";

/*  Run sql with yout database connection variable  */
$result = mysqli_query($con, $sql);

/* get total numbers of records */
$totalitems = mysqli_num_rows($result);

/* Go down on line number 36 for listing records code */

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container" style="width:1124px; margin:0 auto;">
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.raghwendra.com/blog/wp-content/uploads/2018/09/logo-rwsn.png" alt="" width="240" height="64">
        <h2>Contact us - View All Records</h2>
        <p class="lead">How to listing of inserted records of a database table using HTML, PHP?</p>
      </div>
	  
<?php
/* Check if records more then 0 */
if($totalitems > 0)
{
	/* Crate a heading row */
	$rowheading='<hr/><div class="row "  style="font-weight:bold">
	  <div class="col-md-1">
	  Sl. No.
	  </div>
	  <div class="col-md-2">
	  Name
	  </div>
	  <div class="col-md-3">
	  Email
	  </div>
	   <div class="col-md-2">
	  Phone
	  </div>
	  <div class="col-md-2">
	  Message
	  </div>
	   <div class="col-md-2">
	  Actiion
	  </div>
	  
	  </div>'; 
	  
	$rowstring=''; // for storing html plus database records
	/*  Run the while loop and make a string of your records  */
		while($row = mysqli_fetch_assoc($result)){
			/* Each row come with each single line of database  */
			/* Assign each database field records in a variable  */
			$id=$row['Id'];
			$fldName=$row['fldName'];
			$fldEmail=$row['fldEmail'];
			$fldPhone=$row['fldPhone'];
			$fldMessage=$row['fldMessage'];
			/* Now take row of html with 6 column */
			 $rowstring.='<hr/><div class="row">
	  <div class="col-md-1">'.$id.'</div>
	  <div class="col-md-2">'.$fldName.'</div>
	  <div class="col-md-3">'.$fldEmail.'</div>
	  <div class="col-md-2">'.$fldPhone.'</div>
	  <div class="col-md-2">'.$fldMessage.'</div>
	  <div class="col-md-2"><a href="update.php?id='.$id.'">Update</a> | <a href="delete.php?id='.$id.'">Delete</a></div>
	  </div>';
	}
	echo $rowheading.$rowstring; // concat row heading and data string and print.
}
else
{
	echo "There is no records in our database?";
	
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
