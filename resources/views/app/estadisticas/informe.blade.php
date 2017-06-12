@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.estadisticas.restore.informe')
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#empresa').hide();
            $('#persona').hide();
            $('#pasantia').hide();

            $('#buscar-informe').click(function () {
                console.log("Entre");
            });
        });
    </script>
@endsection