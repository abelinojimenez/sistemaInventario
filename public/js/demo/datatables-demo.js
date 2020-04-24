// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable(
  	{
        "language": {
			"sEmptyTable":   	"No hay datos disponibles en la tabla.",
			"sInfo":         	"_START_  a _END_ de _TOTAL_ resultados",
			"sInfoEmpty":    	"0 a 0 de 0 resultados",
			"sInfoFiltered": 	"(filtrado por entradas _MAX_)",
			"sInfoPostFix":  	"",
			"sInfoThousands":  	".",
			"sLengthMenu":   	"Mostrar resultados de _MENU_",
			"sLoadingRecords": 	"Cargando ...",
			"sProcessing":   	"Por favor espera ...",
			"sSearch":       	"Buscar",
			"sZeroRecords":  	"No hay entradas disponibles.",
			"oPaginate": {
				"sFirst":    	"Primero",
				"sPrevious": 	"Volver",
				"sNext":     	"siguiente",
				"sLast":     	"Ultimo"
			},
			"oAria": {
				"sSortAscending":  ": Actívelo para ordenar la columna en orden ascendente",
				"sSortDescending": ": Actívelo para ordenar la columna en orden descendente"
			}
}
    } 
    );
});
