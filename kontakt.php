<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Kontakt</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
        <?php include 'includes/menu.php'; ?>
        <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


        <section class="contact">
            <h1>Kontaktujte nás</h1>
            <p class="contact__intro">Máte dotaz, přání nebo potřebujete poradit? Jsme tu pro vás.</p>

            <div class="contact__container">
                <!-- LEVÁ STRANA – formulář -->
                <div class="contact__form">
                    <form>
                        <label for="name">Jméno</label>
                        <input type="text" id="name" name="name" placeholder="Vaše jméno" required>

                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Váš e-mail" required>

                        <label for="subject">Předmět</label>
                        <input type="text" id="subject" name="subject" placeholder="Předmět zprávy">

                        <label for="message">Zpráva</label>
                        <textarea id="message" name="message" rows="6" placeholder="Vaše zpráva..." required></textarea>

                        <button type="submit" class="btn">Odeslat</button>
                    </form>
                </div>

                <!-- PRAVÁ STRANA – informace -->
                <div class="contact__info">
                    <h2>ForHealth s.r.o.</h2>
                    <p><strong>Adresa:</strong> U Zdraví 25, 344 01 Domažlice</p>
                    <p><strong>Telefon:</strong> +420 777 555 333</p>
                    <p><strong>E-mail:</strong> info@forhealth.cz</p>
                    <p><strong>Pracovní doba:</strong><br>
                       Po–Pá: 8:00 – 17:00<br>
                       So–Ne: zavřeno</p>

                    <div class="contact__socials">
                        <h3>Sledujte nás</h3>
                        <a href="#">Facebook</a> |
                        <a href="#">Instagram</a> |
                        <a href="#">LinkedIn</a>
                    </div>

                    <div class="contact__person">
                        <h3>Kontaktní osoba</h3>
                        <p><strong>Jan Kupeček</strong><br>
                        Vedoucí zákaznické podpory<br>
                        E-mail: jan.kupecek@forhealth.cz</p>
                    </div>
                </div>
            </div>

            <!-- MAPA -->
            <div class="contact__map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2594.108257786945!2d12.91894017670848!3d49.44467087141768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470ab06f42f49cc1%3A0xa36ec1100d2d4163!2zVnnFocWhw60gb2Rib3Juw6EgxaFrb2xhLCBPYmNob2Ruw60gYWthZGVtaWUgYSBTdMWZZWRuw60gemRyYXZvdG5pY2vDoSDFoWtvbGEgRG9tYcW-bGljZQ!5e0!3m2!1scs!2scz!4v1763104596724!5m2!1scs!2scz"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe
            </div>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>