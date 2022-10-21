<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mi Casita </title>
    <link rel="icon" type="image/x-icon" href="imagenes/icono.ico">
    <link rel="stylesheet" href="css/pruevas.css" />
    <link rel="stylesheet" href="css/productos.css" />
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

        <form class="col-12 Form_productos" action="php/producto_nuevo.php" method="POST">
            <label class="col-12" for="name">Producto</label>
            <input class="col-12" id="nombre_producto" type="text"/>
            <br><br>

            <label class="col-12" for="name">Descripcion</label>
            <input class="col-12" id="descripcion_producto" type="text"/>
            <br><br>

            <label class="col-12" for="name">Codigo de barras</label>
            <input class="col-10" id="codigo_producto" type="text"/>
              <a href=""><img class="camara_btn img-fluid col-1 "src="imagenes/camara.png" alt=""></a>
            
            <br><br>

            
            <select class="col-6" id="tienda1">
                <option value="walmart" selected>Walmart</option>
                <option value="tienda">Tienda de la esquina</option>
                <option value="Mercado">Mercado</option>
                <option value="Aurrera">Aurrera</option>
            </select>
            $<input class="col-5" id="tienda_1" type="text"/> 
            <br><br>

            <select class="col-6" id="tienda2">
                <option value="walmart" selected>Walmart</option>
                <option value="tienda">Tienda de la esquina</option>
                <option value="Mercado">Mercado</option>
                <option value="Aurrera">Aurrera</option>
            </select>
            $<input class="col-5" id="tienda_1" type="text"/> 
            <br><br>

            <select class="col-6" id="tienda3">
                <option value="walmart" selected>Walmart</option>
                <option value="tienda">Tienda de la esquina</option>
                <option value="Mercado">Mercado</option>
                <option value="Aurrera">Aurrera</option>
            </select>
            $<input class="col-5" id="tienda_1" type="text"/> 
            <br><br>

            <input type="submit" value="Guardar">
        </form>

        <br>
        <!--tarjeta-->

            <div class="tarjeta">
                <div class="nombre_Producto">
                    Nombre
                </div>
                <div class="descripcion_Producto">
                    descripcion lo suficiente mente grande como para tener que usar varias filas
                </div>
                
                <div class="precios row">
                    <div class="tienda col-7">Walmart</div><div class="precio col-3">$1234</div>
                    <div class="tienda col-7">Tienda de la esquina</div><div class="precio col-3">$1234</div>
                    <div class="tienda col-7">Mercado</div><div class="precio col-3">$1234</div>   
                </div>
                  
            </div>
              
            <!--/tarjeta-->


        </body>
</html>
