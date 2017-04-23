@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.convenio.restore.agregar')
@endsection

@section('script')
<script>
  $('#empresa').change(function(){
    console.log($('#empresa').val());

  });

  $('#registrar').click(function(){
    console.log("Hizo click");
  });
  $('body').on('focus', "input[name='fecha_ini']", function () {
      $(this).datepicker({
          autoclose: true
      });
  });


</script>
@endsection
