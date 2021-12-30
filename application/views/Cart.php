<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/Style_Cart.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/7d24721300.js" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>

    <!-- Javascript -->
    <script src="js/cart.js"></script>
    
    <title>Keranjang Azryal Achmad Ramdani</title>

  </head>
  <body>
    <!--  Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?= base_url() ?>assets/img/logo.png" style="width: 162px; height: 34;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto ">
            <!-- Navbar -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo site_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Cart') ?>">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Profile') ?>">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Login') ?>">Sign In</a>
            </li>
          </ul>
          <!-- Search Button -->
          <form class="d-flex ms-auto my-4 my-lg-0">
            <input class="form-control me-2" type="search" placeholder="Search products" aria-label="Search">
            <button class="btn" type="submit">
              <img src="<?= base_url() ?>assets/img/Search.png" alt="" width="24" height="24">
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Banner -->
    <div class="bg-image">
      <img src="<?= base_url() ?>assets/img/bg.jpg" class="backgorund" alt="Responsive image">
        <div class="backgorund-text">
          <h2>YOUR CART LIST</h2>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!-- Awal Content Keranjang -->
    <div class="container mt-5 mb-5">
      <table>
        <tr style="font-size: 16px;">
          <th>Products</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="<?= base_url() ?>assets/img/mouse.jpg">
              <div class="button-heart">
                <h5 style="font-size: 22px">Razer DeathAdder Essential - Black</h5>
                <h7>Price: $29.99</h7>
                <br>
                <button class="btn btn-danger">Remove</button>
                <a href="#">
                  <button class="btn btn-primary">Move to Wishlist</button>
                </a>
              </div>
            </div>
          </td>
          <td><input class="jumlah" type="number" value="1" name=""></td>
          <td>$29.99</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="<?= base_url() ?>assets/img/keyboard.jpg">
              <div class="button-heart">
                <h5 style="font-size: 22px">Razer Huntsman V2 - Linear Optical Switch - US</h5>
                <h7>Price: $199.99</h7>
                <br>
                <a><button class="btn btn-danger">Remove</button></a>
                <a href="#">
                  <button class="btn btn-primary">Move to Wishlist</button>
                </a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" name=""></td>
          <td>$199.99</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="<?= base_url() ?>assets/img/Headset.jpg">
              <div class="button-heart">
                <h5 style="font-size: 22px">Razer Kraken V3 X</h5>
                <h7>Price: $69.99</h7>
                <br>
                <a><button class="btn btn-danger">Remove</button></a>
                <a href="#">
                  <button class="btn btn-primary">Move to Wishlist</button>
                </a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" name=""></td>
          <td>$69.99</td>
        </tr>
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td>Total</td>
            <td>$379.97</td>
          </tr>
        </table>
        <button class="btn btn-danger btn-purchase" type="button">Checkout</button>
      </div>
    </div>
    <!-- Akhir Content Keranjang -->

    <!-- Awal Footer -->
    <footer class="bg-light text-black pt-5 pb-4">
      <div class="container text-left text-md-left">
        <div class="row text-left text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="mb-4"><img src="<?= base_url() ?>assets/img/logo.png" style="width: 162px; height: 34;"></h5>
            <p>Spartan merupakan website yang dibuat untuk memenuhi spesifikasi tugas besar matakuliah Pemrograman Web. Tugas ini dikerjakan dengan penuh semangat dan juga kerja cerdas.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Quick Links</h5>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">About</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Offers & Discounts</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Get Coupon</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Contact Us</a>
          </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-dark">New Products</h5>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Mouse</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Keyboard</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Headset</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Case</a>
          </p>
          </div>

          <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Support</h5>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Frequently Asked Questions</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Terms & Conditions</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Privacy Policy</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Report a Payment Issue</a>
          </p>
          </div>
        </div>

        <hr class="mb-4">
        <div class="row align-item-center">
          <div class="col-md-7 col-lg-8">
            <p>Copyright ©2021 | Created with <i class="fas fa-heart text-danger"></i> by <a href="https://www.instagram.com/azryal_mods/" class="text-decoration-none text-dark fw-bold">Azryal Mods</a></p>
          </div>
          
          <div class="col-md-1 col-lg-4">
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-black" style="font-size: 24px;"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-black" style="font-size: 24px;"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-black" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akihr Footer -->
    
    <!-- Awal Scrool Up -->
    <div>
        <script type="text/javascript">
        $(function(){
          $.scrollUp();
        });
        </script>
    </div>
    <!-- Akhir Scrool Up -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>