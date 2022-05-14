<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>View product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand"><img src="img/H-removebg-preview.png" style="width: 25%;height: 30%;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="product.php"   style="color: black;">Products</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#footer"   style="color: black;">Contact us</a>
              </li>
          </ul>
      </div>
  </nav>

<div class="container d-flex justify-content-center mt-50 mb-50">
<div class="row">
<?php
if(empty( $_SESSION['pname']) || empty($_SESSION['pprice']) || empty( $_SESSION['pdescription']))
{
      echo "<div class= 'container'> <h1>please fill in  a correct way!</h1> </div>";}
    else{
    $_SESSION['pname'];
    $_SESSION['pprice'];
    $_SESSION['pdescription'];
    $_SESSION['pphoto'];
$productName = explode("<br>",$_SESSION ['pname']) ;
 $productPrice = explode("<br>",$_SESSION ['pprice']) ;
 $productDesc = explode("<br>",$_SESSION ['pdescription']) ;
 $productPhoto = explode("<br>",$_SESSION ['pphoto']) ;
 for($i=0; $i<count($productName)-1; $i++){
echo( "<div class='col-md-4 mt-2'>
<div class='card '>
<div class='card-body'>
 <div class='card-img-actions'> <img src='img/.$productPhoto[$i].' class='card-img img-fluid' width='96' height='350' alt='Image' class='tImg'> </div>
  <h4 class='mb-2'>". $productName[$i]."</h4>
  <p class='card-text'style='text-algin:center;' >Price :". $productPrice[$i]."</p>
  <p class='card-text'>". $productDesc[$i]."</p>
  <div> <i class='fa fa-star star'></i> <i class='fa fa-star star'></i> <i class='fa fa-star star'></i> <i class='fa fa-star star'></i></div>
  <div class='text-muted mb-3'></div> <button type='button'  class='btn bg-cart btn-primary' style='background-color:#efcbef;text-algin:center;' ><i class='fa fa-cart-plus mr-2'></i> Add to cart</button>
</div>
  </div>
  </div>");
}
    }  
?>
</div>
  </div>
  <!--footer-->
  <footer class="text-center text-white" style="background-color:#efcbef; ">
    <div class="container">
      <section class="mt-5">
        <div class="row text-center d-flex justify-content-center ">
        <img src="img/H-removebg-preview.png" width="20%" >
        </div>
        <div class="col-md-4 mb-md-0 mb-3">

<a href="#" class="fa fa-facebook" ></a>
<a href="#" class="fa fa-twitter" ></a>
<a href="#" class="fa fa-instagram" ></a>
</div>
      </section>
      <hr class="my-5" />
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
     
           
          </div>
        </div>
      </section>
    </div>
<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="background-color:#efcbef; font-size: 20px;">© 2022 Copyright|Haneen. All rights reserved.
</div>

</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>