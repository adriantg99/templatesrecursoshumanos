<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/estilos.css">

    
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Inicio de Sesion</title>
</head>
<body>
<form action="validacionlogin.php" method="post" autocomplete="off">
    <div class="container-fluid p-0" >
        <div class="header" style="display: grid; height: 50%;">
            <img src="resources/header pantalla login.png" alt="" style="max-width: 100%;
            max-height: 100vh;">

        </div>
        <div class="card mx-auto" style="height: 300px; width: 300px; ">
        
            <div class="card-body">
                <h4 class="text-center">Inicio de Sesión</h4>
                <div class="row mt-5 ">
                    <label for="">Número de Control</label>
                </div>
                <div class="row mt-2">
                    <input type="text" placeholder="Número de control" name="UsuarioLogin">
                </div>
                <div class="row mt-2">
                    <label  for="">Contraseña</label>
                </div>
                <div class="row mt-2">
                    <input type="password" type="text" placeholder="Contraseña" name="ConstraseñaLogin">
                </div>
</br>
                <div class="alinear">
                    <div class="">
                    <input type="submit" class="botonlogin">
                    
                    </a>
                    </div>
                    
                
                </div>
               
              </div>

        </div>
       
        <div class="logobackground" style=" height:100%;">
            <img src="resources/logo gris claro copia.png" alt="" style="max-width: 400px; max-height: 400px; float: left;"> 
        </div>


    </div>

   
       
    
    </form>    
</body>
</html>