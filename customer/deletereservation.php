<?php
session_start();
include("server.php");
?>
<?php
if(isset($_GET['Del']))
{
    $id = $_GET['Del'];
    $query = " update reservation set status = 'Cancelled' where id = '".$id."'";
    $result = mysqli_query($db,$query);
    if($result)
    {
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