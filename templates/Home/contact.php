<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="webroot/css/home.css" /> -->

    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/home.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/users.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/shop.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/contact.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/app.css" />
</head>

<body>

    <?= $this->element('navbar') ?>

    <section id="page-header">
        <div class="vercontact">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE.We love to hear from you!</p>
        </div>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fas fa-map"></i>
                    <p>567 Lê Duẩn, Ea Tam, Thành phố Buôn Ma Thuột, Đắk Lắk</p>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <p>Monday to Saturday: 7.00 am to 16.30 pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.9477623018074!2d108.02177751463324!3d12.651429825246206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31721de9c8157117%3A0x27954657201edaf5!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUw6J5IE5ndXnDqm4!5e0!3m2!1svi!2s!4v1653668561215!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <?= $this->Html->image('people/1.png') ?>
                <p><span>John</span> Marketing Manager<br> Phone: +84 025 420 398<br> Email: contact@gmail.com</p>
            </div>
            <div>
                <?= $this->Html->image('people/2.png') ?>
                <p><span>Smith</span> Marketing Manager<br> Phone: +84 078 540 768<br> Email: contact@gmail.com</p>
            </div>
            <div>
                <?= $this->Html->image('people/3.png') ?>
                <p><span>Emma</span> Marketing Manager<br> Phone: +84 452 895 745<br> Email: contact@gmail.com</p>
            </div>
        </div>
    </section>

    <?= $this->element('footer') ?>

    <script src="http://localhost:8080/SHOP/webroot/js/home.js"></script>
</body>
</html>