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

                    if(res!=null&&res[0]!=null){
                      res=res[0]
                      if(tipo=="pasantia"){       //PASANTIA
                        $('#table_pasantia').html('');
                        for(var i=0;i<res.length;i++){
                          dat=res[i];
                          dato="<tr><th>"+dat.titulo+"</th><th>"+dat.est_nombre+' '+dat.est_apellido+"</th><th>"+dat.est_codigo+"</th><th>"+dat.est_identificacion
                          +"</th><th>Ingenieria de Sistemas</th><th>"+dat.tutor+"</th><th>"+dat.concepto+"</th><th>"+dat.empresa+"</th><th>"+dat.fecha_ini+"</th><th>"+dat.fecha_fin
                          +"</th></tr>";
                          $('#table_pasantia').append(dato);
                        }
                        $('#pasantia').show();
                      }else if(tipo=="practica"){       //PRACTICA
                        $('#table_practica').html('');
                        for(var i=0;i<res.length;i++){
                          dat=res[i];
                          dato="<tr><th>"+dat.titulo+"</th><th>"+dat.est_nombre+' '+dat.est_apellido+"</th><th>"+dat.tutor+"</th><th>"+dat.concepto+"</th><th>"+dat.empresa+"</th><th>"+dat.ano+"</th><th>"+dat.semestre+"</th></tr>";
                          $('#table_practica').append(dato);
                        }
                        $('#practica').show();
                      }else if(tipo=="empresa"){  //EMPRESA
                        $('#table_empresa').html('');
                        for(var i=0;i<res.length;i++){
                          dato="<tr><th>"+res[i].nombre+"</th><th>"+res[i]['nit']+"</th><th>"+res[i].representante+"</th><th>"+res[i].ciudad+"</th><th>"+res[i].direccion+"</th><th></th></tr>";
                          $('#table_empresa').append(dato);
                        }
                        $('#empresa').show();
                      }
                      
                    }
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
          $('#practica').hide();
        }
    </script>
@endsection
