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
<?php


if(empty( $_SESSION['pname']) || empty($_SESSION['pprice']) || empty( $_SESSION['pdescription']))
{
    $message = "please fill in  a correct way!";   }
    
    else{
    $_SESSION['pname'];
    $_SESSION['pprice'];
    $_SESSION['pdescription'];
    $_SESSION['pphoto'];
$productName = explode("<br>",$_SESSION ['pname']) ;
 $productPrice = explode("<br>",$_SESSION ['pprice']) ;
 $productDesc = explode("<br>",$_SESSION ['pdescribtion']) ;
 $productPhoto = explode("<br>",$_SESSION ['pphoto']) ;
 for($i=0; $i<count($productName)-1; $i++){

    echo "<div class='col-md-4 mt-2'>
    <div class='card '>
    <div class='card-body'>
    <img class='card-img-top' src='Images/". $productPhoto[$i]." height='500px' width='10px'>
    </div>
    <div class='card-body'>
      <h4 class='mb-2'>". $productName[$i]."</h4>
      <p class='card-text'>Price :". $productPrice[$i]."</p>
      <p class='card-text'>". $productDesc[$i]."</p>
      </div>
    </div>
    </div>
  ";
}
    } 
?>
  <!--footer-->
  <footer class="text-center text-white" style="background-color: #f4b7b4 ;">
    <div class="container">
      <section class="mt-5">
        <div class="row text-center d-flex justify-content-center ">
        <img src="img/H-removebg-preview.png" width="20%" >
        </div>
      </section>
      <hr class="my-5" />
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
           
          </div>
        </div>
      </section>
    </div>
<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="background-color:rgb(179, 204, 255); font-size: 20px;">© 2022 Copyright|
    <a href="product.php"> Haneen</a>. All rights reserved.
</div>

</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>