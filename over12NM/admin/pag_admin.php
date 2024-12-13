<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host,$user,$pass);



        $datab = "over12";
       
        $db = mysqli_select_db($connection,$datab);

        

                           
                           
       

       
         $consulta = "SELECT * FROM login";
        
         $result = mysqli_query($connection,$consulta);
         if(!$result) 
         {
           echo "No se ha podido realizar la consulta";
         }
         
         echo "<table>";
         echo "<tr>";
         echo "<th><h1>id_usu</th></h1>";
         echo "<th><h1>Nombre</th></h1>";
         echo "<th><h1>Correo</th></h1>";
         echo "<th><h1>Contraseña</th></h1>";
         echo "<th><h1>Roll</th></h1>";
         echo "</tr>";
         
         while ($colum = mysqli_fetch_array($result))
         {
             echo "<tr>";
             echo "<td><h2>" . $colum['id_usu']. "</td></h2>";
             echo "<td><h2>" . $colum['nombre']. "</td></h2>";
             echo "<td><h2>" . $colum['correo'] . "</td></h2>";
             echo "<td><h2>" . $colum['contrasena'] . "</td></h2>";
             echo "<td><h2>" . $colum['roll'] . "</td></h2>";
             echo "</tr>";
         }
         //echo "</table>";
         
         mysqli_close( $connection );
         
            //echo "Fuera " ;
            echo'<a href="/over12NM/usuario/html/clientes.html">volver</a>';
         
         ?> 