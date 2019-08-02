<?php
    $conn  = mysqli_connect('127.0.0.1','root','','recess');
    $file = dirname(__FILE__).'/members.txt';
    $f = fopen($file, "w");
    $sql = mysqli_query($conn,"SELECT * FROM members");

    while($row = mysqli_fetch_array($sql)){
        $info = $row['Name']." ".$row['Gender']." ".$row['District']." ".$row['Recommender']." ".$row['Date'];
        $det = $info."\n";
        echo $det;
        fwrite($f, $det);
    }
?>
