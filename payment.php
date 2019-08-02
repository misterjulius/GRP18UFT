<?php
    $conn  = mysqli_connect('127.0.0.1','root','','recess');
    $file = dirname(__FILE__).'/payments.txt';
    $f = fopen($file, "w");
    $sql = mysqli_query($conn,"SELECT * FROM payments");

    while($row = mysqli_fetch_array($sql)){
       $pay_details = "Payment status=>".' '.'Name:'.$row['AgentName'].' '.'Position:'.' '.$row['Position'].' '.'Amount:'."Ugx".' '.$row['Amount'];
        $det = $pay_details."\n";
        echo $det;
        fwrite($f, $det);
    }
?>
