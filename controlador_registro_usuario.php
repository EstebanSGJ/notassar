<?php
if(!empty($_POST[Registrar])){
if(empty($_POST[NombreU])or empty$_POST[App_u])or empty$_POST[Apm_u])or empty$_POST[Tipo])or empty$_POST[Area])or empty$_POST[Correo])or empty$_POST[Contrasena])or empty$_POST[Empresa]) )
echo '<div class="alerta">Uno de los campos esta vacio</div>'
}else{
    $nombre=$_POST[NombreU];
    $App_u=$_POST[App_u];
    $Apm_u=$_POST[Apm_u];
    $Tipo=$_POST[Tipo];
    $Area=$_POST[Area];
    $Correo=$_POST[Correo];
    $Contrasena=$_POST[Contrasena];
    $Empresa=$_POST[Empresa];
    $sql=$conexion->query(" Insert into usuarioss(NombreU,App_u,Apm_u,Tipo,Area,Correo,Pass,Id_empresa)values( '$nombre',' $App_u',' $Apm_u',' $Tipo','$Area','$Correo','$Contrasena',' $Empresa' )");
if($sql==1){
    echo '<div class="registradousuario">Usuario registrado Correctamente</div>'
}else{
    echo '<div class="errorregistrousuario">Error al registrar</div>'
}

}



?>