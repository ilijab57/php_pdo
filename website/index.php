<?php

require_once '../db_connection.php';

$id =$_GET['id'];
$sql = "SELECT * FROM formdata WHERE id = {$id}";
$stmt = $db_conn->query($sql);

$formData = $stmt->fetch(); 




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5e6e7e9c0f.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Дома</a>
          </div>
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#about_section">За нас</a></li>
              <li><a href="#products_section"><?= $formData['service_product'] ?></a></li>
              <li><a href="#contact_section">Контакт</a></li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="cover" style="background-image: url(<?= $formData['url_cover'] ?>);">
        <h1 id="title"><?= $formData['title'] ?></h1>
        <h3><?= $formData['subtitle'] ?></h3>
    </div>

    <div class="container-fluid about_us" id="about_section">
        <div class="row">
            <div class="col-md-8">
                <h2>За Нас</h2>
                <p><?= $formData['about'] ?></p>
            </div>
            <div class="col-md-4 phone_address">
                <h4>Телефон</h4>
                <p><?= $formData['phone'] ?></p>
                <h4>Локација</h4>
                <p><?= $formData['location'] ?></p>
            </div>
        </div>
    </div>

    <div class="container-fluid products" id="products_section">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center"><?= $formData['service_product'] ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $formData['product1_photo'] ?>" alt="">
                <h3>Опис на првиот продукт</h3>
                <h6><?= $formData['product1_desc'] ?></h6>
            </div>
            <div class="col-md-4">
                <img src="<?= $formData['product2_photo'] ?>" alt="">
                <h3>Опис на вториот продукт</h3>
                <h6><?= $formData['product2_desc'] ?></h6>
            </div>
            <div class="col-md-4">
                <img src="<?= $formData['product3_photo'] ?>" alt="">
                <h3>Опис на третиот продукт</h3>
                <h6><?= $formData['product3_desc'] ?></h6>
            </div>
        </div>
    </div>
    
    <div class="container-fluid contact" id="contact_section">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Контакт</h2>
            </div>
            <div class="col-md-5">
                <h3>Текст</h3>
                <p><?= $formData['description'] ?></p>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <form>
                    <div class="form-group">
                      <label for="">Име</label>
                      <input type="text" class="form-control" id="" placeholder="Вашето име">
                    </div>
                    <div class="form-group">
                        <label for="">Емаил</label>
                        <input type="email" class="form-control" id="" placeholder="Вашиот емаил">
                      </div>
                      <div class="form-group">
                        <label for="">Порака</label>
                        <textarea class="form-control" rows="5" placeholder="Вашата порака"></textarea>
                      </div>
                    <button type="submit" id="form_button" class="btn btn-default center-block">Испрати</button>
                  </form>
            </div>
        </div>
    </div>

    <div class="container-fluid footer">
        <div class="row">
            <div class="col-md-8">
                <h6>Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Accusamus perferendis, 
                    eligendi incidunt totam nostrum odio vero a
                    culpa. Obcaecati facilis id aliquid 
                    necessitatibus numquam blanditiis consequatur 
                    eius consequuntur libero corrupti. Delectus libero 
                    voluptatum atque pariatur quasi. Numquam dignissimos
                    sint nihil?</h6>
            </div>
            <div class="col-md-2 col-md-offset-2">
                <a href="<?= $formData['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                <a href="<?= $formData['facebook'] ?>"><i class="fab fa-facebook-square"></i></a>
                <a href="<?= $formData['tweeter'] ?>"><i class="fab fa-twitter-square"></i></a>
                <a href="<?= $formData['google_plus'] ?>"><i class="fab fa-google-plus-square"></i></a>
            </div>
        </div>

    </div>

<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
crossorigin="anonymous"></script>

</body>
</html>