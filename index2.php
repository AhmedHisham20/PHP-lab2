<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];

echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>status</th>";
    echo "</tr>";

foreach($students as $record ){
    if($record['status'] == 'CMS'){
        echo "<tr >";
        echo "<td style='color: red'>" . $record['name'] . "</td>";
        echo "<td style='color: red'>" . $record['email'] . "</td>";
        echo "<td style='color: red'>" . $record['status'] . "</td>";

    echo "</tr>";
        
    }else{
    echo "<tr>";
        echo "<td>" . $record['name'] . "</td>";
        echo "<td>" . $record['email'] . "</td>";
        echo "<td>" . $record['status'] . "</td>";
    echo "</tr>";
    }


}




echo "</table>";
?>
    
</body>
</html>
