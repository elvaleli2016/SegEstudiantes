@extends('app')
@section('style')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('plugins/datepicker/datepicker3.css')}}">
@endsection

@section('content')
    @include('app.pasantia.restore.agregar')
@endsection

@section('script')
<script type="text/javascript" src="https://select2.github.io/dist/js/select2.full.js"></script>
<link href="https://select2.github.io/dist/css/select2.min.css" type="text/css" rel="stylesheet" />
<script>
$('#empresa').change(function(){
  var datos="id="+$('#empresa').val();
  datos+="&_token="+$('#token').val();
  $.ajax({
            type:"POST",
            url:"/lista-convenio",
            dataType:'json',
            data:datos,
            success:function(response){
               console.log("Entre");
			         var select=$("#convenio");
               var options = select.attr('options');
               $('option', select).remove();
               response=response['convenio'];
               dato="";
      			   for(var i in response) {
                 dato+="<option value='"+response[i]['id']+"' >"+response[i]['concepto']+"</option>";
                }
                $("#convenio").append(dato);
              }

  });
});

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
<script type="text/javascript">
$(".js-example-basic-multiple").select2();
</script>

@endsection
