@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.practica.restore.agregar')
@endsection

@section('script')
<script>

    $('body').on('focus', "input[name='fecha']", function () {
        $(this).datepicker({
            autoclose: true
        });
    });
</script>
@endsection
