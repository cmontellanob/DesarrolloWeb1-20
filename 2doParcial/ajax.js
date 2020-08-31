var turno='x';
function cargar(pagina) {
var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
ajax.open("get", pagina, true); //a quien llamara
ajax.onreadystatechange = function() { // funcion de respuesta
if (ajax.readyState == 4) {
      document.getElementById("contenido").innerHTML = ajax.responseText;
}
}
ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
ajax.send(); //llamar a la pagina
}

function verificarLogueo(pagina) {
  if (document.getElementById("usuario").innerHTML=="")
  {
  	alert ("usted no esta autenticado");
  }
  else
  {
  cargar(pagina);
  }
}

function marcar(numero) {
 if (document.getElementById(numero).value=="")	
  {
  	document.getElementById(numero).value=turno;

  if (turno=='x')
  	  turno='o';
  	else
  	  turno='x';
  	  }
  	 else
  	 alert("casilla ya marcada"); 	

	document.getElementById("turno").innerHTML=turno;


}
function calcular()
{
	numero=document.getElementById("numero").value;
	hasta=document.getElementById("hasta").value;
	if (numero>0 && numero<=10)
    {
    	if (hasta>0)
    	{
	operaciones=document.getElementsByName("operacion");
	if (operaciones[0].checked)
		operacion='+';
	if (operaciones[1].checked)
		operacion='*';
	if (operaciones[2].checked)
		operacion='-';
	if (operaciones[3].checked)
		operacion='/';
	h="";
	for (var i = 1; i < hasta; i++) {
		switch (operacion){
			case "+":
				r=i+numero;
				break;
			case "-":
				r=i-numero;
				break;
			case "*":
				r=i*numero;
				break;
			case "/":
				r=i/numero;
				break;
					}
		h+=i+operacion+numero+"="+r+"<br>";				
	

		}
	document.getElementById("resultado").innerHTML=h;	
		}
		else
		alert("hasta fuera de rango");		
	}
	else
	{
		alert("numero fuera de rango");
	}


}
function autenticar() {
var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 

var parametros = "txtCorreo=" + encodeURI(document.getElementById('correo').value) + "&txtPassword=" + encodeURI(document.getElementById('password').value) + "&nocache=" + Math.random();
            //alert(parametros);

            ajax.open("post", "autenticar.php", true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    document.getElementById("resultado").innerHTML = ajax.responseText;
                    console.log(document.getElementById("user"));
                    if (document.getElementById("user")!=null)
                    {  document.getElementById("usuario").innerHTML=document.getElementById("user").innerHTML;
                	  document.getElementById("nivel").innerHTML=document.getElementById("niv").innerHTML;
            			}
            			else
            		{  document.getElementById("usuario").innerHTML="";
                	  document.getElementById("nivel").innerHTML="";
            			}
            				
                    
                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
            ajax.send(parametros); //llamar a la pagina
          
        }

function cambiarnivel(id,nivel) {


var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 

var parametros = "id=" + id + "&nivel=" + nivel + "&nocache=" + Math.random();
	
            //alert(parametros);

            ajax.open("post", "cambiarestado.php", true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    document.getElementById("resultado").innerHTML = ajax.responseText;
                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
            ajax.send(parametros); //llamar a la pagina
			verificarLogueo("listar.php");          


        }

function registrar() {

fecha=document.getElementById("fecha").value;
titulo=document.getElementById("titulo").value;
texto=document.getElementById("texto").innerHTML;

var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 

var parametros = "fecha=" + fecha + "&titulo=" + titulo + "&texto=" + texto +"&nocache=" + Math.random();
	
            //alert(parametros);

            ajax.open("post", "registrar.php", true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    document.getElementById("resultado").innerHTML = ajax.responseText;
                    verificarLogueo("listarnoticias.php");
                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
            ajax.send(parametros); //llamar a la pagina
         

 }
    
function verificarAdministrador(pagina) {
  if (document.getElementById("usuario").innerHTML=="")
  {
  	alert ("usted no esta autenticado");
  }
  else
  {
  if (document.getElementById("nivel").innerHTML=="1")
  	  cargar(pagina);
  	else
  	 cargar("listarnoticias.php");	
  }
}