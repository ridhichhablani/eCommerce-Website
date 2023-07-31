<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Our Products</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
            <div class="item py-5">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid">
                    </a>
                    <div class="text-center">
                        <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                        <div class="rating text-warning font-size-12"></div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12 color-primary-bg">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12 custom-btn">Add to Cart</button>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
            <?php } // closing foreach function ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<style>
  .custom-btn {
    background-color: black;
    color: white;
  }

  .custom-btn1 {
    background-color: #39ff14; /* neon green color */
    color: black;
  }

  /* Custom CSS to display two images in a row and cover the full screen */
  .owl-carousel.owl-theme {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .owl-carousel.owl-theme .item {
    flex-basis: 50%;
  }

  .owl-carousel.owl-theme .item .product {
    width: 100%;
    max-width: 400px; /* Adjust the maximum width of the product container as needed */
    margin: 0 auto;
  }
</style>
