<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mi Casita </title>
    <link rel="icon" type="image/x-icon" href="imagenes/icono.ico">
    <link rel="stylesheet" href="css/pruevas.css" />
    <link rel="stylesheet" href="css/inicio.css" />
    <link rel="stylesheet" href="css/general.css" />
    <!--bootstrap-->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    
  </head>
  <body>
    <?php include("template/menu.php"); ?>

    <div class="container-fluid principal" > <!--contenedor principal-->
        
       <!--  Regla  -->
       <div class="row regla" id="regla">
          <div class="col-1">1</div>
          <div class="col-1">2</div>
          <div class="col-1">3</div>
          <div class="col-1">4</div>
          <div class="col-1">5</div>
          <div class="col-1">6</div>
          <div class="col-1">7</div>
          <div class="col-1">8</div>
          <div class="col-1">9</div>
          <div class="col-1">10</div>
          <div class="col-1">11</div>
          <div class="col-1">12</div>
        </div>
      <!--fin regla-->
      <div class="col-12"> 
      <table class="table">
          <thead>
            <tr>
              <th>titulo1</th>
              <th>titulo2</th>
            </tr>
          </thead>
          <tr class="tarjeta"><!--tarjeta-->
            
            <td class="td_primera_fila"> 
              <input type="checkbox" id="cbox1"> 
              <div class="precio">$123</div>
            </td>

            <td class="td_segunda_fila">
                <div class="nombre_producto">
                  nombre del producto
                </div>
                <div class="precio">
                  descripcion lo suficiente mente grande como para tener que usar varias filas
                </div>
            </td>
            
          </tr><!--tarjeta-->

          <tr class="tarjeta"><!--tarjeta-->
            
            <td class="td_primera_fila"> 
              <input type="checkbox" id="cbox1"> 
              <div class="precio">$123</div>
            </td>

            <td class="td_segunda_fila">
                <div class="nombre_producto">
                  nombre del producto
                </div>
                <div class="precio">
                  una fila
                </div>
            </td>
          </tr><!--tarjeta-->
        </table>
      </div>


    </div><!--contenedor principal-->
    </body>
</html>
