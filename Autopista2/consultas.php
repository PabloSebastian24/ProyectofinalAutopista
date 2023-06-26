
<?php
    include("conexion.php");
    include("index.php");


        $conection = mysqli_connect("localhost", "root", "", "fhammp")or die("Problemas con la conexion". mysqli_error($conection));
      
        
        if(isset($_POST['registro'])){

            if(strlen($_POST['Email'])>= 1 && strlen($_POST['password'])>=1)
            {
                $mail= trim($_POST['Email']);
                $contra= trim($_POST['password']);
                $consulta = mysqli_query($conection, "SELECT id,email,contra,nombre,adm,turno FROM usuarios WHERE email='$_REQUEST[Email]' AND contra='$_REQUEST[password]'") 
                or die("Problemas en el select:" . mysqli_error($conection));
                if ($reg= mysqli_fetch_array($consulta))
                {
                    if($reg['adm']==1)
                    {
                        header("Location:admin.php");
                    }
                    else
                    {
                        if($reg['adm']==0)
                        {
                            header("Location:Cabinas.html");
                        }
                        
                    }
                }else
                {
                 echo "Usuario incorrecto";
                }

            }else{
                echo "Por favor completa los datos ";
            }

        }
        
       
    

    ?>