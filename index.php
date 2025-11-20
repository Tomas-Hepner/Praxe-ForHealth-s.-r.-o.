<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>VÍtejte</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
    <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

    <div class="site">
        <?php include 'includes/menu.php'; ?>
            <div class="site__slideshow">
                <div class="slideshow__container">
                    <div class="slide fade">
                        <img src="images/slideshow1.png" alt="Slide 1">
                    </div>

                    <div class="slide fade">
                        <img src="images/produkt2.png" alt="Slide 2">
                    </div>

                    <div class="slide fade">
                        <img src="images/produkt3.png" alt="Slide 3">
                    </div>

                    <!-- Navigation arrows -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <!-- Dots -->
                    <div class="dots">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            </div>

            <div class="site__aboutus">
                <h1>ForHealth</h1>
                <h2>zdraví, které si zasloužíte</h2>
                <p>Kvalitní doplňky stravy pro vaši energii, vitalitu a každodenní pohodu. Naše produkty jsou pečlivě vybírané a testované, aby vám přinášely skutečné výsledky. Spolehněte se na ForHealth a dopřejte svému tělu to nejlepší každý den</p>
            </div>

            <div class="site__products">
                <div class="product__card">
                    <img src="images/produkt1.png" alt="Product 1">
                    <p class="product__title">ForHealth Advanced WHEY PROTEIN</p>
                    <p class="product__price">799 Kč</p>
                    <a href="products/product1.php"><button class="product__button">Podrobnosti</button></a>
                </div>

                <div class="product__card">
                    <img src="images/produkt2.png" alt="Product 2">
                    <p class="product__title">ForHealth Imuno GUMMIES 300</p>
                    <p class="product__price">379 Kč</p>
                    <a href="products/product2.php""><button class="product__button">Podrobnosti</button></a>
                </div>

                <div class="product__card">
                    <img src="images/produkt3.png" alt="Product 3">
                     <p class="product__title">ForHealth Premium Omega-3</p>
                    <p class="product__price">399 Kč</p>
                    <a href="products/product3.php""><button class="product__button">Podrobnosti</button></a>
                </div>

                <div class="product__card">
                    <img src="images/produkt4.png" alt="Product 4">
                    <p class="product__title">ForHealth Multi-Vitamín MAX</p>
                    <p class="product__price">349 Kč</p>
                    <a href="products/product4.php""><button class="product__button">Podrobnosti</button></a>
                </div>
                
                </div>
            </div>
    </div>
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>