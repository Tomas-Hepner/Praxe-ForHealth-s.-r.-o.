<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


        <div class="header">
            <div class="header__logo">
                <a href="index.php"><img src="images/ForHealth_logo.png" alt=""></a>
            </div>
            <div class="header__menu">
                <ul class="header__menu__list">
                    <li><a href="nabidka.php"><p>Produkty<p></a></li>
                    <li><a href="onas.php"><p>O nás<p></a></li>
                    <li><a href="kontakt.php"><p>Kontakt<p></a></li>
                </ul>
            </div>

            <div class="header__account">
                <a href=""><img src="images/account.png" alt=""></a>
            </div>
            <div class="header__shopping__cart">
                <a href="/cart.php"><img src="images/basket.png" alt=""></a>
            </div>

        </div>
