<?php
session_start();
/*Verificar Login*/
$usuario = $_SESSION["usuario"];
$idUsuario = $_SESSION["idUsuario"];
$tipoUsuario = $_SESSION["tipoUsuario"];

if($tipoUsuario != 1 && $tipoUsuario != 2 && $tipoUsuario != 3 && $tipoUsuario != 4){
  header('Location: '.$HTTP_HOST.'/login/index.php?msg='.$msg);
}
function verificarAcesso($nivelAcesso){
    global $tipoUsuario;
    if($nivelAcesso < $tipoUsuario){
        $msg= "O usuário não possúi acesso a esta página";
        header('Location: '.$HTTP_HOST.'/login/index.php?msg='.$msg);
    }
}

?>