<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="site">
        <?php include 'includes/menu.php'; ?>
            <div class="site__slideshow">
                <div class="slideshow__container">
                    <div class="slide fade">
                        <img src="images/placeholder.jfif" alt="Slide 1">
                    </div>

                    <div class="slide fade">
                        <img src="images/placeholder2.jpg" alt="Slide 2">
                    </div>

                    <div class="slide fade">
                        <img src="images/placeholder3.jpg" alt="Slide 3">
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
                    <img src="images/placeholder.jfif" alt="Product 1">
                    <p class="product__title">Protein Whey 1kg</p>
                    <p class="product__price">499 Kč</p>
                    <button class="product__button">Přidat do košíku</button>
                </div>

                <div class="product__card">
                    <img src="images/placeholder.jfif" alt="Product 2">
                    <p class="product__title">Protein Whey 1kg</p>
                    <p class="product__price">699 Kč</p>
                    <button class="product__button">Přidat do košíku</button>
                </div>

                <div class="product__card">
                    <img src="images/placeholder.jfif" alt="Product 3">
                     <p class="product__title">Protein Whey 1kg</p>
                    <p class="product__price">899 Kč</p>
                    <button class="product__button">Přidat do košíku</button>
                </div>

                <div class="product__card">
                    <img src="images/placeholder.jfif" alt="Product 4">
                    <p class="product__title">Protein Whey 1kg</p>
                    <p class="product__price">1099 Kč</p>
                    <button class="product__button">Přidat do košíku</button>
                </div>
                
                </div>
            </div>
    </div>
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>