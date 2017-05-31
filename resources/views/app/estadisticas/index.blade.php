@extends('app')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
<script src="https://adminlte.io/themes/AdminLTE/plugins/chartjs/Chart.min.js"></script>

<style type="text/css">
.pie-legend li span {
    width: 1em;
    height: 1em;
    display: inline-block;
    margin-right: 5px;
}
.pie-legend {
    list-style: none;    
}
</style>
@endsection

@section('content')
    @include('app.estadisticas.restore.index')
@endsection

@section('script')
    <script>
        //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: {{$listapracticas}},
        color: "#f56954",
        highlight: "#f56954",
        label: "{{$anio}}/{{$semestre}}"
      },
      {
        value: {{$listapracticas2}},
        color: "#00a65a",
        highlight: "#00a65a",
        label: "{{$anio2}}/{{$semestre2}}"
      }
    ];

    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };


    var pie_ctx = document.getElementById("pieChart").getContext("2d");
    window.myPie = new Chart(pie_ctx).Pie(PieData, {
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%>: <%=segments[i].value%><%}%></li><%}%></ul>"
    });

	var legend = myPie.generateLegend();
	$("#legend").html(legend);


    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);


    </script>
@endsection