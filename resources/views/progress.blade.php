@extends('layouts.admin')
@section('content')
    <script src="{{ asset('charty') }}/canvasjs.min.js"></script>
<div>
<div id="chartContainer" style="height: 400px; max-width: 750px; margin: 0px auto;"></div>
	
<?php
$conn = mysqli_connect("localhost", "root","", "recess");

$RAD = "SELECT Count(Donor) as boom from funds"; 
$jul =mysqli_query($conn, $RAD);
$red = mysqli_fetch_array($jul);
$kar=$red['boom'];

 
 

 $trial = array();
 $numberOfMembers = array();
 $con=0;
 $RADO = "SELECT monthname(Date) as monthconvert from members"; 
 $jul1 = mysqli_query($conn, $RADO);
 $redy = mysqli_fetch_array($jul1);
 $dre = $redy['monthconvert'];

 echo $dre;
 dd($dre);
 while($redy = mysqli_fetch_array($jul1)){
     

     
 $trial[$con]= $redy['monthconvert'];
     
     
     $RADOW = "SELECT count(Name) as membername from members where monthname(Date)= '$trial[$con]'"; 
     $redd = mysqli_query($conn, $RADOW);
     $hero = mysqli_fetch_array($redd);
     
     $numberOfMembers[$con]= $hero['membername'];

     echo $trial[$con].'has->'.$numberOfMembers[$con];
    
     $con++;
 }
		

 $agentPosition = array();
 dd($agentPosition); 

 $count=0;
 
			while($count<$kar){
	foreach($View_Members as $members){
	/*  $agentPosition[$count] = $members->; */
	 
	 $count++;
 }}
	

 ?>

<script>
window.onload = function nook() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Donations as done by well-wishers"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			<?php for($con=0;$con<$kar;$con++) echo '{  y:'.$agentSalary[$con].', label: "'.$agentPosition[$con].'" },';?>
					]
	}]
});
chart.render();

}
</script>

@endsection