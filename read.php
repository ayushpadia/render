<?php

include_once ("includes/common.php");
if(!isset($_SESSION['id']))
{
    include_once ('includes/nav.php');
}
 else 
{
    include_once ('includes/navlogin.php');
}
?>
<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" type="text/css" href="includes/bootstrap.css">
        <script src="includes/bootstrap.bundle.min.js"></script>
        <script src="includes/bootstrap.min.js"></script>
    </head>
    <body>
        <hr>
        <div class="container">
            <div class="offset-md-2 col-md-8">
                <?php
                $blog_id=$_GET['blog_id'];
                $query1 = "SELECT * FROM blogs WHERE id='$blog_id'";
                $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
                $row1 = mysqli_fetch_array($result1);
                $u_id = $row1['user_id'];
                $query2 = "Select * FROM users WHERE id='$u_id'";
                $result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
                $row2 = mysqli_fetch_array($result2);
                $name = $row2['name'];
                ?>
                <blockquote>
                    <h1 class="font-italic""><?php echo $row1['title'];?> </h1>
                    <footer style="float: right;"><?php echo $row1['time'];?></footer>
                    <footer style="float: left;"><?php echo $name;?></footer>
                </blockquote>
                <br>
                <hr>
                <p class="lead my-3"> <?php echo $row1['message'];?></p>
            </div>
            
            <div
        </div>
    </body>
</html>

