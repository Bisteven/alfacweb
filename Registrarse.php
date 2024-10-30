<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registro</title>
</head>
<body>
    
<form action="Login/Registrarse.php" method="POST">
        <h1>REGISTRARSE</h1>
        <hr>

            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET ['error']?> </p>
                <?php } ?>
                <br>
                <?php if(isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET ['success']?> </p>
                <?php } ?>
                <br>


            <label for="">
            <i class="fa-solid fa-user"></i>
            Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="Usuario">
            <label for="">
                <i class="fa-solid fa-users"></i>
                Nombre completo
            </label>
            <input type="text" placeholder="Ingrese nombre completo" name="Nombre_completo">
            <label for="">
                <i class="fa-solid fa-key"></i>
                Clave (4 digitos)
            </label>
            <input type="password" placeholder="Ingrese clave" name="Clave">
            <label for="">
                <i class="fa-solid fa-key"></i>
                Repetir clave
            </label>
            <input type="password" placeholder="Repita clave" name="RClave">

            <button type="submit">Registrarse</button>
            
            <a href="index.html" class="Boton_Ingresar">
                Ingresar
</a>
        </form>
</body>
</html>