<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>
            Práctica 1 | Sistemas Operativos II            
        </title>
        <meta name="description" cntent="Escalabilidad de los SOD | Problemática: Cuellos de botella y
                spbrecarga en servidores | Práctica: liberar al sistema de trabajos que no sean necesarios">
        <meta name="author" content="Cinthia Marleny Huerta Valdivia">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        <h1>Sistemas Operativos II</h1>
        <p>Cinthia M. Huerta Valdivia</p>
        
        <div class="row">   
        <div class="col-lg-6">
        <p>Formulario en HTML</p>
        <form action="/action_page.php">
          Nombre: <br>
           <div class="input-group">
             <input type="text" pattern="[a-zA-ZÁÉÍÓÚáéíóú '.]{2,25}"
             class="form-control" title="Se necesita un nombre"  placeholder="Nombre" 
             aria-describedby="basic-addon2" required/>
          </div> <br>
          Correo: <br>
          <div class="input-group">
             <input type="email" pattern="^[a-zA-Z0-9.!#$%'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" 
             name="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon2" required/>
             <span class="input-group-addon" id="basic-addon2">@ejemplo.com</span>
          </div><br>
          Teléfono: <br>
           <div class="input-group">
             <input type="tel" class="form-control" placeholder="Teléfono" aria-describedby="basic-addon2"
             pattern="^[4|5]\d{9}$" required/>
          </div> <br>
          <input type="submit" value="Enviar" class="btn btn-primary"><br><br>
        </form>
        </div>

        <div class="col-lg-6">
        <p>Formulario en PHP</p>
        <form action="exito.php" method="post">
          Nombre: <br>
           <div class="input-group">
             <input type="text" name="nombre_s" class="form-control" placeholder="Nombre" aria-describedby="basic-addon2">
          </div> <br>
          Correo: <br>
          <div class="input-group">
             <input type="text" name="email_s" class="form-control" placeholder="E-mail" aria-describedby="basic-addon2">
             <span class="input-group-addon" id="basic-addon2">@ejemplo.com</span>
          </div><br>
          Teléfono: <br>
           <div class="input-group">
             <input type="text" name="tel_s" class="form-control" placeholder="Teléfono" aria-describedby="basic-addon2">
          </div> <br>
          <input type="submit" value="Enviar" class="btn btn-primary"><br><br>
        </form>
        </div>
        </div class="row">

        <?php if(isset($_GET[ 'mensaje'])){
          switch($_GET[ 'mensaje']){
          case '1': echo "
          <div class='callout callout-danger'>
          <h4><i class='fa fa-fw fa-ban'></i>Error de Ingreso!</h4>
          <p>Tu nombre de usuario o contraseña son incorrectos.</p>
          </div>";
          break;

          case '2':echo "
          <div class='callout callout-danger'>
          <h4><i class='fa fa-fw fa-ban'></i>Validación correcta!</h4>
          <p>El formato del email es correcto</p>
          </div>";
          break;

          case '3':echo "
          <div class='callout callout-danger'>
          <h4><i class='fa fa-fw fa-ban'></i>Error de validación!</h4>
          <p>El correo no tiene formato establecido</p>
          </div>";
          break;
          }}
        ?>

    </body>
</html>