
function selecOption(names,selectd){
	var v=[];
	var k=[];
     $("#"+names+" option").each(function(){
        if ($(this).val() != "" ){         	
     	 var txt=new String($(this).text());
     	 var selec=new String(selectd);
        v.push($(this).text());
        k.push($(this).val());
        }
     });

     for(var i=0;i<v.length;i++){
     	if(selectd==v[i])
     		return k[i];
     }
     return -1;
}

function changeValues(path,values){
$("#idvalueactualization").val(values[0]);
	if(path!="ingresoSalidaProducto"){
		/*ids=""+values[0]+"1";
		valor=$("#l"+values[0]+"1").html();*/
		let i=1;
		if(path=="tiposProducto")i=2;
		$("#nombre"+path).val(values[i]);
	}
	if(path=="pasillos" || path=="ingresoSalidaProducto"){
		let i=5;
		if(path=="pasillos")i=2;
			var value=selecOption("idBodegaA",values[i]);
			$("#idBodegaA").val(value.toString());
	}
	if(path=="estanteria" || path=="ingresoSalidaProducto"){
		let i=3;
		if(path=="estanteria")i=2;
		var value=selecOption("idPasilloA",values[i]);
			$("#idPasilloA").val(value.toString());
	}
    if(path=="tiposProducto"){
    	$("#codigo"+path+"A").val(values[1]);
    	$("#precioCostoA").val(values[3]);
    	$("#precioVentaA").val(values[4]);
    	var value=selecOption("idCategoriaA",values[5]);
			$("#idCategoriaA").val(value.toString());
    }
    if(path=="ingresoSalidaProducto"){
    	$("#idProductoA").val(selecOption("idProductoA",values[1]).toString());
    	$("#idSucursalA").val(selecOption("idSucursalA",values[2]).toString());
    	$("#idEstanteriaA").val(selecOption("idEstanteriaA",values[4]).toString());
    	$("#idrazonMovimientoA").val(selecOption("idrazonMovimientoA",values[6]).toString());
    	$("#estadoA").val(selecOption("estadoA",values[7]).toString());
    	$("#cantidadA").val(values[8]);
    	//$("#idSucursalA").val(values[1]);
    }

	 $('#actualizarNuevoModal').modal("show"); 
    

}
function ParserData(data){
	return data.split(',');
}
function changeElement(path,tablaName,idName,idValue,data){
	  changeValues(path,ParserData(data));
	 // console.log(row);
}

