<?php
include('usercon.php');
$d="DELETE FROM agent WHERE agent_id=".$_GET['agent_id'];
$s=mysqli_query($con,$d);
if(!$s)
{echo"fail";}
else
{echo"agent deleted successfully";}


?>