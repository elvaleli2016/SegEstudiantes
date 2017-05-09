@extends('app')
@section('style')

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
<script type="text/javascript">
$(".js-example-basic-multiple").select2();
</script>

@endsection
