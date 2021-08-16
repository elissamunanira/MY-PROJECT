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

td, th {
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
<th>student_id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>password</th>
<th>level</th>
<th>created_at</th>

</tr>
<?php
include('usercon.php');

$sql = "SELECT * FROM agent";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)  {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["agent_id"]. "</td><td>" . $row["FNAME"] . "</td><td>"
. $row["LNAME"]. "</td><td>". $row["email"]."</td><td>". $row["password"]. "</td><td>" . $row["TELNO"]. "</td><td>" . $row["admin_id"]. "</td></tr>"  ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>
