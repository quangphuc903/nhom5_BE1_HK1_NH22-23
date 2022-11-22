<?php
    include "header.php";
?>

<?php 
        require "./models/config.php";
        require "./models/db.php";
        require "./models/product.php";

        $product = new Products();
    ?>
<div class="row">
    <?php 
            if (isset($_GET['keyword'])):
                # code...
                $keyword = $_GET['keyword'];
                $search = $product->search($keyword);
                foreach ($search as $value):
        ?>
    <!-- product -->
    <div class="col-md-4 clo-xs-12">
        <div class="product">
            <div class="product-img">
                <img src="./img/<?php echo $value['image'] ?>" alt="">
            </div>
            <div class="product-body">
                <p class="product-category">Category</p>
                <h3 class="product-name"><a href="#"> <?php echo $value['name'] ?></a></h3>
                <h4 class="product-price"> <?php echo number_format($value['price']) ?> VND</h4>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-btns">
                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                            view</span></button>
                </div>
            </div>
            <div class="add-to-cart">
                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
        </div>
    </div>
    <!-- /product -->
    
    <?php endforeach; endif; ?>
    </body>

    </html>