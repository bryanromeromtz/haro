<?php
session_start();

require 'apis/conexion.php';

if(!empty($_POST['usuario']) && !empty($_POST['contrasena'])){
    //$usuario=$_POST['usuario'];
    $usuario = mysqli_real_escape_string($conex, $_POST['usuario']);
    $contrasena = mysqli_real_escape_string($conex, $_POST['contrasena']);
    //$contrasena=$_POST['contrasena'];

    $consulta = "SELECT *FROM usuarios where usuario = '$usuario' and contrasena = '$contrasena'";
    $resultado = mysqli_query($conex,$consulta);
    //$filas = mysqli_num_rows($resultado);
    //$filas = mysqli_fetch_array($resultado);
    
    if($filas = mysqli_fetch_array($resultado)){
        //header("location:mostrar.php");
        $_SESSION['id']=$filas['id'];
        $_SESSION['usuario']=$filas['usuario'];
        $_SESSION['contrasena']=$filas['contrasena'];
        ?>
    <script>
        location.href = "https://pruebas.seminuevosharo.mx/mostrar.php";
    </script>
        <?php
    }else{
        ?>
        <?php
        include('login.php');
        ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Datos Incorrectos!'
        })
        </script>
        <?php
    }
}else{
    
        include('login.php');
        
       ?>
       <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ingrese sus Datos'
        })
        </script>
       <?php
}
?>