<?php
/* Include your connection file  */
require_once('connect.php');
/* Check if is set the post variable txtName  */
if(isset($_POST['txtName']))
{
/* Get the all form field post variables. */
$id = $_POST['selectedid'];
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

/* Update your posted data in your database - insert SQL code. */

$sql = "UPDATE `tbl_contact` SET `fldName` = '$txtName', `fldEmail` = '$txtEmail', `fldPhone` = '$txtPhone', `fldMessage` = '$txtMessage' WHERE `tbl_contact`.`Id` = ".$id;


/* Run insert query in database.  */
$rs = mysqli_query($con, $sql);

/* Check records is updated  or not. */
if($rs)
{
	echo "Contact Records updated";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
<br/>
<a href="select.php">Go to list page</a>