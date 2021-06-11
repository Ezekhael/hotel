<?php
session_start();
include("server.php");
?>
<?php
if(isset($_GET['Del']))
{
    $doornumber = $_GET['Del'];
    $query = " delete from room where doornumber = '".$doornumber."'";
    $result = mysqli_query($db,$query);
    if($result)
    {
        header("location:room.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:room.php");
}
?>