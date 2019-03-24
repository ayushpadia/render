<?php
include_once ("includes/common.php");

/*$title = mysqli_real_escape_string($con,$_POST['title']);
$message = mysqli_real_escape_string($con,$_POST['message']);
$u_id = $_SESSION['id'];

echo $u_id;
echo "<br>".$title."<br>";
echo $message;
//$query1 = "INSERT INTO blogs(user_id,title,message,short) VALUES('$u_id','$title','$message','$message'";
//$result1= mysqli_query($con, $query1) or die(mysqli_error($con));

*/
extract($_POST);
if (isset($post))
{
    $u_id = $_SESSION['id'];
    $msg = "<pre>$blog</pre>";
    $query1 = "INSERT INTO blogs(user_id,title,message,short) VALUES('$u_id','$title','$msg','$msg')";
    $result1= mysqli_query($con, $query1) or die(mysqli_error($con));
    header ('location:user.php');
}