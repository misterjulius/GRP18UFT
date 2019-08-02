<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class payer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:payer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $conn = mysqli_connect("localhost", "root","", "recess");
   
        $num = "SELECT count(id) as 'agentid' from agents";
        $test1 =mysqli_query($conn, $num);
        $groupall =mysqli_fetch_array($test1);
        $allagents = $groupall['agentid'];
   
        $RAD = "SELECT District,Count(District) as boom from members GROUP BY District ORDER BY boom DESC"; 
        $jul =mysqli_query($conn, $RAD);
        $red = mysqli_fetch_array($jul);
        $kar=$red['boom'];
   
        $RAD1 = "SELECT District as boom1 FROM members GROUP BY District HAVING COUNT(*)='$kar'";
        $jul1 =mysqli_query($conn, $RAD1);
        $red1 = mysqli_fetch_array($jul1);
        $topdistrict = $red1['boom1'];

        $lowerDist = "SELECT District as lowers FROM agents GROUP BY District HAVING COUNT(*)!='$kar'";
        $low =mysqli_query($conn, $lowerDist);
        $categ=mysqli_fetch_array($low);
        $otherdistrict = $categ['lowers'];    
   
        $highnum = "SELECT count(id) as 'highagents' from agents where District = '$topdistrict'";
        $test4 =mysqli_query($conn, $highnum);
        $category4 =mysqli_fetch_array($test4);
        $highestagents = $category4['highagents'];
   
        $Hinlow = "SELECT count(id) as 'lowhead' from agents where Position = 'Agent head' AND District != '$topdistrict'";
        $test5 =mysqli_query($conn, $Hinlow);
        $category5 =mysqli_fetch_array($test5);
        $Headsinlow =$category5['lowhead'];
        
   
        $allotheragents = $allagents - $highestagents;
        $agentsinH = $highestagents - 1;
        $agentsinL = $allotheragents - $Headsinlow;
   
   
        $GenralPos = "SELECT Position from agents";
        $admin = mysqli_query($conn, $GenralPos);
        $catadmin =mysqli_fetch_array($admin);
        $Posadd =$catadmin['Position'];
   
        $Allocated= "SELECT District from agents ";
        $test6 = mysqli_query($conn, $Allocated);
        $category6 =mysqli_fetch_array($test6);
        $Allocation =$category6['District'];
   
        $entireAmount = "SELECT SUM(Amount) as 'summation' from funds";
        $money =mysqli_query($conn, $entireAmount);
        $category8 =mysqli_fetch_array($money);
        $treasury = $category8['summation'];
   

        
   $radar = "SELECT count(*) as serge FROM agents ";
   $exec = mysqli_query($conn,$radar);
   $jay = mysqli_fetch_array($exec);
  

   $avAmount = $treasury - 2000000;
           $available = $avAmount/(($agentsinL + ((7/4)*$Headsinlow) + (7/2 ) + (2*$agentsinH) + 0.5));
   
  
        if($treasury > 2000000){
           
           //$balance =$avAmount-(0.5*$available + $available + (7/4)*$available + 2*$available + (7/2)*$available);
           //$ferty=$balance/$agentsinL;
           //$hill=$available+$ferty;
   
           //DELETE ALL THE CONTENTS FROM THE payments TABLE
        /*   
        if($Posadd='Admin'){ 
    
              $adminpay = 0.5*$available;
        $ent1 =mysqli_query($conn, "SELECT name as 'administrator' from agents where Position='Admin'");
        $catego1 =mysqli_fetch_array($ent1);
        $tread1= $catego1['administrator'];
   
       $insert1 = "INSERT INTO payments(Position,Amount) VALUES ('$tread1','Admin,'$adminpay')";
        $move = mysqli_query($conn,$insert1);

        }  */
        if($Posadd='Agent head' && $Allocation=$topdistrict){
          $Hiheadpay = 7/2*$available;
          $ent4 =mysqli_query($conn, "SELECT name as 'highhead' from agents where Position='Agent head' AND District = '$topdistrict'");
          $catego4 =mysqli_fetch_array($ent4);
          $tread4= $catego4['highhead'];
          $grow = 'Agent Head('.$topdistrict.'(H))';
          
            $insert4 = "INSERT INTO payments(Position,Amount) VALUES ('$grow','$Hiheadpay')";
      $move4 = mysqli_query($conn,$insert4);
      }

        if($Posadd='Agent' && $Allocation=$topdistrict){
            $HiAgentpay = 2*$available;
            $ent2 =mysqli_query($conn, "SELECT name as 'highAGENT' from agents where Position='Agent' AND District = '$topdistrict'");
            $catego2 =mysqli_fetch_array($ent2);
            $tread2= $catego2['highAGENT'];
            $grew = 'Agent'.'('.$topdistrict.'(H))';
           
              $insert2 = "INSERT INTO payments(Position,Amount) VALUES ('$grew','$HiAgentpay')";
        $move2 = mysqli_query($conn,$insert2);
        }

        if($Posadd='Agent head' && $Allocation=$otherdistrict){
            $lowheadpay = 7/4*$available;
            $ent5 =mysqli_query($conn, "SELECT name as 'lowhead' from agents where Position='Agent head' AND District != '$topdistrict'");
            $catego5 =mysqli_fetch_array($ent5);
            $tread5= $catego5['lowhead'];
           
              $insert5 = "INSERT INTO payments(Position,Amount) VALUES ('Agent head','$lowheadpay')";
        $move5 = mysqli_query($conn,$insert5);
        }
        if($Posadd='Agent' && $Allocation=$otherdistrict){
       
          $ent3 =mysqli_query($conn, "SELECT name as 'lowAGENT' from agents where Position='Agent' AND District = '$otherdistrict'");
          $catego3 =mysqli_fetch_array($ent3);
          $tread3= $catego3['lowAGENT'];
          
            $insert3 = "INSERT INTO payments(Position,Amount) VALUES ('Agent','$available')";
      $move3 = mysqli_query($conn,$insert3);
      }
   }
       else{
           @include('inc.messages');
       }  
       return $available;
                
    }
}
