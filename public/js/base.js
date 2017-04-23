$(document).on("ready", inicio);

function inicio() {

$("body").on("click", "#eliminar-docente", eliminarDocente);
$("body").on("click", "#eliminar-estudiante", eliminarEstudiante);

}



function eliminarDocente() {
if (confirm("Seguro que quieres eliminar el Docente?") == false) {
    return;
}
var id = $(this).attr('data-id');
$.ajax({
           url: '/eliminar-docente',
           type: "POST",
           dataType: "json",
           data: {
	            id: id,
	            _token: $('meta[name="csrf-token"]').attr('content')
           },
           success: function(a) {
               $('.usuario-'+id).remove();
           },
           error: function(XMLHttpRequest, textStatus, errorThrown) {

           },
           cache: false
       });
}

function eliminarEstudiante() {
if (confirm("Seguro que quieres eliminar el Estudiante?") == false) {
    return;
}
var id = $(this).attr('data-id');
$.ajax({
           url: '/eliminar-estudiante',
           type: "POST",
           dataType: "json",
           data: {
	            id: id,
	            _token: $('meta[name="csrf-token"]').attr('content')
           },
           success: function(a) {
               $('.usuario-'+id).remove();
           },
           error: function(XMLHttpRequest, textStatus, errorThrown) {

           },
           cache: false
       });
}