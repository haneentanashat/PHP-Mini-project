<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light " >
      <a class="navbar-brand"><img src="img/H-removebg-preview.png" style="width:17%;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#"  style="color: black;">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="product.php"   style="color: black;">Products</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#footer"   style="color: black;">Contact us</a>
              </li>
          </ul>
      </div>
  </nav>
 
<!-- form -->
<h1> Add Product</h1>
<div  class="container" >
<form method="post" class="form" >
  <div class="form-group">
    <label for="formGroupExampleInput">Product Name:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Product price</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="price" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrption</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"   name="description" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1"   name="photo" required>
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="add" style="background: #b085ca;">Add item</button>
</form> 
<br>
</div>
<!-- table -->
<h1> All Product</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Product price</th>
      <th scope="col">Descrption</th>
      <th scope="col">Product photo</th>

    </tr>
  </thead>
  <tbody>
  <?php
if(isset($_POST['add'])){
  if (!(file_exists("img/" . $_FILES["photo"]["name"]))) {
    move_uploaded_file($_FILES["photo"]["tmp_name"], "img/" . $_FILES["photo"]["name"]);
}
    $_SESSION['pname'].=$_POST['name'].'<br>';
    $_SESSION['pprice'].=$_POST['price'].'<br>';
    $_SESSION['pdescription'].=$_POST['description'].'<br>';
    $_SESSION['pphoto'].=$_FILES["photo"]["name"] . '<br>';
    $productName = explode("<br>",$_SESSION ['pname']) ;
 $productPrice = explode("<br>",$_SESSION ['pprice']) ;
 $productDesc = explode("<br>",$_SESSION ['pdescription']) ;
 $productPhoto = explode("<br>",$_SESSION ['pphoto']) ;
 for($i=0; $i<count($productName)-1; $i++)
 {
echo ('<tr><td>' . $productName[$i] . '</td><td>' . $productPrice[$i] . '</td><td>' . $productDesc[$i] . '</td><td><img src="img/' . $productPhoto[$i] .' alt="Image" class="tImg" ></td></tr><br>');
}
}
?>
</tbody>
</table>
<button type="submit" class="btn btn-primary mb-2"  style="background: #b085ca;margin-left:2%;"><a href="product.php">Show item</a></button>

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