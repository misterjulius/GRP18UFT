@extends('layouts.admin')
@section('content')
    <script src="{{ asset('charty') }}/canvasjs.min.js"></script>
<div>
<!-- <button onclick="nook1()" style="border-color:brown; background-color:skyblue;"><b>click To view by Month</button>
<br><br><button onclick="nook()" style="border-color:brown; background-color:skyblue;"><b>click To view by well-wishers</button></div> -->
	<div id="chartContainer" style="height: 400px; max-width: 750px; margin: 0px auto;"></div>
	<!-- <aside id="chartContainer1" style="height: 100px; max-width: 500px; margin: 0px auto;"></aside> -->
<?php
 $conn = mysqli_connect("localhost", "root","", "recess");
 $RAD = "SELECT Count(*) as boom from funds"; 
        $jul =mysqli_query($conn, $RAD);
        $red = mysqli_fetch_array($jul);
		$kar=$red['boom'];

	//$trial = array();
		$RADO = "SELECT monthname(created_at) as monthconvert from funds"; 
		$redy = mysqli_query($conn, $RADO);
		//$here = mysqli_fetch_array($redy);
		$trial = array();
		$con=0;

		while($here = mysqli_fetch_array($redy)){
			$trial[$con]= $here['monthconvert'];
			$con++;
		}
		
 $agentNames = array();
 $agentPosition = array();


 $count=0;
 
			while($count<$kar){
	foreach($View_Funds as $funders){
	 $agentPosition[$count] = $funders->Donor;
	 $agentSalary[$count] = $funders->Amount;
	 
	 $count++;
			 }}
	

 ?>

<script>
window.onload = function nook() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light3",
	title:{
		text: "Monthly Donations"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "column",       
		dataPoints: [
			<?php for($con=0;$con<$kar;$con++) echo '{  y:'.$agentSalary[$con].', label: "'.$trial[$con].'" },';?>
					]
	}]
});
chart.render();

}
</script>

@endsection