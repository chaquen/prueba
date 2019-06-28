$(document).ready(function(){
     consultar_usuarios();
     consultar_listado_de_amigos();

     $("#btnCrear").click(function(){
            var val1= $('#exampleInputEmail1').val(); 
            var val2 = $('#exampleInputPassword1').val();  
            
            if(val1==""){
                alert("debes ingresar el nombre");
                return false;
            }
            if(val2==""){
                alert("debes ingresar el apellido");
                return false
            }

            //validar que amigos selecciono
            amigos=[];
            
            jQuery("[name='amigos']").each(function() {
                if(this.checked){
                    amigos.push(this.value);    
                }
                
            });
            //registrar usuario
            peticion_ajax("agregar",{"nombre" : val1, "apellido" : val2,"amigos":amigos},function(data){
                   console.log(data); 
                  alert(data.respuesta);
                  $('#exampleInputEmail1').val(""); 
                  $('#exampleInputPassword1').val("");  

                  consultar_listado_de_amigos();
            });

          
            
     });


    
});


function consultar_usuarios(){
    peticion_ajax("listado",{},function(data){

                  crear_tabla_usuarios(data);


            });
}

function crear_tabla_usuarios(datos){
    var div=document.getElementById("divUsuarios");
    for(var c in datos){
        if(datos[c]!=null){
            var inp=document.createElement("input");
            inp.setAttribute("type","checkbox");
            inp.setAttribute("name","amigos");
            inp.value=datos[c].id;
            var lbl=document.createElement("label");
            lbl.innerHTML=datos[c].nombre;
            div.append(inp);
            div.append(lbl);
        }


    }

    
}

function consultar_listado_de_amigos(){
    peticion_ajax("consultar",{},function(data){

       crear_tabla_usuarios_con_amigos(data);
    });

}


function crear_tabla_usuarios_con_amigos(datos){
    var tabla=document.getElementById("tblUsuario");
    for(var c in datos){
        if(datos[c]!=null){

            var tr=document.createElement("tr");  

            var td=document.createElement("td");            
            tr.innerHTML=datos[c].id;            
            tr.append(td);

            var td=document.createElement("td");            
            td.innerHTML=datos[c].nombre;            
            tr.append(td);

            var td=document.createElement("td");            
            td.innerHTML=datos[c].apellido;            
            tr.append(td);
            var td=document.createElement("td");                               
            
            var txt="";
            for(var a in datos[c].amigos){
               
                txt+=datos[c].amigos[a].nombres+", ";  
            }
            td.innerHTML=txt.substring(0, txt.length-2)+".";

            tr.append(td);

            tabla.append(tr);



           
        }


    }
}

function peticion_ajax(accion,datos,funcion){
    $.ajax({
                // En data puedes utilizar un objeto JSON, un array o un query string
                data: datos,
                //Cambiar a type: POST si necesario
                type: "POST",
                // Formato de datos que se espera en la respuesta
                dataType: "json",
                // URL a la que se enviará la solicitud Ajax
                url: "controlador/controlador.php?_accion="+accion,
            })
             .done(function( data, textStatus, jqXHR ) {
                  if(funcion!=undefined){
                      funcion(data);
                  }
             })
             .fail(function( jqXH, textStatus, errorThrown ) {
                console.log(jqXH);
                 if ( console && console.log ) {
                     console.log( "La solicitud a fallado: " +  textStatus);
                 }
            });
}
