/* Funciones para el formulario ELECTRO.WEB */ 

function CheckForm() {
    // chequear formulario de ingreso
    
    // PREPARAR MENSAJE Y ERROR
    var mensaje = "ATENCION!!!.. Ingrese:\n";
    var error   = false;
    
    // CAPTURAR DATOS DEL FORMULARIO
    var id            = document.getElementById("dataID").value;
    var descripcion   = document.getElementById("dataDES").value;
    var origen        = document.getElementById("dataORI").value;
    var precio        = document.getElementById("dataPRE").value;
    var categoria     = document.getElementById("dataCAT").value;
    
    // VALIDAR DATOS
    if (id=="") {
        error   = true;
        mensaje = mensaje + "ID:\n";
    } // endif
    if (descripcion=="") {
        error   = true;
        mensaje = mensaje + "Descripción:\n";
    } // endif
    if (origen=="") {
        error   = true;
        mensaje = mensaje + "Origen no puede ser vacío:\n";
    } // endif
  
    if (isNaN(precio)) {  // is Not a Number
        error   = true;
        mensaje = mensaje + "El precio debe ser numérico:\n";
    } // endif
    if (precio.length<8) {
        error   = true;
        mensaje = mensaje + "El precio debe tener un máximo de 8 dígitos :\n";
    } // endif
    if (categoria=="") {
        error   = true;
        mensaje = mensaje + "Categoria:\n";
    } // endif
    
    // CHEQUEAR ERROR
    if (error) {
        // enviar error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("fmrprod").submit();
    } // endif                                    
} // end function