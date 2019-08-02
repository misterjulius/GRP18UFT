<?php
$conn =  mysqli_connect('127.0.0.1','root','','recess');
$file = dirname(__FILE__).'/kampala.txt';
    $file_cont = explode("\n", file_get_contents($file));
  $data = file("/opt/lampp/htdocs/socket/kampala.txt");
  $last_line = $data[count($data)-1];
  echo $last_line[0];
  for($i = 0; $i<count($file_cont)-2;$i++){  
    $txt = explode(",",$file_cont[$i]);
    

  $s = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    if($last_line[0]==$s[0]||$last_line[0]==$s[1]||$last_line[0]==$s[3]||$last_line[0]==$s[4]||$last_line[0]==$s[5]||$last_line[0]==$s[6]||$last_line[0]==$s[7]||$last_line[0]==$s[8]||$last_line[0]==$s[9]||$last_line[0]==$s[10]||$last_line[0]==$s[11]||$last_line[0]==$s[12]||$last_line[0]==$s[13]||$last_line[0]==$s[14]||$last_line[0]==$s[15]||$last_line[0]==$s[16]||$last_line[0]==$s[17]||$last_line[0]==$s[18]||$last_line[0]==$s[19]||$last_line[0]==$s[20]||$last_line[0]==$s[21]||$last_line[0]==$s[22]||$last_line[0]==$s[23]||$last_line[0]==$s[24]||$last_line[0]==$s[25]||$last_line[0]==$s[26]){

    $sql = mysqli_query($conn, "SELECT * FROM agents WHERE Name LIKE '$txt[4]' AND signature LIKE '$last_line[0]'");
    if(!$sql){
        die(mysqli_error($conn));
    }
    $row = mysqli_fetch_array($sql);
       
            echo $row["Name"].$row["signature"];
    $chars = '0123456789';
    
    $random_id = 'KA'.substr(str_shuffle($chars),0,4);
    
    $insert = mysqli_query($conn, "INSERT INTO members(member_id,Name,Date,Gender,Recommender,District,Agent) values('$random_id','$txt[0]','$txt[1]','$txt[2]','$txt[3]','Kampala','$txt[4]')");
    file_put_contents($file,'');
    }else{
        $msg = "Invalid Signature"." for ".$txt[4]."\n";
        $f = fopen("filecheck_kampala.txt","a");
        fwrite($f,$msg);
        fclose($f);
    }
  }
?>
<?php

$conn =  mysqli_connect('127.0.0.1','root','','recess');
$file = dirname(__FILE__).'/wakiso.txt';
    $file_cont = explode("\n", file_get_contents($file));
  $data = file("/opt/lampp/htdocs/socket/wakiso.txt");
  $last_line = $data[count($data)-1];
  echo $last_line[0];
  for($i = 0; $i<count($file_cont)-2;$i++){  
    $txt = explode(",",$file_cont[$i]);
    

  $s = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    if($last_line[0]==$s[0]||$last_line[0]==$s[1]||$last_line[0]==$s[3]||$last_line[0]==$s[4]||$last_line[0]==$s[5]||$last_line[0]==$s[6]||$last_line[0]==$s[7]||$last_line[0]==$s[8]||$last_line[0]==$s[9]||$last_line[0]==$s[10]||$last_line[0]==$s[11]||$last_line[0]==$s[12]||$last_line[0]==$s[13]||$last_line[0]==$s[14]||$last_line[0]==$s[15]||$last_line[0]==$s[16]||$last_line[0]==$s[17]||$last_line[0]==$s[18]||$last_line[0]==$s[19]||$last_line[0]==$s[20]||$last_line[0]==$s[21]||$last_line[0]==$s[22]||$last_line[0]==$s[23]||$last_line[0]==$s[24]||$last_line[0]==$s[25]||$last_line[0]==$s[26]){

    $sql = mysqli_query($conn, "SELECT * FROM agents WHERE Name LIKE '$txt[4]' AND signature LIKE '$last_line[0]'");
    if(!$sql){
        die(mysqli_error($conn));
    }
    $row = mysqli_fetch_array($sql);
       
            echo $row["Name"].$row["signature"];
    $chars = '0123456789';
    
    $random_id = 'WA'.substr(str_shuffle($chars),0,4);
    
    $insert = mysqli_query($conn, "INSERT INTO members(member_id,Name,Date,Gender,Recommender,District,Agent) values('$random_id','$txt[0]','$txt[1]','$txt[2]','$txt[3]','Wakiso','$txt[4]')");
    file_put_contents($file,'');
    }else{
        $msg = "Invalid signature"." for ".$txt[4]."\n";
        $f = fopen("filecheck_wakiso.txt","a");
        fwrite($f,$msg);
        fclose($f);
    }
  }
