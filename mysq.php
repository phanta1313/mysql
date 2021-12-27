<table>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Surname</th>
    </tr>
<?php
$conn = mysqli_connect("localhost","root","","csc20b");
$sql = "SELECT * FROM  info";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>".$row['No'] .'</td><td>'. $row['Name'] .'</td><td>'. $row['Surname'] .'</td></tr>';

    }

}
?>

</table>
