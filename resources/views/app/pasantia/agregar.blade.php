@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.pasantia.restore.agregar')
@endsection

@section('script')
<script>
$('#empresa').change(function(){
  console.log($('#empresa').val());

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