?>
<?php

$conn =  mysqli_connect('127.0.0.1','root','','recess');
$file = dirname(__FILE__).'/luweero.txt';
    $file_cont = explode("\n", file_get_contents($file));
  $data = file("/opt/lampp/htdocs/socket/luweero.txt");
  $last_line = $data[count($data)-1];
  echo $last_line[0];
  for($i = 0; $i<count($file_cont)-2;$i++){  
    $txt = explode(",",$file_cont[$i]);
    

  $s = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    if($last_line[0]==$s[0]||$last_line[0]==$s[1]||$last_line[0]==$s[3]||$last_line[0]==$s[4]||$last_line[0]==$s[5]||$last_line[0]==$s[6]||$last_line[0]==$s[7]||$last_line[0]==$s[8]||$last_line[0]==$s[9]||$last_line[0]==$s[10]||$last_line[0]==$s[11]||$last_line[0]==$s[12]||$last_line[0]==$s[13]||$last_line[0]==$s[14]||$last_line[0]==$s[15]||$last_line[0]==$s[16]||$last_line[0]==$s[17]||$last_line[0]==$s[18]||$last_line[0]==$s[19]||$last_line[0]==$s[20]||$last_line[0]==$s[21]||$last_line[0]==$s[22]||$last_line[0]==$s[23]||$last_line[0]==$s[24]||$last_line[0]==$s[25]||$last_line[0]==$s[26]){

    $sql = mysqli_query($conn, "SELECT * FROM agents WHERE Name LIKE '$txt[4]' AND signature LIKE '$last_line[0]'");
    if(!$sql){
        die(mysqli_error($conn));
    }
    $row = mysqli_fetch_array($sql);
       
            echo $row["Name"].$row["signature"];
    $chars = '0123456789';
    
    $random_id = 'LU'.substr(str_shuffle($chars),0,4);
    
    $insert = mysqli_query($conn, "INSERT INTO members(member_id,Name,Date,Gender,Recommender,District,Agent) values('$random_id','$txt[0]','$txt[1]','$txt[2]','$txt[3]','Luweero','$txt[4]')");
    file_put_contents($file,'');
    }else{
        $msg = "Invalid signature"." for ".$txt[4]."\n";
        $f = fopen("filecheck_luweero.txt","a");
        fwrite($f,$msg);
        fclose($f);
    }
  }
?>
<?php

