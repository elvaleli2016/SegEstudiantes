@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.pasantia.restore.entrega')
@endsection

@section('script')
<script>
 $(function(){


      var currentDate = new Date();

    $("#fecha_dia").datepicker({
        format: 'yyyy-mm-dd',
        maxDate: 0,
        changeYear: true 
    }).attr('readonly', 'readonly');
    $("#fecha_dia").datepicker("setDate", currentDate);
    
});
  


</script>
@endsection
