        function cargar(pagina) {

            var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
            ajax.open("get", pagina, true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    document.getElementById("Descripcion").innerHTML = ajax.responseText;
                }
            }
            ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
            ajax.send(); //llamar a la pagina

        }

        function llamarregistrar() {
            var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 

            var parametros = "nombre=" + encodeURI(document.getElementById('nombre').value) + "&apellido=" + encodeURI(document.getElementById('apellido').value) + "&nocache=" + Math.random();
            //alert(direccion);
            ajax.open("post", "registrar.php", true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    document.getElementById("resultado").innerHTML = ajax.responseText;
                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
            ajax.send(parametros); //llamar a la pagina

        }

        function cargarlugares() {
            var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
            sel = document.getElementById("selDepartamento");

            lug = document.getElementById("selLugar");
            lug.innerHTML = "";
            valor = sel.options[sel.selectedIndex].value;
            //alert(sel.options[sel.selectedIndex].value);
            var direccion = "lugares.php?iddepartamento=" + valor;

            ajax.open("get", direccion, true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    resultado = JSON.parse(ajax.responseText);
                    for (i = 0; i < resultado.length; i++) {
                        //console.log(resultado[i]);
                        var opt = document.createElement('option');
                        opt.appendChild(document.createTextNode(resultado[i].lugar));
                        opt.value = resultado[i].id;
                        lug.appendChild(opt);
                    }

                }
            }
            ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
            ajax.send(); //llamar a la pagina

        }