$conn =  mysqli_connect('127.0.0.1','root','','recess');
$file = dirname(__FILE__).'/masaka.txt';
    $file_cont = explode("\n", file_get_contents($file));
  $data = file("/opt/lampp/htdocs/socket/masaka.txt");
  $last_line = $data[count($data)-1];
  echo $last_line[0];
  for($i = 0; $i<count($file_cont)-2;$i++){  
    $txt = explode(",",$file_cont[$i]);
    

  $s = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    if($last_line[0]==$s[0]||$last_line[0]==$s[1]||$last_line[0]==$s[3]||$last_line[0]==$s[4]||$last_line[0]==$s[5]||$last_line[0]==$s[6]||$last_line[0]==$s[7]||$last_line[0]==$s[8]||$last_line[0]==$s[9]||$last_line[0]==$s[10]||$last_line[0]==$s[11]||$last_line[0]==$s[12]||$last_line[0]==$s[13]||$last_line[0]==$s[14]||$last_line[0]==$s[15]||$last_line[0]==$s[16]||$last_line[0]==$s[17]||$last_line[0]==$s[18]||$last_line[0]==$s[19]||$last_line[0]==$s[20]||$last_line[0]==$s[21]||$last_line[0]==$s[22]||$last_line[0]==$s[23]||$last_line[0]==$s[24]||$last_line[0]==$s[25]||$last_line[0]==$s[26]){

    $sql = mysqli_query($conn, "SELECT * FROM agents WHERE Name LIKE '$txt[4]' AND signature LIKE '$last_line[0]'");
    if(!$sql){
        die(mysqli_error($conn));
    }
    $row = mysqli_fetch_array($sql);
       
            echo $row["Name"].$row["signature"];
    $chars = '0123456789';
    
    $random_id = 'MA'.substr(str_shuffle($chars),0,4);
    
    $insert = mysqli_query($conn, "INSERT INTO members(member_id,Name,Date,Gender,Recommender,District,Agent) values('$random_id','$txt[0]','$txt[1]','$txt[2]','$txt[3]','Masaka','$txt[4]')");
    file_put_contents($file,'');
    }else{
        $msg = "Invalid signature"." for ".$txt[4]."\n";
        $f = fopen("filecheck_masaka.txt","a");
        fwrite($f,$msg);
        fclose($f);
    }
  }
?>
<?php

$conn =  mysqli_connect('127.0.0.1','root','','recess');
$file = dirname(__FILE__).'/gulu.txt';
    $file_cont = explode("\n", file_get_contents($file));
  $data = file("/opt/lampp/htdocs/socket/gulu.txt");
  $last_line = $data[count($data)-1];
  echo $last_line[0];
  for($i = 0; $i<count($file_cont)-2;$i++){  
    $txt = explode(",",$file_cont[$i]);
    

  $s = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    if($last_line[0]==$s[0]||$last_line[0]==$s[1]||$last_line[0]==$s[3]||$last_line[0]==$s[4]||$last_line[0]==$s[5]||$last_line[0]==$s[6]||$last_line[0]==$s[7]||$last_line[0]==$s[8]||$last_line[0]==$s[9]||$last_line[0]==$s[10]||$last_line[0]==$s[11]||$last_line[0]==$s[12]||$last_line[0]==$s[13]||$last_line[0]==$s[14]||$last_line[0]==$s[15]||$last_line[0]==$s[16]||$last_line[0]==$s[17]||$last_line[0]==$s[18]||$last_line[0]==$s[19]||$last_line[0]==$s[20]||$last_line[0]==$s[21]||$last_line[0]==$s[22]||$last_line[0]==$s[23]||$last_line[0]==$s[24]||$last_line[0]==$s[25]||$last_line[0]==$s[26]){

    $sql = mysqli_query($conn, "SELECT * FROM agents WHERE Name LIKE '$txt[4]' AND signature LIKE '$last_line[0]'");
    if(!$sql){
        die(mysqli_error($conn));
    }
    $row = mysqli_fetch_array($sql);
       
            echo $row["Name"].$row["signature"];
    $chars = '0123456789';
    
    $random_id = 'GU'.substr(str_shuffle($chars),0,4);
    
    $insert = mysqli_query($conn, "INSERT INTO members(member_id,Name,Date,Gender,Recommender,District,Agent) values('$random_id','$txt[0]','$txt[1]','$txt[2]','$txt[3]','Gulu','$txt[4]')");
    file_put_contents($file,'');
    }else{
        $msg = "Invalid signature"." for ".$txt[4]."\n";
        $f = fopen("filecheck_gulu.txt","a");
        fwrite($f,$msg);
        fclose($f);
    }
  }
?>
<?php

