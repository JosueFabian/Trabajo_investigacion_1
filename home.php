<?php 
session_start();
if (isset($_POST['cerrarSesion'])) {
    unset($_SESSION['usuario']);
    header('Location: index.php');
}

if (isset($_SESSION['usuario'])) { ?>
 <!DOCTYPE html>
  <html>
    <head>      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
            <link rel="stylesheet" type="text/css" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="#009688 teal">     
        <H1 class="white-text">Zapateria Don Pablo</H1>
        <H2 class="white-text">Bienvenido, <?php echo $_SESSION['usuario']; ?></H2>
        <div id="all" class="#e0f2f1 teal lighten-5">
                <div class="row">
                    <form class="col s12" action="registrar.php" method="POST">
                        
                <h4>Registro Clientes</h4>
                    <div class="row">
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nombre" name="nombre" type="text" class="validate" required >
                            <label for="nombre">Ingrese los nombres</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="apellido" name="apellido" type="text" class="validate" required="">
                            <label for="apellido">Ingrese los apellidos</label>
                        </div>                        
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">phone_iphone</i>
                            <input id="tele" type="tel" name= "telefono" class="validate" minlength="0" maxlength="8" required="">
                            <label for="tele">Ingrese el teléfono</label>                        
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">contact_mail</i>
                            <input id="dui" name="dui" type="text" class="validate" minlength="0" maxlength="9"  required="" >
                            <label for="dui">Ingrese el DUI sin guión</label>
                        </div>
                    </div>

                     <div class="row">
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">wc</i>
                            <input id="tipo" name="tipo" type="text" class="validate" required="">
                            <label for="tipo">Tipo de zapato</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">swap_vert</i>
                            <input id="canti" name="canti" type="number" class="validate" min="0" max="10" step="1" required="">
                            <label for="canti">Cantidad</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">today</i>
                            <input id="feInicio" name="feInicio" type="text" class="datepicker" required="">
                            <label for="feInicio">Fecha de inicio</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">today</i>
                            <input id="feEntrega" name="feEntrega" type="text" class="datepicker2" required="">
                            <label for="feEntrega">Fecha de entrega</label>
                        </div>
                        <div class="input-field col s12 m12 l5">
                            <i class="material-icons prefix">assignment</i>
                            <input id="detalle" name="detalle" type="text" class="validate" required="">
                            <label for="detalle">Detalle de reparación</label>
                        </div>  
                        <div class="input-field col s12 m6 l3">
                            <i class="material-icons prefix">attach_money</i>
                            <input id="precio" name="precio" type="text" class="validate" required="">
                            <label for="precio">Precio</label>
                        </div>
                    </div>

                    <div id="boton">
                        <button class="btn waves-effect waves-light" type="submit" value="registrar" name="action">Guardar datos <i class="material-icons right">save</i></button>
                        <br>         
                    </div>
                    </form>
                    <form action="GenerarFactura.php" method="POST">
                            <button class="btn waves-effect waves-light" type="" value="" name="" style="margin-bottom: 5%;">Generar Factura
                            <i class="material-icons right">assignment</i>
                        </button>
                        </form>
                        <form action="GenerarReporte.php" method="POST">
                        <div id="boton">
                            <button type="" class="btn btn-primary btn-block">Reporte de Facturas</button>
                        </div>
                    </form>
                        <form action="" method="POST">
                        <div id="boton">
                            <button type="" class="btn btn-primary btn-block"  name="cerrarSesion">Cerrar Sesion</button>
                        </div>
                    </form>
                </div>
            </div>
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            const calendario = document.querySelector('.datepicker');
            M.Datepicker.init(calendario, {
                format: 'dd-mmmm-yyyy'
            }); 
            const calendario2 = document.querySelector('.datepicker2');
            M.Datepicker.init(calendario2, {
                format: 'dd-mmmm-yyyy'
            }); 
        </script>
      
    </body>
  </html>
  <?php }else{
    header('Location: index.php');

  } ?>

  

   