<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root","", "job");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$mname = mysqli_real_escape_string($link, $_REQUEST['mname']);
$enroll_no = mysqli_real_escape_string($link, $_REQUEST['enroll_no']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$contact_no= mysqli_real_escape_string($link, $_REQUEST['contact_no']);
$college = mysqli_real_escape_string($link, $_REQUEST['college']);
$courses = mysqli_real_escape_string($link, $_REQUEST['courses']);
$branch = mysqli_real_escape_string($link, $_REQUEST['branch']);
$sem = mysqli_real_escape_string($link, $_REQUEST['sem']);
$sql="INSERT INTO regi(lname,fname,jmname,enroll_no,email,contact_no,college,courses,branch,sem)values('$lname','$fname','$jmname','$enroll_no','$email','$contact_no','$college','$courses','$branch','$sem')";


if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
