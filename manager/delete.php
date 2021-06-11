<?php
session_start();
include("server.php");
?>
<?php
if(isset($_GET['Del']))
{
    $staffid = $_GET['Del'];
    $query = " delete from staff where staffid = '".$staffid."'";
    $result = mysqli_query($db,$query);
    if($result)
    {
        header("location:staff.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:staff.php");
}
?>