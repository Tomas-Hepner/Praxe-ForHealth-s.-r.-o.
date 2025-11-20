<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkt</title>
    <link rel="stylesheet" href="../css/style.css">
            <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
</head>
<body>
  <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
        <div class="site">
            <div class="header">
                <div class="header__logo">
                    <a href="../index.php"><img src="../images/ForHealth_logo.png" alt=""></a>
                </div>
                <div class="header__menu">
                    <ul class="header__menu__list">
                        <li><a href="../nabidka.php"><p>Produkty<p></a></li>
                        <li><a href="../onas.php"><p>O nás<p></a></li>
                        <li><a href="../kontakt.php"><p>Kontakt<p></a></li>
                    </ul>
                </div>

                <div class="header__account">
                    <a href=""><img src="../images/account.png" alt=""></a>
                </div>
                <div class="header__shopping__cart">
                    <a href=""><img src="../images/basket.png" alt=""></a>
                </div>
            </div>

                    <div class="product-detail">
            <div class="product-detail__container">
                <!-- Obrázek produktu -->
                <div class="product-detail__image">
                    <img src="../images/produkt3.png" alt="Protein ForHealth">
                </div>

                <!-- Informace o produktu -->
                <div class="product-detail__info">
                    <h1>ForHealth Premium Omega-3</h1>
                    <p class="product-detail__shortdesc">
                        Vysoce koncentrovaný zdroj esenciálních mastných kyselin EPA a DHA pro zdravé srdce, mozek a zrak.
                    </p>
                    <p class="product-detail__price">Cena: 399 Kč</p>

                    <h3>Popis produktu</h3>
                    <p>
Vysoce koncentrovaný a čistý zdroj esenciálních mastných kyselin EPA a DHA. Podporuje zdravé srdce, mozkové funkce a ostrost zraku. Softgelové kapsle s vysokou biodostupností pro optimální denní příjem Omega-3
                    </p>

                    <h3>Parametry</h3>
                    <ul class="product-detail__params">
                        <li>Balení: 90 softgelových kapslí</li>
                        <li>Dávka: 1 kapsle</li>
                        <li>Obsah na dávku: EPA 500 mg, DHA 250 mg (Celkem 750 mg aktivních Omega-3)</li>
                        <li>Forma: Softgel kapsle</li>
                    </ul>


                    <a href="cart_add.php?id=3" class="btn btn--large">Objednat</a>
                </div>
            </div>
        </div>
            
        </div>

      <footer class="footer">
    <div class="footer__left">
      <h3>Sledujte nás</h3>
      <p>Instagram | Facebook | Twitter | LinkedIn</p>
    </div>

    <div class="footer__center">
      <h2>ForHealth</h2>
      <p>© 2025 ForHealth. Všechna práva vyhrazena.</p>
    </div>

    <div class="footer__right">
      <div class="footer__contact">
        <h3>Kontaktujte nás</h3>
        <p>Email: info@forhealth.cz</p>
        <p>Telefon: +420 123 456 789</p>
      </div>
      <div class="footer__button">
        <a href="https://example.com" target="_blank">Navštívit web</a>
      </div>
    </div>
  </footer>

</body>
</html>