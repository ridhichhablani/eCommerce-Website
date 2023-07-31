<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mellow</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">
<div class="strip d-flex justify-content-between px-4 py-1 bg-black">
    <p class="font-rale font-size-12 text-black bg-black m-0"></p>
    <div>
    <img src="https://www.mivi.in/assets/icons/shipping-icon.svg" alt="Free shipping"><small><b>Free Shipping</b></small>

    <img src="https://www.mivi.in/assets/icons/warranty-icon.svg" alt="warraty"><small><b>1 Year Warranty</b></small>
</div>



        <div class="font-rale font-size-14">
            
         
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">
        <img src="https://www.mivi.in/assets/mivi-logo.svg" alt="Mivi">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                
            </ul>
            <a href="#" class="px-3  text-dark">
            <img src="./assets/login.png" alt="login">

            </a>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill ">
                    <span class="font-size-16 px-2 text-white"> <img src="https://www.mivi.in/assets/icons/shopping-bag.svg" alt="login"></span>
                    <span class=" "><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">
<style>
  .bg-black {
    background-color: black;
    color: white; /* Optional: Set the text color to white for better visibility */
  }
</style>

