<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root',');

mysqli_select_db($con,"leagues");
$sql="SELECT * FROM worldcup2k19";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Teams</th>    
<th>Matches</th>
<th>Won</th>
<th>Lost</th>
<th>Tied</th>
<th>NR</th>
<th>Points</th>
<th>NRR</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Teams'] . "</td>";
    echo "<td>" . $row['Matches'] . "</td>";
    echo "<td>" . $row['Won'] . "</td>";
    echo "<td>" . $row['Lost'] . "</td>";
    echo "<td>" . $row['Tied'] . "</td>";
    echo "<td>" . $row['NR'] . "</td>";
    echo "<td>" . $row['Points'] . "</td>";
    echo "<td>" . $row['NRR'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>