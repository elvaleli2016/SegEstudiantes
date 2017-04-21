@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.pasantia.restore.agregar')
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
