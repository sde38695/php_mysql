
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <style>
 table{
    width: 50%;
    border-collapse: collapse:
 }
 tr,th,td{
    padding: 10px;
    text-align: left;
    border: 1px solid black;
 }
 th{
    background-color: #f2f2f2;
    color: black;
 }
    </style>
<table>
 <tr>
  <th>Phones</th>
  <th>In Stock</th>
  <th>Sold</th>
 </tr>

<?php
$phone = array(
    array("Iphone14", "10", 20),
   array("Iphone13", "10", 30),
    array("Iphone12", "10", 30),
    array("Iphone11", "10", 30),
);

for($row=0; $row<4; $row++){
    echo "<tr>";
    for($col=0; $col<3; $col++){
       echo "<td>". $phone[$row][$col]. "</td>";
    }
   echo "</tr>";
}
echo "</table>"
?>

</body>
</html>
