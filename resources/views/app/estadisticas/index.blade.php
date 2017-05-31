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



var pieData = [
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


var pie_ctx = document.getElementById("pie-chart-area").getContext("2d");
    window.myPie = new Chart(pie_ctx).Pie(pieData, {
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%>: <%=segments[i].value%><%}%></li><%}%></ul>"
    });

var legend = myPie.generateLegend();
$("#legend").html(legend);


    </script>
@endsection