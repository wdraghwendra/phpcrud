<?php
/* Include your connection file  */
require_once('connect.php');
/* Check if is set the post variable txtName  */
if(isset($_GET['id']))
{
	/* Update your posted data in your database - insert SQL code. */

	$sql = "DELETE FROM `tbl_contact` WHERE `tbl_contact`.`Id` =  ".$_GET['id'];

	/* Run insert query in database.  */
	$rs = mysqli_query($con, $sql);

	/* Check records is updated  or not. */
	if($rs)
	{
		echo "Contact Records Deleted";
	}
	
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
<br/>
<a href="select.php">Go to list page</a>