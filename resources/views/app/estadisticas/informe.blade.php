@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.estadisticas.restore.informe')
@endsection

@section('script')
    <script>
        $(document).ready(function () {

            ocultar();

            $('#buscar-informe').click(function () {
              var token=$("#_token").val();
              var tipoB=$('#tipo-busqueda').val();
              var buscar=$('#busqueda').val();
              var tipo=$('#tipo').val();
              ocultar();
              $.ajax({
                  type: "POST",
                  url: "{{URL::asset('informe')}}",
                  data: { "tipo_busqueda": tipoB, "tipo": tipo, "buscar": buscar, "_token": token },
                  success: function (res) {
                    console.log(res);
                  },
                  error: function (err) {
                  }
              });

              if(tipo=="pasantia"){
                $('#pasantia').show();
              }else if(tipo=="practica"){
                $('#pasantia').show();
              }else if(tipo=="empresa"){
                $('#empresa').show();
              }
            });
        });
        function ocultar(){
          $('#empresa').hide();
          $('#persona').hide();
          $('#pasantia').hide();
        }
    </script>
@endsection
