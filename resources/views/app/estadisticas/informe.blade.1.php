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
                    var dato="";
                    console.log(tipo);
                    if(res!=null)
                      res=res[0]
                    if(tipo=="pasantia"&&tipo=="practica"){       //PASANTIA y PRACTICA
                      $('#table_pasantia').html('');
                      for(var i=0;i<res.length;i++){
                        dat=res[i];
                        dato="<tr><th>"+dat.titulo+"</th><th>"+dat.estudiante+"</th><th>"+dat.tutor+"</th><th>"+dat.concepto+"</th><th>"+dat.fecha_ini+"</th><th>"+dat.fecha_fin+"</th><th></th></tr>";
                        $('#table_pasantia').append(dato);
                      }
                      $('#pasantia').show();
                    }else if(tipo=="empresa"){  //EMPRESA
                      $('#table_empresa').html('');
                      for(var i=0;i<res.length;i++){
                        dato="<tr><th>"+res[i].nombre+"</th><th>"+res[i]['nit']+"</th><th>"+res[i].representante+"</th><th>"+res[i].ciudad+"</th><th>"+res[i].direccion+"</th><th></th></tr>";
                        $('#table_empresa').append(dato);
                      }
                      $('#empresa').show();
                    }
                    console.log(res[0]);
                  },
                  error: function (err) {
                  }
              });
              
            });
        });
        function ocultar(){
          $('#empresa').hide();
          $('#persona').hide();
          $('#pasantia').hide();
        }
    </script>
@endsection
