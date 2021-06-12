<?php
session_start();
include("server.php");
?>
<?php
if(isset($_GET['Del']))
{
    $startdate = $_GET['Del'];
    $enddate = $_GET['enddate'];
    $query = " delete from report where startdate = '".$startdate."' and enddate = '".$enddate."'";
    $result = mysqli_query($db,$query);
    if($result)
    {
        header("location:reports.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:reports.php");
}
?>