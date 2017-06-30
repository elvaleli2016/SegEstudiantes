@extends('app')
@section('style')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('plugins/datepicker/datepicker3.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('plugins/datatables/buttons.dataTables.min.css')}}">
@endsection

@section('content')
    @include('app.estadisticas.restore.informe')
@endsection

@section('script')


    <script src="//cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.1.0/js/buttons.flash.min.js"></script>
 
    <script>
        $(document).ready(function () {

            $("#example1").DataTable( {

            } );
            $("#example2").DataTable( {

            } );
            $("#example3").DataTable( {

            } );
            $("#example4").DataTable( {

            } );
            
            var currentDate = new Date();

            $("#fecha_ini").datepicker({
                format: 'yyyy-mm-dd',
                maxDate: 0,
                changeYear: true 
            }).attr('readonly', 'readonly');
            $("#fecha_ini").datepicker("setDate", currentDate);
            $("#fecha_fin").datepicker({
                format: 'yyyy-mm-dd',
                maxDate: 0,
                changeYear: true 
            }).attr('readonly', 'readonly');
            $("#fecha_fin").datepicker("setDate", currentDate);

            ocultar();

            /**
            *Consulta de busqueda del informe
            **/
            $('#buscar-informe').click(function () {
              var token=$("#_token").val();
              var tipoB=$('#tipo-busqueda').val();
              var buscar=$('#busqueda').val();
              var fecha_ini=$('#fecha_ini').val();
              var fecha_fin=$('#fecha_fin').val();
              var tipo=$('#tipo').val();
              var tipo_fecha=0;
              if( $('#tipo_fecha').attr('checked') )
                tipo_fecha=1 ;
              ocultar();
              $.ajax({
                  type: "POST",
                  url: "{{URL::asset('informe')}}",
                  data: { "tipo_busqueda": tipoB, "tipo": tipo, "buscar": buscar,"fecha_ini":fecha_ini,"fecha_fin":fecha_fin,"tipo_fecha":tipo_fecha, "_token": token },
                  success: function (res) {

                  



                    var dato="";

                    if(res!=null&&res[0]!=null){
                      res=res[0]
                      if(tipo=="pasantia"){       //PASANTIA
                        $('#example3').dataTable().fnDestroy();
                        $('#table_pasantia').html('');
                        for(var i=0;i<res.length;i++){
                          dat=res[i];
                          dato="<tr><th>"+dat.est_nombre+' '+dat.est_apellido+"</th><th>"+dat.est_codigo+"</th><th>"+dat.est_identificacion
                          +"</th><th>Ingenieria de Sistemas</th>856<th> </th><th> Pregrado </th><th> Presencial </th><th> Pasantia </th><th> 115 </th><th>"+dat.empresa+"</th><th>"
                          +dat.fecha_ini+"</th><th>"+dat.fecha_fin
                          +"</th><th>Ingeniería</th><th>"+dat.concepto+"</th><th>"+dat.titulo+"</th><th>"+dat.dir_nombre+' '+dat.dir_apellido+"</th><th>"+dat.tut_nombre+' '+dat.tut_apellido+"</th></tr>";
                          $('#table_pasantia').append(dato);
                        }
                        $('#pasantia').show();
                        $("#example3").DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'excel'
                            ],
                            "scrollX": true
                        } );
                      }else if(tipo=="practica"){       //PRACTICA
                        $('#example1').dataTable().fnDestroy();
                        $('#table_practica').html('');
                        for(var i=0;i<res.length;i++){
                          dat=res[i];
                          dato="<tr><th>"+dat.est_nombre+' '+dat.est_apellido+"</th><th>"+dat.est_codigo+"</th><th>"+dat.est_identificacion
                          +"</th><th>Ingenieria de Sistemas</th>856<th> </th><th> Pregrado </th><th> Presencial </th><th> Practica </th><th> 115 </th><th>"+dat.empresa+"</th><th>"
                          +dat.ano+"</th><th>"+dat.semestre
                          +"</th><th>Ingeniería</th><th>"+dat.concepto+"</th><th>"+dat.titulo+"</th><th>"+dat.dir_nombre+' '+dat.dir_apellido+"</th><th>"+dat.tut_nombre+' '+dat.tut_apellido+"</th></tr>";
                          $('#table_practica').append(dato);
                        }
                        $('#practica').show();
                        $("#example1").DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'excel'
                            ],
                            "scrollX": true
                        } );
                      }else if(tipo=="empresa"){  //EMPRESA
                        $('#example0').dataTable().fnDestroy();
                        $('#table_empresa').html('');
                        for(var i=0;i<res.length;i++){
                          dato="<tr><th>"+res[i].nombre+"</th><th>"+res[i]['nit']+"</th><th>"+res[i].representante+"</th><th>"+res[i].ciudad+"</th><th>"+res[i].direccion+"</th><th>"+res[i].telefono+"</th><th>"+res[i].correo+"</th></tr>";
                          $('#table_empresa').append(dato);
                        }
                        $('#empresa').show();
                        $("#example0").DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'excel'
                            ],
                            "scrollX": true
                        } );
                      }else if(tipo=="convenio"){  //CONVENIO
                        $('#example4').dataTable().fnDestroy();
                        $('#table_convenio').html('');
                        for(var i=0;i<res.length;i++){
                          dato="<tr><th>"+res[i].n_convenio+"</th><th>"+res[i]['nom_empresa']+"</th><th>"+res[i].concepto+"</th><th>"+res[i].representante_emp+"</th><th>"+res[i].representante_uni+"</th><th>"+res[i].fecha_ini+"</th><th>"+res[i].fecha_fin+"</th></tr>";
                          $('#table_convenio').append(dato);
                        }
                        $('#convenio').show();
                        $("#example4").DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'excel'
                            ],
                            "scrollX": true
                        } );
                      }
                      
                    }




                  },
                  error: function (err) {
                  }
              });
              
            });
        });

        /**
        * Oculta las tablas 
        **/
        function ocultar(){
          $('#empresa').hide();
          $('#persona').hide();
          $('#pasantia').hide();
          $('#practica').hide();
          $('#convenio').hide();
        }
    </script>
@endsection
