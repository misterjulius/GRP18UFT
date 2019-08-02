@extends('layouts.admin')

@section('content')


<?php 
 $conn = mysqli_connect("localhost", "root","", "recess");


 /* $num = "SELECT * as 'agentid' from agents GROUP BY District HAVING COUNT(*)>=1";
 */
 
 
 /* $RAD = "SELECT District,Count(District) as boom from agents GROUP BY District ORDER BY boom DESC"; 
 $jul =mysqli_query($conn, $RAD);
 $red = mysqli_fetch_array($jul);

 $kar=$red['boom'];
 echo $kar;
       
     
       

//$red1 = mysqli_fetch_array($jul1);
       // $groupall =mysqli_fetch_array($test1);
        
       // $allagents = $groupall['agentid'];
                  
       
                //  $comp->total
                $RAD1 = "SELECT * FROM agents WHERE District='wakiso'";

                $jul1 =mysqli_query($conn, $RAD1);
                echo "<table border=2><tr><th>NAME</th>
                <th>Position</th>
                <th>District</th></tr>"; 
                while($red1 = mysqli_fetch_array($jul1)){
                 
                  echo "<tr>";
                  echo "<td>".$red1['Name']."</td>";
                  echo "<td>".$red1['Position']."</td>";
                  echo "<td>".$red1['District']."</td>";
                  echo "</tr>";
                  
               }
               echo "</table>";
                               
*/
?>
<a href="#" class="small-box-footer" data-toggle="modal" data-target="#moda">View members</a>
<div class="modal modal-default fade" id="moda">


              <table style="color:yellow;border:2px;">
                <thead>
                <tr>
                 
                  <th>Name</th>
                  <th>Position</th>
                  <th>District</th>
                 
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                $conn = mysqli_connect("localhost", "root","", "recess");
   
        $RAD = "SELECT District,Count(District) as boom from members GROUP BY District ORDER BY boom DESC"; 
        $jul = mysqli_query($conn, $RAD);
        $red = mysqli_fetch_array($jul);
        $kar=$red['boom'];
   
        $RAD1 = "SELECT District as boom1 FROM members GROUP BY District HAVING COUNT(*)='$kar'";
        $jul1 =mysqli_query($conn, $RAD1);
        $red1 = mysqli_fetch_array($jul1);
        $topdistrict = $red1['boom1'];

        $lowerDist = "SELECT * FROM agents where District !='$topdistrict'";
        $low =mysqli_query($conn, $lowerDist);
        //$categ=mysqli_fetch_array($low);
         
   
                
                while($hurr = mysqli_fetch_array($low)){
                  echo '<td>'.$hurr['Name'].'</td>';
                  echo '<td>'.$hurr['Position'].'</td>';
                  echo '<td>'.$hurr['District'].'</td>';
                echo '</tr>';
                }
                 
                 ?>
                </tbody>
                
              </table>
            </div>
            </div>
            </div>
@endsection








