<?php
session_start();
include("server.php");
?>
<?php
if(isset($_GET['Del']))
{
    $doornumber = $_GET['Del'];
    $query = " delete from reservation where doornumber = '".$doornumber."'";
    $result = mysqli_query($db,$query);
    if($result)
    {
        $add = $db->query("UPDATE room SET roomstatus = 'Empty' where doornumber='".$_SESSION["doornumber"]."'");
        header("location:reservations.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:reservations.php");
}
?>