<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <?php include 'includes/menu.php'; ?>

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
                        <p><strong>Mgr. Jana Novotná</strong><br>
                        Vedoucí zákaznické podpory<br>
                        E-mail: jana.novotna@forhealth.cz</p>
                    </div>
                </div>
            </div>

            <!-- MAPA -->
            <div class="contact__map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.226275490787!2d12.9303!3d49.4392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDI2JzIxLjIiTiAxMsKwNTUnNTEuMSJF!5e0!3m2!1scs!2scz!4v0000000000"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>