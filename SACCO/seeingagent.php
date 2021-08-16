<?php
include('usercon.php');

?>
<html>
    <head>
        <title>  </title>
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th { background:skyblue;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
<tr>
<th>AGENT ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>EMAIL</th>
<th>PASSSWORD</th>
<th>TELEPHONE</th>
<th>AGENT ID</th>
<th colspan=3>ACTION </th>

</tr>
<?php
include('usercon.php');

$sql = "SELECT * FROM agent";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0)  {

while($row = $result->fetch_assoc()) {?>
  <tr>
        <td><?php echo $row['agent_id']; ?></td>
        <td><?php echo $row['FNAME']; ?></td>
        <td><?php echo $row['LNAME']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['TELEPHONE']; ?></td>
        <td><?php echo $row['admin_id']; ?></td>
        <td><a href="agentdetails.php?agent_id=<?php echo $row['agent_id']; ?>">View</a></td>
	    <td><a href="agentupdate.php?agent_id=<?php echo $row['agent_id']; ?>">Update</a></td>
	    <td><a href="agentdelete.php?agent_id=<?php echo $row['agent_id']; ?>">Delete</a></td>
        </tr>
        <?php
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>
