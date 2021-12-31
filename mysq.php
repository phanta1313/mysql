<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<style>
    table{
        border-collapse: collapse;
        width: 100%;
        color: red;
        font-size: 25px;
        text-align: center;


    }
    th{
        background-color: black;
        color: white;
    }
    tr: nth-child(even) {backgound-color: yellow    }
</style>

</table>
</body>
</html>
