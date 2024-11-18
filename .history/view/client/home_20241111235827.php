<?php
include "nav.php";
include 'slideshow.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="main-full">
                <div class="product-brand">
                    <h2>SmartPhone</h2>
                </div>
                <div class="product">
                    <?php foreach ($list_product as $product) : ?>
                        <div class="product-box">
                            <a href="?client=detail">
                                <div class="product-box-tag">
                                    <p>Trả góp 0%</p>
                                </div>
                                <br />
                                <div class="product-box-img">
                                    <img
                                        src="<?= $product->i ?>"
                                        alt="" />
                                </div>
                                <div class="product-box-title">
                                    <h3><?= $product->sp_name ?></h3>
                                    <div class="product-price">
                                        <p>34.000.000</p>
                                        <del>36.999.999</del>
                                    </div>
                                    <div class="product-describe">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="product-icon">
                                        <div class="icon-star">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <div class="icon-cart-like">
                                            <i id="cart" onclick="changeClass()" class="bx bx-cart-alt"></i>
                                            <i id="heart" onclick="changeClass2()" onclick="" class="bx bx-heart"></i>
                                        </div>
                                    </div>
                                </div>

                        </div>
                </div>
            <?php endforeach ?>
            </div>
        </main>
    </div>
</body>

</html>