$conn =  mysqli_connect('127.0.0.1','root','','recess');
$file = dirname(__FILE__).'/soroti.txt';
    $file_cont = explode("\n", file_get_contents($file));
  $data = file("/opt/lampp/htdocs/socket/soroti.txt");
  $last_line = $data[count($data)-1];
  echo $last_line[0];
  for($i = 0; $i<count($file_cont)-2;$i++){  
    $txt = explode(",",$file_cont[$i]);
    

  $s = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    if($last_line[0]==$s[0]||$last_line[0]==$s[1]||$last_line[0]==$s[3]||$last_line[0]==$s[4]||$last_line[0]==$s[5]||$last_line[0]==$s[6]||$last_line[0]==$s[7]||$last_line[0]==$s[8]||$last_line[0]==$s[9]||$last_line[0]==$s[10]||$last_line[0]==$s[11]||$last_line[0]==$s[12]||$last_line[0]==$s[13]||$last_line[0]==$s[14]||$last_line[0]==$s[15]||$last_line[0]==$s[16]||$last_line[0]==$s[17]||$last_line[0]==$s[18]||$last_line[0]==$s[19]||$last_line[0]==$s[20]||$last_line[0]==$s[21]||$last_line[0]==$s[22]||$last_line[0]==$s[23]||$last_line[0]==$s[24]||$last_line[0]==$s[25]||$last_line[0]==$s[26]){

    $sql = mysqli_query($conn, "SELECT * FROM agents WHERE Name LIKE '$txt[4]' AND signature LIKE '$last_line[0]'");
    if(!$sql){
        die(mysqli_error($conn));
    }
    $row = mysqli_fetch_array($sql);
       
            echo $row["Name"].$row["signature"];
    $chars = '0123456789';
    
    $random_id = 'SO'.substr(str_shuffle($chars),0,4);
    
    $insert = mysqli_query($conn, "INSERT INTO members(member_id,Name,Date,Gender,Recommender,District,Agent) values('$random_id','$txt[0]','$txt[1]','$txt[2]','$txt[3]','Soroti','$txt[4]')");
    file_put_contents($file,'');
    }else{
        $msg = "Invalid signature"." for ".$txt[4]."\n";
        $f = fopen("filecheck_soroti.txt","a");
        fwrite($f,$msg);
        fclose($f);
    }
  }
?>
<?php

$conn =  mysqli_connect('127.0.0.1','root','','recess');
$file = dirname(__FILE__).'/mpiigi.txt';
    $file_cont = explode("\n", file_get_contents($file));
  $data = file("/opt/lampp/htdocs/socket/mpiigi.txt");
  $last_line = $data[count($data)-1];
  echo $last_line[0];
  for($i = 0; $i<count($file_cont)-2;$i++){  
    $txt = explode(",",$file_cont[$i]);
    

  $s = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    if($last_line[0]==$s[0]||$last_line[0]==$s[1]||$last_line[0]==$s[3]||$last_line[0]==$s[4]||$last_line[0]==$s[5]||$last_line[0]==$s[6]||$last_line[0]==$s[7]||$last_line[0]==$s[8]||$last_line[0]==$s[9]||$last_line[0]==$s[10]||$last_line[0]==$s[11]||$last_line[0]==$s[12]||$last_line[0]==$s[13]||$last_line[0]==$s[14]||$last_line[0]==$s[15]||$last_line[0]==$s[16]||$last_line[0]==$s[17]||$last_line[0]==$s[18]||$last_line[0]==$s[19]||$last_line[0]==$s[20]||$last_line[0]==$s[21]||$last_line[0]==$s[22]||$last_line[0]==$s[23]||$last_line[0]==$s[24]||$last_line[0]==$s[25]||$last_line[0]==$s[26]){

    $sql = mysqli_query($conn, "SELECT * FROM agents WHERE Name LIKE '$txt[4]' AND signature LIKE '$last_line[0]'");
    if(!$sql){
        die(mysqli_error($conn));
    }
    $row = mysqli_fetch_array($sql);
       
            echo $row["Name"].$row["signature"];
    $chars = '0123456789';
    
    $random_id = 'MP'.substr(str_shuffle($chars),0,4);
    
    $insert = mysqli_query($conn, "INSERT INTO members(member_id,Name,Date,Gender,Recommender,District,Agent) values('$random_id','$txt[0]','$txt[1]','$txt[2]','$txt[3]','Mpigi','$txt[4]')");
    file_put_contents($file,'');
    }else{
        $msg = "Invalid signature"." for ".$txt[4]."\n";
        $f = fopen("filecheck_mpigi.txt","a");
        fwrite($f,$msg);
        fclose($f);
    }
  }
?>