<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
include_once __DIR__ . '\..\Model\ClienteModel.php';

function ConsultarDatosUser($id)
{
    $datos = ConsultarDatosUsuarioModel($id);
    return mysqli_fetch_array($datos);
}


if(isset($_POST["btnIngresar"]))
{
    $Usuario = $_POST["Usuario"];
    $Contrasena = $_POST["Contrasena"];
    $datosUsuario = ValidarCredenciales($Usuario, $Contrasena);

    if($datosUsuario -> num_rows > 0)
    {
        $resultado = mysqli_fetch_array($datosUsuario);
        $_SESSION["sesionNombre"] = $resultado["nombre"];
        $_SESSION["sesionTipoUsuario"] = $resultado["tipoUsuario"];
        header("Location: index.php");
        
    }else{
        header("Location: login.php");
        
    }
}


function CargarUsuarios()
{
    $datosUsuarios = ListarUsuarios();

    if($datosUsuarios -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosUsuarios))
        {
            echo '<tr>';
            echo '<td>' . $resultado["nombre"] . '</td>';
            echo '<td>' . $resultado["primApellido"] . '</td>';
            echo '<td>' . $resultado["segApellido"] . '</td>';
            echo '<td>' . $resultado["username"] . '</td>';
            echo '<td>' . $resultado["correo"] . '</td>';
            echo '<td>' . $resultado["descripcion"] . '</td>';
            echo '<td>' . $resultado["contrasena"] . '</td>';
            //echo '<td><img src=' . $resultado["url"] . '</td>';
            echo '<td> 
            <a class="btn btn-primary" href="EditarPerfil.php?q=' . $resultado["id_usuario"]. '">Editar<a/>
            <a class="btn btn-primary" data-toggle="modal" data-target="#confirmDelete" data-backdrop="static" data-keyboard="false">Eliminar</a> 
            </td>';
            
            echo "</tr>";

            
        }
    }
}

if(isset($_POST["btnRegistrarse"]))
{   $Nombre = $_POST["Nombre"];
    $PrimApellido = $_POST["PrimerApellido"];
    $SegApellido = $_POST["SegundoApellido"]; 
    $Correo = $_POST["Correo"];
    $Username = $_POST["NombreUsuario"];
    $Contrasena = $_POST["Contrasena"];
     RegistrarUsuario($Nombre, $PrimApellido, $SegApellido, $Correo, $Username, $Contrasena);
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST["btnEliminar"])){
    $datos = EliminarUsuarios();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            if($Id == $fila["id_usuario"])
            EliminarUsuarios($Id);
        }
    }
}



if(isset($_POST["btnActualizar"]))
{
    $Id = $_POST["txtId"];
    $Nombre = $_POST["Nombre"];
    $PrimApellido = $_POST["PrimerApellido"];
    $SegApellido = $_POST["SegundoApellido"];
    $Correo = $_POST["Correo"];
    $Username = $_POST["NombreUsuario"];
    $Contrasena = $_POST["Contrasena"];
    

    ActualizarUsuarioModel($Id,$Nombre,$PrimApellido,$SegApellido,$Correo,$Username,$Contrasena); 
   
    header("Location: ADMINISTRACION.php");  
}



?> 