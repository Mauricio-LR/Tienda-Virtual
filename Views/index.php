
<?php include_once 'Views/template-principal/header.php';?>

  <!-- Start Banner Hero -->
  <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL;?>assets/img/carrusel/1.jpg" alt="">
            </div> 
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left align-self-center">
                <h1 class="h1 text-util"><b> Nombre producto  (Laptop)</b>( Core i7 )</h1>
                <h3 class="h2">Subtitulo primer producto .</h3>
                <p>
                    "Descripccion articulo  primer ventana Inicio"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL;?>assets/img/carrusel/2.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">Segundo producto</h1>
                <h3 class="h2">sub titulo segundo</h3>
                <p>
                "Descripccion articulo  segunda ventana Inicio" 
                 <strong> "Descripccion articulo  segunda ventana Inicio" </strong> 
                 "Descripccion articulo  segunda ventana Inicio"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL;?>assets/img/carrusel/3.png" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">Tercer producto</h1>
                <h3 class="h2"> subtitulo producto 3</h3>
                <p>
                "Descripccion articulo  tercer  ventana Inicio" 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>
  </div>
  <!-- End Banner Hero -->


  <!-- Start Categories of The Month -->
  <section class="container py-5">
    <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Categorias</h1>
        <p>
          ( Descripccion del producto   aqui) 
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-3 p-5 mt-3">
        <a href="#"><img src="<?php echo BASE_URL;?>assets/img/categoria1.jpg" class="rounded-circle img-fluid border"></a>
        <h5 class="text-center mt-3 mb-3">Reloj</h5>
      </div>
      <div class="col-12 col-md-3 p-5 mt-3">
        <a href="#"><img src="<?php echo BASE_URL;?>assets/img/categoria2.jpg" class="rounded-circle img-fluid border"></a>
        <h2 class="h5 text-center mt-3 mb-3">Calzado</h2>
      </div>
      <div class="col-12 col-md-3 p-5 mt-3">
        <a href="#"><img src="<?php echo BASE_URL;?>assets/img/categoria3.jpg" class="rounded-circle img-fluid border"></a>
        <h2 class="h5 text-center mt-3 mb-3">Accessorios</h2>
      </div>
    </div>
  </section>
  <!-- End Categories of The Month -->


  <!-- Start Featured Product -->
  <section class="bg-light">
    <div class="container py-5">
      <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Productos</h1>
          <p>
            Texto sub ---   
                  </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="shop-single.html">
              <img src="<?php echo BASE_URL;?>assets/img/product1.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$240.00</li>
              </ul>
              <a href="shop-single.html" class="h2 text-decoration-none text-dark">Gym Weight</a>
              <p class="card-text">
                Descripccion cuadro 1 _____
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="shop-single.html">
              <img src="<?php echo BASE_URL;?>assets/img/product2.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$480.00</li>
              </ul>
              <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
              <p class="card-text">
              Descripccion cuadro 2 _____
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="shop-single.html">
              <img src="<?php echo BASE_URL;?>assets/img/product3.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$360.00</li>
              </ul>
              <a href="shop-single.html" class="h2 text-decoration-none text-dark">Summer Addides Shoes</a>
              <p class="card-text">
              Descripccion cuadro 3 _____
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Product -->


  <?php include_once 'Views/template-principal/footer.php';?>
</body>

</html>