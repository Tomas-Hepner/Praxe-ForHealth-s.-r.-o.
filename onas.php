<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ForHealth</title>
</head>
<body>
    <div class="site">
                <?php
        include "includes/menu.php" 
        ?>
                <div class="aboutus__hero">
                    <img src="images/logo.png" alt="Company Logo" class="aboutus__logo">
                    <div class="aboutus__hero-text">
                        <h1>Our Origins</h1>
                        <p>
                            ForLife was founded with the vision to provide high-quality supplements that help people live healthier, happier lives. From humble beginnings, we’ve grown into a trusted brand committed to wellness.
                        </p>
                    </div>
                </div>

                <!-- Employees -->
                <div class="aboutus__employee aboutus__employee-right">
                    <img src="images/placeholder3.jpg" alt="Employee 1" class="employee__img">
                    <div class="employee__text">
                        <h1>John Doe</h1>
                        <p>John is our founder and head of product development. With over 10 years of experience in nutrition, he ensures that every supplement meets the highest standards of quality.</p>
                    </div>
                </div>

                <div class="aboutus__employee aboutus__employee-left">
                    <img src="images/placeholder2.jpg" alt="Employee 2" class="employee__img">
                    <div class="employee__text">
                        <h1>Jane Smith</h1>
                        <p>Jane manages our research and development team. Her dedication to innovation has driven the creation of some of our most popular products.</p>
                    </div>
                </div>

            </div>
    <?php include 'includes/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>