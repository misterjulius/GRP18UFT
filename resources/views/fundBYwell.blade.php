@extends('layouts.admin')
@section('content')
    <script src="{{ asset('charty') }}/canvasjs.min.js"></script>
<div>
<div id="chartContainer" style="height: 400px; max-width: 750px; margin: 0px auto;"></div>
	
<?php
 $conn = mysqli_connect("localhost", "root","", "recess");
 $RAD = "SELECT Count(*) as boom from funds"; 
        $jul =mysqli_query($conn, $RAD);
        $red = mysqli_fetch_array($jul);
		$kar=$red['boom'];

		$month = array();
		$RADO = "SELECT created_at as monthconvert from funds"; 
		$redy = mysqli_query($conn, $RADO);
		$here = mysqli_fetch_array($redy);
		
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