<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PEDRO Footwear</title>
    <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/women.css">
  <link rel="icon" href="images/logo-ccs-60.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/rose-icon64x64.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="white"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="ITST 304">
  <meta name="msapplication-TileImage" content="images/rose-icon96x96.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <body>
    <div class="container">
      <h1>PEDRO Footwear</h1>

      <nav>
        <ul>
         <li><a href="index.html">Home</a></li>
          <li><a href="sale.php">Sale</a></li>
          <li><a href="men.php">Men</a></li>
          <li><a href="women.php">Women</a></li>
          <li><a href="kids.php">Kids</a></li>
        </ul>
      </nav>
    </div>
    <main>
      </nav>
          <div class="container-fluid">

            <div class="jumbotron">
              <h1 class="text-center">Kids</h1>
              <p class="text-center">“One thing I've learned is be comfortable in your skin, and more importantly, be comfortable in your shoes.”
                — Octavia Spencer.</p>
            </div>
          </div>
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                   <!-- Trigger/Open The Modal -->
                  <img src="images/kid1.jpg" class="img-thumbnail grayscale" id="myBtn">
                  <figcaption>Black Boots<br>$89.60</figcaption>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <div><img src="images/kid1.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Black Boots</h2><!--name of product-->
                            <h3>$89.60</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
                        </figure>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                  <img src="images/kid2.jpg" class="img-thumbnail grayscale" id="myBtn2">
                  <figcaption>Pink Boots<br>$89.60</figcaption>
                      <!-- The Modal -->
                      <div id="myModal2" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close2">&times;</span>
                          <div><img src="images/kid2.jpg" class="img-thumbnail grayscale">
                          </div>
                          <div class="product-price">
                          <form action="product.php" method="POST">
                          <h2>Pink Boots</h2><!--name of product-->
                          <h3>$89.60</h3>

                          <!-- Modal input -->
                          <input type="text" name="name" class="name" placeholder="Name" required><br>
                          <input type="text" name="address" class="address" placeholder="Address" required><br>
                          <input type="text" name="Size" class="size" placeholder="Size" required><br>
                          <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                          <input type="text" name="Color" class="color" placeholder="Color" required><br>
                          
                          <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                        </div><!--#product-price-->
                        </div>
                      </div><!--close of modal-->
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                  <img src="images/kid3.jpg" class="img-thumbnail grayscale" id="myBtn3">
                  <figcaption>Ribbon Doll Shoes<br>$89.70</figcaption>
                        <!-- The Modal -->
                        <div id="myModal3" class="modal">
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close3">&times;</span>
                            <div><img src="images/kid3.jpg" class="img-thumbnail grayscale">
                            </div>
                            <div class="product-price">
                            <form action="product.php" method="POST">
                            <h2>Ribbon Doll Shoes</h2><!--name of product-->
                            <h3>$89.70</h3>

                            <!-- Modal input -->
                            <input type="text" name="name" class="name" placeholder="Name" required><br>
                            <input type="text" name="address" class="address" placeholder="Address" required><br>
                            <input type="text" name="Size" class="size" placeholder="Size" required><br>
                            <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                            <input type="text" name="Color" class="color" placeholder="Color" required><br>
                            
                            <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                          </div><!--#product-price-->
                          </div>
                        </div><!--close of modal-->
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                  <img src="images/kid4.jpg" class="img-thumbnail grayscale" id="myBtn4">
                  <figcaption>White Dolls Shoes<br>$89.70</figcaption>
                      <!-- The Modal -->
                      <div id="myModal4" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close4">&times;</span>
                          <div><img src="images/kid4.jpg" class="img-thumbnail grayscale">
                          </div>
                          <div class="product-price">
                          <form action="product.php" method="POST">
                          <h2>White Doll Shoes</h2><!--name of product-->
                          <h3>$89.70</h3>

                          <!-- Modal input -->
                          <input type="text" name="name" class="name" placeholder="Name" required><br>
                          <input type="text" name="address" class="address" placeholder="Address" required><br>
                          <input type="text" name="Size" class="size" placeholder="Size" required><br>
                          <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                          <input type="text" name="Color" class="color" placeholder="Color" required><br>
                          
                          <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                        </div><!--#product-price-->
                        </div>
                      </div><!--close of modal-->
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                  <img src="images/kid5.jpg" class="img-thumbnail grayscale" id="myBtn5">
                  <figcaption>Rubber Shoes<br>$89.90</figcaption>
                      <!-- The Modal -->
                      <div id="myModal5" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close5">&times;</span>
                          <div><img src="images/kid5.jpg" class="img-thumbnail grayscale">
                          </div>
                          <div class="product-price">
                          <form action="product.php" method="POST">
                          <h2>Rubber Shoes</h2><!--name of product-->
                          <h3>$89.90</h3>

                          <!-- Modal input -->
                          <input type="text" name="name" class="name" placeholder="Name" required><br>
                          <input type="text" name="address" class="address" placeholder="Address" required><br>
                          <input type="text" name="Size" class="size" placeholder="Size" required><br>
                          <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                          <input type="text" name="Color" class="color" placeholder="Color" required><br>
                          
                          <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                        </div><!--#product-price-->
                        </div>
                      </div><!--close of modal-->
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                  <img src="images/kid6.jpg" class="img-thumbnail grayscale" id="myBtn6">
                  <figcaption>Black Snicker<br>$89.90</figcaption>
                      <!-- The Modal -->
                      <div id="myModal6" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close6">&times;</span>
                          <div><img src="images/kid6.jpg" class="img-thumbnail grayscale">
                          </div>
                          <div class="product-price">
                          <form action="product.php" method="POST">
                          <h2>Black Snicker</h2><!--name of product-->
                          <h3>$89.90</h3>

                          <!-- Modal input -->
                          <input type="text" name="name" class="name" placeholder="Name" required><br>
                          <input type="text" name="address" class="address" placeholder="Address" required><br>
                          <input type="text" name="Size" class="size" placeholder="Size" required><br>
                          <input type="text" name="Quantity" class="quantity" placeholder="Quantity" required><br>
                          <input type="text" name="Color" class="color" placeholder="Color" required><br>
                          
                          <button class="button" style="vertical-align:middle"><span>Submit</span></button></form><!--button-->
                        </div><!--#product-price-->
                        </div>
                      </div><!--close of modal-->
                </figure>
              </div>
              </div>
              
          
          
<script src="js/app.js"></script>
  </body>
</html>