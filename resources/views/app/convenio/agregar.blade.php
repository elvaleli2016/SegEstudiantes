@extends('app')
@section('style')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('plugins/datepicker/datepicker3.css')}}">
@endsection

@section('content')
    @include('app.convenio.restore.agregar')
@endsection

@section('script')
<script>
 $(function(){


      var currentDate = new Date();

    $("#fecha_ini").datepicker({
        format: 'yyyy-mm-dd',
        maxDate: 0,
        changeYear: true 
    }).attr('readonly', 'readonly');
    $("#fecha_ini").datepicker("setDate", currentDate);
    $("#fecha_fin").datepicker({
        format: 'yyyy-mm-dd',
        maxDate: 0,
        changeYear: true 
    }).attr('readonly', 'readonly');
    $("#fecha_fin").datepicker("setDate", currentDate);
});
  


</script>
@endsection
