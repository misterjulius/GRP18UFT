@extends('layouts.admin')

@section('content')
<?php 
$conn = mysqli_connect("localhost", "root","", "recess");
                $RAD = "SELECT District,Count(District) as boom from members GROUP BY District ORDER BY boom DESC"; 
                $jul =mysqli_query($conn, $RAD);
                $red = mysqli_fetch_array($jul);
                $kar=$red['boom'];
           
                $RAD1 = "SELECT District as boom1 FROM members GROUP BY District HAVING COUNT(*)='$kar'";
                $jul1 =mysqli_query($conn, $RAD1);
                $red1 = mysqli_fetch_array($jul1);
                $topdistrict = $red1['boom1'];

                $GenralPos = "SELECT Position from agents";
                $admin = mysqli_query($conn, $GenralPos);
                $catadmin =mysqli_fetch_array($admin);
                $Posadd =$catadmin['Position'];
                
                $entireAmount = "SELECT SUM(Amount) as 'summation' from funds";
                $money =mysqli_query($conn, $entireAmount);
                $category8 =mysqli_fetch_array($money);
                $treasury = $category8['summation'];
                
                $avAmount = $treasury - 2000000;

        $lowerDist = "SELECT * FROM payments where Position like '%t(%'";
        $low =mysqli_query($conn, $lowerDist);
        $hurr = mysqli_fetch_array($low); 

        $lowerDist1 = "SELECT * FROM payments where Position like '%d(%'";
        $low1 =mysqli_query($conn, $lowerDist1);
        $hurr1 = mysqli_fetch_array($low1); 

         $lowerDist2 = "SELECT * FROM payments where Position='Agent head'";
        $low2 =mysqli_query($conn, $lowerDist2);
        $hurr2 = mysqli_fetch_array($low2);  
        
        $lowerDist3 = "SELECT * FROM payments where Position like 'Agent'";
        $low3 =mysqli_query($conn, $lowerDist3);
        $hurr3 = mysqli_fetch_array($low3); 
                 ?>
                 
                 <?php
                 $adminsalary = $hurr3['Amount']/2;
                 echo '<h2 align="center">Total Amount paid this month is <a href="#">'.$avAmount.'</a></h2>';
                 echo '<h4 align="left"> Administrator:<a href="#">'.$adminsalary.'</a></h4>';
                 echo '<h4 align="left"> District with the highest member enrollment:<a href="#">'.$topdistrict.'</a> with '.$kar.' members</h4>';
                 ?>
<div class="box-body">

<table id="table_id2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Agent Name</th>
                <th>District</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
                </thead>
                <tbody> 
                <tr>
                @foreach($View_Agents as $members)
                <td>{{$members->Name}}</td>
                <td>{{$members->District}}</td>
                <td>{{$members->Position}}</td>

                 <?php
                   if($members->Position=='Agent'){
                        echo '<td>'.$hurr3['Amount'].'</td>';
                          
                      }
                        elseif($members->Position=='Agent Head' ){
                           
                          echo '<td>'.$hurr2['Amount'].'</td>';
                             
                        }
                         
                         elseif(strpos($members->Position,'Agent(') !== false){
                            
                          echo '<td>'.$hurr['Amount'].'</td>';
                              
                        }
                         
                         elseif(strpos($members->Position,'Agent Head(') !== false){

                          echo '<td>'.$hurr1['Amount'].'</td>';
                            
                        }
                         ?>
                         </tr>
                @endforeach
                </tbody>
                </table>
                
                

               
                
              </div>
            
@endsection