<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ForHealth</title>
      <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body>
    <div class="site">
                <?php
        include "includes/menu.php" 
        ?>
                <div class="aboutus__hero">
                    <img src="images/ForHealth_logo.png" alt="Company Logo" class="aboutus__logo">
                    <div class="aboutus__hero-text">
                        <p>
                            Jsme ForHealth, moderní česká firma se sídlem v Domažlicích, která vznikla z přesvědčení, že zdraví začíná u kvalitní výživy a přírody samotné. Naším cílem je přinášet lidem produkty, které podporují zdravý životní styl, dodávají energii a pomáhají tělu fungovat přirozeně.
                        </p>
                    </div>
                </div>

                <!-- Employees -->
                <div class="aboutus__employee aboutus__employee-right ">
                    <img src="images/bubakom.jpg" alt="Employee 1" class="employee__img">
                    <div class="employee__text">
                        <h1>Jakub Böhm</h1>
                        <p>John is our founder and head of product development. With over 10 years of experience in nutrition, he ensures that every supplement meets the highest standards of quality.</p>
                    </div>
                </div>

                <div class="aboutus__employee aboutus__employee-left ">
                    <img src="images/zibzib.jpg" alt="Employee 2" class="employee__img">
                    <div class="employee__text">
                        <h1>Tomáš Hepner</h1>
                        <p>Jane manages our research and development team. Her dedication to innovation has driven the creation of some of our most popular products.</p>
                    </div>
                </div>
                <div class="aboutus__employee aboutus__employee-right ">
                    <img src="images/kopec.jpg" alt="Employee 1" class="employee__img">
                    <div class="employee__text">
                        <h1>Jan Kupeček</h1>
                        <p>John is our founder and head of product development. With over 10 years of experience in nutrition, he ensures that every supplement meets the highest standards of quality.</p>
                    </div>
                </div>

                <div class="aboutus__employee aboutus__employee-left ">
                    <img src="images/spacir.jpg" alt="Employee 2" class="employee__img">
                    <div class="employee__text">
                        <h1>Filip Procházka</h1>
                        <p>Jane manages our research and development team. Her dedication to innovation has driven the creation of some of our most popular products.</p>
                    </div>
                </div>

                <div class="aboutus__employee aboutus__employee-right ">
                    <img src="images/kelak.jpg" alt="Employee 1" class="employee__img">
                    <div class="employee__text">
                        <h1>František Kellner</h1>
                        <p>John is our founder and head of product development. With over 10 years of experience in nutrition, he ensures that every supplement meets the highest standards of quality.</p>
                    </div>
                </div>

                <div class="aboutus__employee aboutus__employee-left ">
                    <img src="images/placeholder2.jpg" alt="Employee 2" class="employee__img">
                    <div class="employee__text">
                        <h1>Kristýna Pechová</h1>
                        <p>Jane manages our research and development team. Her dedication to innovation has driven the creation of some of our most popular products.</p>
                    </div>
                </div>

                                <div class="aboutus__employee aboutus__employee-right ">
                    <img src="images/halacka.jpg" alt="Employee 1" class="employee__img">
                    <div class="employee__text">
                        <h1>David Halačka</h1>
                        <p>Tomas Selby mafia</p>
                    </div>
                </div>
            </div>
    <?php include 'includes/footer.php'; ?>
    <script>
document.addEventListener("DOMContentLoaded", () => {
  const employeesRight = document.querySelectorAll(".aboutus__employee-right");
  const employeesLeft = document.querySelectorAll(".aboutus__employee-left");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        const element = entry.target;
        if (entry.isIntersecting) {
          // Get the Y position (for debug)
          const rect = element.getBoundingClientRect();
          const yPosition = window.scrollY + rect.top;
          console.log(`Element visible at Y: ${Math.round(yPosition)}px`);

          // Apply correct animation
          if (element.classList.contains("aboutus__employee-right")) {
            element.classList.add("animate__animated", "animate__fadeInLeft");
          } else if (element.classList.contains("aboutus__employee-left")) {
            element.classList.add("animate__animated", "animate__fadeInRight");
          }

          // Stop observing after first trigger
          observer.unobserve(element);
        }
      });
    },
    {
      threshold: 0.2 // Trigger when 20% of element is visible
    }
  );

  employeesRight.forEach(el => observer.observe(el));
  employeesLeft.forEach(el => observer.observe(el));
});

    </script>
</body>
</html>