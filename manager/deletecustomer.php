<?php
session_start();
include("server.php");
?>
<?php
if(isset($_GET['Del']))
{
    $email = $_GET['Del'];
    $query = " delete from user where email = '".$email."'";
    $result = mysqli_query($db,$query);
    if($result)
    {
        header("location:customers.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:customers.php");
}
?>