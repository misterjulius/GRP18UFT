@extends('layouts.admin')

@section('content')


<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light",
	title:{
		text: "UFT HIERARCHY CHART"
	},
	data: [{
		type: "pyramid",
		toolTipContent: "<b>{label}</b>",
		indexLabelFontColor: "white",
		indexLabelFontSize: 16,
		indexLabel: "{label}",
		indexLabelPlacement: "inside",
		dataPoints: [
		
			{ y: 25, label: "{{$members}} MEMEBERS" },
			{ y: 25, label: "{{$Agent}} AGENTS" },
			{ y: 40, label: "{{$Agenthead}} AGENT HEADS" },
			{ y: 60, label: "ADMIN" }
		]
	}]
});
chart.render();

}
</script>
                 
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="{{asset('charty')}}/canvasjs.min.js"></script>

@endsection
