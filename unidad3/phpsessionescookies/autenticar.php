<?php
echo $_POST['login']."<br>";
if ($_POST['cbRecordarUsuario']=='on')
   setcookie('usuario',$_POST['login'],time()+3600);
else
   setcookie('usuario','',0);

?>