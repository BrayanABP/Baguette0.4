<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['role'];
if ($varsesion == NULL || $varsesion ==='') {
  header("location: ../IniciarSesion.html");
  // session_destroy();
  die();
}
?>
<?php
include("conexion.php");
$conectar =conectar();
$select="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(1)";
$select1="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(2)";
$select2="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(3)";
$select3="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(4)";
$select4="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(5)";
$select5="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(6)";
$select6="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(7)";
$select7="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(8)";
$select8="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(9)";
$select9="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(10)";
$select10="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(11)";
$select11="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(12)";
$select12="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(13)";
$select13="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(14)";
$select14="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(15)";
$select15="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(16)";
$select16="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(17)";
$select17="SELECT id_producto,precio,cantidad_disponible,nombre_p,tipo_prod,peso,descripcion FROM produpanes WHERE id_producto=(18)";
$resul=$conectar->query($select);
while($data=$resul->fetch_assoc()){
    $id_producto=$data['id_producto'];
    $precio=$data['precio'];
    $cantidad_disponible=$data['cantidad_disponible'];
    $nombre_p=$data['nombre_p'];
    $tipo_prod=$data['tipo_prod'];
    $peso=$data['peso'];
    $descripcion=$data['descripcion'];
}
$resul=$conectar->query($select1);
while($data=$resul->fetch_assoc()){
    $id_producto1=$data['id_producto'];
    $precio1=$data['precio'];
    $cantidad_disponible1=$data['cantidad_disponible'];
    $nombre_p1=$data['nombre_p'];
    $tipo_prod1=$data['tipo_prod'];
    $peso1=$data['peso'];
    $descripcion1=$data['descripcion'];
}
$resul=$conectar->query($select2);
while($data=$resul->fetch_assoc()){
    $id_producto2=$data['id_producto'];
    $precio2=$data['precio'];
    $cantidad_disponible2=$data['cantidad_disponible'];
    $nombre_p2=$data['nombre_p'];
    $tipo_prod2=$data['tipo_prod'];
    $peso2=$data['peso'];
    $descripcion2=$data['descripcion'];
}
$resul=$conectar->query($select3);
while($data=$resul->fetch_assoc()){
    $id_producto3=$data['id_producto'];
    $precio3=$data['precio'];
    $cantidad_disponible3=$data['cantidad_disponible'];
    $nombre_p3=$data['nombre_p'];
    $tipo_prod3=$data['tipo_prod'];
    $peso3=$data['peso'];
    $descripcion3=$data['descripcion'];
}
$resul=$conectar->query($select4);
while($data=$resul->fetch_assoc()){
    $id_producto4=$data['id_producto'];
    $precio4=$data['precio'];
    $cantidad_disponible4=$data['cantidad_disponible'];
    $nombre_p4=$data['nombre_p'];
    $tipo_prod4=$data['tipo_prod'];
    $peso4=$data['peso'];
    $descripcion4=$data['descripcion'];
}
$resul=$conectar->query($select5);
while($data=$resul->fetch_assoc()){
    $id_producto5=$data['id_producto'];
    $precio5=$data['precio'];
    $cantidad_disponible5=$data['cantidad_disponible'];
    $nombre_p5=$data['nombre_p'];
    $tipo_prod5=$data['tipo_prod'];
    $peso5=$data['peso'];
    $descripcion5=$data['descripcion'];
}
$resul=$conectar->query($select6);
while($data=$resul->fetch_assoc()){
    $id_producto6=$data['id_producto'];
    $precio6=$data['precio'];
    $cantidad_disponible6=$data['cantidad_disponible'];
    $nombre_p6=$data['nombre_p'];
    $tipo_prod6=$data['tipo_prod'];
    $peso6=$data['peso'];
    $descripcion6=$data['descripcion'];
}
$resul=$conectar->query($select7);
while($data=$resul->fetch_assoc()){
    $id_producto7=$data['id_producto'];
    $precio7=$data['precio'];
    $cantidad_disponible7=$data['cantidad_disponible'];
    $nombre_p7=$data['nombre_p'];
    $tipo_prod7=$data['tipo_prod'];
    $peso7=$data['peso'];
    $descripcion7=$data['descripcion'];
}
$resul=$conectar->query($select8);
while($data=$resul->fetch_assoc()){
    $id_producto8=$data['id_producto'];
    $precio8=$data['precio'];
    $cantidad_disponible8=$data['cantidad_disponible'];
    $nombre_p8=$data['nombre_p'];
    $tipo_prod8=$data['tipo_prod'];
    $peso8=$data['peso'];
    $descripcion8=$data['descripcion'];
}
$resul=$conectar->query($select9);
while($data=$resul->fetch_assoc()){
    $id_producto9=$data['id_producto'];
    $precio9=$data['precio'];
    $cantidad_disponible9=$data['cantidad_disponible'];
    $nombre_p9=$data['nombre_p'];
    $tipo_prod9=$data['tipo_prod'];
    $peso9=$data['peso'];
    $descripcion9=$data['descripcion'];
}
$resul=$conectar->query($select10);
while($data=$resul->fetch_assoc()){
    $id_producto10=$data['id_producto'];
    $precio10=$data['precio'];
    $cantidad_disponible10=$data['cantidad_disponible'];
    $nombre_p10=$data['nombre_p'];
    $tipo_prod10=$data['tipo_prod'];
    $peso10=$data['peso'];
    $descripcion10=$data['descripcion'];
}
$resul=$conectar->query($select11);
while($data=$resul->fetch_assoc()){
    $id_producto11=$data['id_producto'];
    $precio11=$data['precio'];
    $cantidad_disponible11=$data['cantidad_disponible'];
    $nombre_p11=$data['nombre_p'];
    $tipo_prod11=$data['tipo_prod'];
    $peso11=$data['peso'];
    $descripcion11=$data['descripcion'];
}
$resul=$conectar->query($select12);
while($data=$resul->fetch_assoc()){
    $id_producto12=$data['id_producto'];
    $precio12=$data['precio'];
    $cantidad_disponible12=$data['cantidad_disponible'];
    $nombre_p12=$data['nombre_p'];
    $tipo_prod12=$data['tipo_prod'];
    $peso12=$data['peso'];
    $descripcion12=$data['descripcion'];
}
$resul=$conectar->query($select13);
while($data=$resul->fetch_assoc()){
    $id_producto13=$data['id_producto'];
    $precio13=$data['precio'];
    $cantidad_disponible13=$data['cantidad_disponible'];
    $nombre_p13=$data['nombre_p'];
    $tipo_prod13=$data['tipo_prod'];
    $peso13=$data['peso'];
    $descripcion13=$data['descripcion'];
}
$resul=$conectar->query($select14);
while($data=$resul->fetch_assoc()){
    $id_producto14=$data['id_producto'];
    $precio14=$data['precio'];
    $cantidad_disponible14=$data['cantidad_disponible'];
    $nombre_p14=$data['nombre_p'];
    $tipo_prod14=$data['tipo_prod'];
    $peso14=$data['peso'];
    $descripcion14=$data['descripcion'];
}
$resul=$conectar->query($select15);
while($data=$resul->fetch_assoc()){
    $id_producto15=$data['id_producto'];
    $precio15=$data['precio'];
    $cantidad_disponible15=$data['cantidad_disponible'];
    $nombre_p15=$data['nombre_p'];
    $tipo_prod15=$data['tipo_prod'];
    $peso15=$data['peso'];
    $descripcion15=$data['descripcion'];
}
$resul=$conectar->query($select16);
while($data=$resul->fetch_assoc()){
    $id_producto16=$data['id_producto'];
    $precio16=$data['precio'];
    $cantidad_disponible16=$data['cantidad_disponible'];
    $nombre_p16=$data['nombre_p'];
    $tipo_prod16=$data['tipo_prod'];
    $peso16=$data['peso'];
    $descripcion16=$data['descripcion'];
}
$resul=$conectar->query($select17);
while($data=$resul->fetch_assoc()){
    $id_producto17=$data['id_producto'];
    $precio17=$data['precio'];
    $cantidad_disponible17=$data['cantidad_disponible'];
    $nombre_p17=$data['nombre_p'];
    $tipo_prod17=$data['tipo_prod'];
    $peso17=$data['peso'];
    $descripcion17=$data['descripcion'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Catalogs.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
  <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="..assets/css/Default-Styles/EstilosIndex.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/PagarCarrito.css">
    <link rel="stylesheet" href="..assets/css/usuario/EstilosIndex.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
    <link rel="stylesheet" href="../assets/css/carrito/puntodepago.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/trajetas.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/efectivo.css">
    <link rel="stylesheet" href="../assets/css/Default-Styles/transferencia.css">
    <link rel="stylesheet" href="../assets/css/carrito/compras.css">
  <title>Productos | La Baguette</title>
</head>


<body>
  <div class="parent-container">
    <header>
      <div class="menu_encabezadop1">
        <div class="conteiner">
          <div class="social">
            <ul>
              <li>
                <a href="">
                  <i class="fab fa-facebook-f icon"></i>
                </a>
              </li>


              <li>
                <a href="#">
                  <i class="fa-brands fa-x-twitter"></i>
                </a>
              </li>


              <li>
                <a href="https://wa.me/+573154875304">
                  <i class="fab fa-whatsapp icon"></i>
                </a>
              </li>


              <li>
                <a href="">
                  <i class="fab fa-instagram icon"></i>
                </a>
              </li>
            </ul>


            <div class="user">


              <a href="usuario.php">
                <i class="fa fa-user"></i>
              </a>
              <a href="../php/CerrarSesion.php">
                <span>Cerrar sesion</span>
              </a>


            </div>


            <div class="shopping">
                            <i class="fa fa-shopping-cart" onclick="showCartMenu()"></i>
                            <div class="cart-menu" id="cartMenu">
                                <h2>Mi Carrito</h2>
                                <div class="direction">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Direccion de Residencia</p>
                                </div>
                                <hr>
                                <button class="close" onclick="hideCartMenu()">X</button>
                                <div class="cart-items">

                                </div>
                                <div class="buttons">
                                    <button onclick="button1()" id="button1">Seleccionar metodo de pago</button>

                                    <div class="cam">
                                    <a href="factura.php"><button onclick="subtotal()" class="bott" id="subtotal-button" id="subtotal">Pagar Subtotal: $0.00</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>


          </div>
        </div>
      </div>


      <div class="conteiner">


        <div class="menuconteiner">


          <div class="menu">


          <nav>
                            <a href="../php/iniciado.php"><p>INICIO</p></a>
                            <a href="#" class="has-submenu"><p>NOSOTROS</p></a>
                            <ul class="submenu">
                              <li><a style="border:#744f28 solid 1px;
                                border-radius: 12px;" class="MV" href="Nosotros.php">MISION Y VISION</a></li>
                              <li><a style="border:#744f28 solid 1px;
                                border-radius: 12px;" class="QS" href="Nosotros.php">QUIENES SOMOS</a></li>
                            </ul>
                        </nav>


            <div class="logo">
              <a href="iniciado.php"><img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
            </div>


            <nav>
              <a href="ContactosUsuario.php">
                <p>CONTACTOS</p>
              </a>
              <a href="Sucursales.php">
                <p>SUCURSALES</p>
              </a>
            </nav>


          </div>
        </div>
      </div>
    </header>


    <main>
      <div class="product-catalog" id="novedades">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>NOVEDADES</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="news" style="padding-top: 70px;">
          <div class="conteiner">
            <div class="row">
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p ?></h3>
                  <p class="precio">$<?php echo $precio ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion ?></p>
                      <p><b>Peso:</b> <?php echo $peso ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p1 ?></h3>
                  <p class="precio">$<?php echo $precio1?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p1 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion ?></p>
                      <p><b>Peso:</b> <?php echo $peso1 ?> gramos</p>
                      <p><b>Cantidad disponible:</b> <?php echo $cantidad_disponible1 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p2 ?></h3>
                  <p class="precio">$<?php echo $precio2 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p2 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion2 ?></p>
                      <p><b>Peso:</b><?php echo $peso2 ?> gramos</p>
                      <p><b>Cantidad disponible:</b> <?php echo $cantidad_disponible2 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p3 ?></h3>
                  <p class="precio">$<?php echo $precio3 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p3 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion3 ?></p>
                      <p><b>Peso:</b> <?php echo $peso3 ?> gramos</p>
                      <p><b>Cantidad disponible:</b> <?php echo $cantidad_disponible3 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p4 ?></h3>
                  <p class="precio">$<?php echo $precio4 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p4 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion4 ?></p>
                      <p><b>Peso:</b> <?php echo $peso4 ?> gramos</p>
                      <p><b>Cantidad disponible:</b> <?php echo $cantidad_disponible4 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p5 ?></h3>
                  <p class="precio">$<?php echo $precio5 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p5 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion5 ?></p>
                      <p><b>Peso:</b> <?php echo $peso5 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible5 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-catalog" id="panes" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>PANES</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="news" style="padding-top: 70px;">
          <div class="conteiner">
            <div class="row">
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p6 ?></h3>
                  <p class="precio">$<?php echo $precio6 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p6 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion6?></p>
                      <p><b>Peso:</b><?php echo $peso6 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible6 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p7 ?> </h3>
                  <p class="precio">$<?php echo $precio7 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p7 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion7 ?></p>
                      <p><b>Peso:</b> <?php echo $peso7?> gramos</p>
                      <p><b>Cantidad disponible:</b> <?php echo $cantidad_disponible7 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p8 ?></h3>
                  <p class="precio">$<?php echo $precio8 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p8 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion8 ?></p>
                      <p><b>Peso:</b> <?php echo $peso8 ?> gramos</p>
                      <p><b>Cantidad disponible:</b> <?php echo $cantidad_disponible8?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p9 ?> </h3>
                  <p class="precio">$<?php echo $precio9 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p9 ?> </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion9 ?></p>
                      <p><b>Peso:</b> <?php echo $peso9 ?> gramos</p>
                      <p><b>Cantidad disponible:</b> <?php echo $cantidad_disponible9?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p10 ?></h3>
                  <p class="precio">$<?php echo $precio10 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p10 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion10 ?></p>
                      <p><b>Peso:</b><?php echo $peso10 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible10 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p11 ?></h3>
                  <p class="precio">$<?php echo $precio11 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p11 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion11 ?></p>
                      <p><b>Peso:</b><?php echo $peso11 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible11 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-catalog" id="galletas" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>GALLETAS</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="news" style="padding-top: 70px;">
          <div class="conteiner">
            <div class="row">
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p12 ?></h3>
                  <p class="precio">$<?php echo $precio12 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p12 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion12 ?></p>
                      <p><b>Peso:</b><?php echo $peso12 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible12 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p13 ?></h3>
                  <p class="precio">$<?php echo $precio13 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p13 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion13 ?></p>
                      <p><b>Peso:</b><?php echo $peso13 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible13 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p14 ?></h3>
                  <p class="precio">$<?php echo $precio14 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p14 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion14 ?></p>
                      <p><b>Peso:</b><?php echo $peso14 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible14?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p15 ?></h3>
                  <p class="precio">$<?php echo $precio15 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p15 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion15?></p>
                      <p><b>Peso:</b> <?php echo $peso15 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible15 ?></p>
                      <button class="add-to-cart">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p16 ?></h3>
                  <p class="precio">$<?php echo $precio16 ?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p16 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion16 ?></p>
                      <p><b>Peso:</b><?php echo $peso16 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible16 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3><?php echo $nombre_p17 ?></h3>
                  <p class="precio">$<?php echo $precio17?></p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3><?php echo $nombre_p17 ?></h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p><?php echo $descripcion17 ?></p>
                      <p><b>Peso:</b><?php echo $peso17 ?> gramos</p>
                      <p><b>Cantidad disponible:</b><?php echo $cantidad_disponible17 ?></p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <div class=" button-pagination">


              <button>1</button>
              <button>2</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="conteiner">
        <div class="header">
          <div class="logo">
            <span></span>
          </div>
        </div>
        <hr>
        <div class="section">
          <div>
            <h2>Empresa</h2>
            <a href="Index.php">Inicio</a>
            <a href="ContactosUsuario.php">Contactanos</a>
            <a href="Nosotros.php">Nosotros</a>
          </div>
          <div>
            <h2>Servicios</h2>
            <a href="">Domicilios</a>
            <a href="">Pedios Especiales</a>
          </div>
          <div>
            <h2>Redes Sociales</h2>
            <div class="shop-cart">
              <ul>
                <li>
                  <a href="https://www.facebook.com/ronaldo.stiven52">
                    <i class="fab fa-facebook-f icon"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-x-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://wa.me/+573154875304">
                    <i class="fab fa-whatsapp icon"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/ronaldo07_rg/">
                    <i class="fab fa-instagram icon"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>


        <div class="Rights">
          <p>Copyright©2023LaBaguette. All right reserved</p>
          <p>Privacy Policy Terms and conditions</p>
        </div>
      </div>
    </footer>
  </div>
  </div>
  </div>
  <form class="todo">
        <div class="c-formulario" id="overlay">
            <div class="inputs" id="popup">
                <div class="welcome">
                    <div>
                        <br>
                        <p><button class="close cerrar" id="card" onclick="hideCard()">X</button>seleccione el metodo de pago con el que deseas pagar.</p>

                    </div>
                    <div class="linea"></div>
                    <div class="tarjeta"><input for="showPopup" type="checkbox" name="" id="botn2" onclick="datos()"><span>tarjeta Debito o Crédito</span></div>
                    <div class="tarjeta"><input for="showPopup" type="checkbox" name="" id="boton3" onclick="info()"><span>Transferencia Bancaria</span></div>
                    <div class="tarjeta"><input for="showPopup" type="checkbox" name="" id="boton4" onclick="date()"><span>Efectivo</span></div>
                </div>
                </br>

            </div>
        </div>



    </form>
    <form action="tarjetas.php" method="post" class="tarje">
        <div class="d-formu" id="Titular">
            <div class="inp" id="tipo">
                <div class="wel">
                    <div>
                        <strong>
                            <p><button type="button" class="close cerrar" id="card" onclick="hideCard()"><a href="iniciado.php">X</a></button>Tarjeta de crédito o débito</p>
                        </strong>
                    </div>
                </div>
                <div class="link">
                </div>

                <div>
                    <br>
                    <p class="tex">seleccione tipo de tarjeta</p>
                </div>
                <div class="card"><input name="opcion1" value="1" type="checkbox" id=""><span>Debito</span></div>
                <div class="card"><input name="opcion2" value="2" value="Credito" type="checkbox" name="Credito" id=""><span>Crédito</span></div>
                <div>
                    <p class="regis">
                    <p class="tex2">Número de tarjeta</p>
                    <input class="relleno" type="number" id="password" name="numero">
                </div>
                <div style="margin-top: 1rem;">
                    <div style="display: flex; padding-left: 0.5rem;">
                        <div>
                            <div class="tex3">MM</div>
                            <input class="relleno2" type="text" id="password" name="fvence">
                        </div>
                    </div>

                    <div>
                        <p>/</p>
                    </div>

                    <div>
                        <div class="tex3"> AA</div>
                        <input class="relleno2" type="text" id="password" name="pin">
                    </div>
                    <p class="tex1">Titular de la tarjeta</p>
                    <input class="rel" type="text" id="password" name="titular">
                    <div>
                        <div style="display: flex; margin-left: 10rem; padding-top: 2rem;">
                            <div class="bod ">
                                <button class="botons" type="submit">Guardar método de pago</button>
                            </div>
                            <div class="bod ">
                                <button class="botons" id="confi" type="button" onclick="confirma()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        </div>
        </div>

        </div>
        </div>
    </form>

    <form class="efecty">
        <div class="e-form" id="e-form">
            <div class="puts" id="puts">
                <div class="bien">
                    <div>
                        <strong>
                            <p><button type="button" class="close cerrar" id="card" onclick="hideCard()"><a href="iniciado.php">X</a></button>Efectivo</p>
                        </strong>
                    </div>
                </div>
                <div class="line"></div>
                <div class="regis">
                    <div class="tex">Metodo de pago</div>
                    <div>
                        <select class="seleccion">
                            <option value="CC" selected>Paypal</option>
                            <option value="CE" selected>Pse</option>
                            <option value="TI" selected>Efecty</option>
                            <option value="TI" selected>Seleccione el Banco</option>
                        </select>
                        <div class="bod ">
                            <div style="display: flex; margin-left: 20rem; padding-top: 2rem;">
                                <button class="botons" id="confi" type="button" onclick="confirma()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="pagos.php" method="post" class="f-lario" id="primero">
        <div class="label" id="segundo">
            <div class="poop">
                <div class="blob">
                    <div>
                        <strong>
                            <p><button type="button" class="close cerrar" id="card" onclick="hideCard()"><a href="iniciado.php">X</a></button>Transferencia Bancaria</p>
                        </strong>
                    </div>
                </div>
                <div class="lin"></div>
                <div>

                    <p class="texto">Tipo de cuenta</p>
                </div>
                <div class="tarjet"><input type="checkbox" name="opcion1" value="1"><span>Ahorros</span></div>
                <div class="tarjet"><input type="checkbox" name="opcion2" value="2"><span>Corrientes</span></div>
                <div class="regis">
                    <div class="texto">Banco (Campo Obligatorio)</div>
                    <div>
                        <select class="selecciones" name="banco">
                            <p>Texto de ejemplo <span class="dropdown-arrow"></span></p>
                            <option value="CC" selected>Banco Agrario</option>
                            <option value="CE" selected>Bancolombia</option>
                            <option value="TI" selected>Davivienda</option>
                            <option value="TI" selected>Banco Bogota</option>
                            <option value="TI" selected>Seleccione el Banco</option>
                        </select>
                    </div>
                </div>
                <div class="regis">
                    <p class="texto2">Correo Electronico (Campo Obligatorio)</p>
                    <div>
                        <input class="barras" type="text" id="tex" name="correo" required>
                    </div>
                    <p class="texto2">Numero de cuentas (Campo Obligatorio)</p>
                    <div>
                        <input class="barras" type="text" name="cuenta" required>
                    </div>
                </div>
                <div>
                    <div style="display: flex; margin-left: 10rem; padding-top: 2rem;">
                        <div class="bod">
                            <button class="botons" type="submit">Guardar método de pago</button>
                        </div>
                        <div class="bod ">
                            <button class="botons" id="confi" type="button" onclick="confirma()">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="parent-container">
        <!--Este código es responsable de mostrar un logotipo en el encabezado de una página web y vincularlo a otra página HTML..-->
        <main>
            <div class="conte" id="fondo">
                <div class="f-formu" id="parte">
                    <div class="inpots">
                        <div class="good">
                        </div>
                        <div>
                            <p class="texts">tu informacion de pago estara asegurada</p>
                        </div>
                        <div class="bodo">
                            <button class="botoneso" type="submit" value="Cambiar Contraseña"><a href="iniciado.php">Continuar con la compra</a></button>
                        </div>
                    </div>
                </div>

            </div>
    </div>
</body>
<script src="../assets/js/mainCatalogo.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/botonSubtotal.js"></script>
<script src="../assets/js/tipoPago.js"></script>
</html>