@extends('app')
@section('style')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('plugins/datepicker/datepicker3.css')}}">
@endsection

@section('content')
    @include('app.pasantia.restore.editar')
@endsection

@section('script')
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
$('body').on('focus', "input[name='fecha_ini']", function () {
    $(this).datepicker({
        autoclose: true
    });
});
$('body').on('focus', "input[name='fecha_fin']", function () {
    $(this).datepicker({
        autoclose: true
    });
});
</script>
@endsection
