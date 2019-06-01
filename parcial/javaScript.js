
function buscar_codigo(){
    edt=document.getElementById("codigo_a_buscar");
    var codigo = edt.value;
    $.ajax({
            url:'server.php',
            method:'POST',
            data:{'codigo':codigo}
        
    }).done(function(respuesta) {
        /*Mostras la respuesta DOM*/ 
        informacion_es=document.getElementById("informacion");
        informacion_es.innerHTML=respuesta;
    }).fail(function(jqXHR) {
        alert(jqXHR.statusText);
    });
}