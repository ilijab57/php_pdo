<?php

require_once 'db_connection.php';

$msg = '';
$errors = [];
$fields = ['url_cover', 'title', 'subtitle', 'about', 'phone', 'location', 
    'service_product', 'product1_photo', 'product1_desc', 'product2_photo', 'product2_desc'
    , 'product3_photo', 'product3_desc', 'description'];
$urls = ['url_cover', 'linkedin', 'facebook', 'tweeter', 'google_plus'];
$values = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach($fields as $field){

        if(empty($_POST[$field])){
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }

    foreach($urls as $url){
        if(!empty($_POST[$url])){
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url_cover = $_POST['url_cover'])) {
                $errors[$url] = "invalid_" .$url;
            } else {
                $values[$url] = $_POST[$url];
            }
        }
    }
    
    if(empty($errors)){

        $insert_sql = "INSERT INTO formdata (url_cover, title, subtitle, about, phone,
        location, service_product, product1_photo, product1_desc, 
        product2_photo, product2_desc, product3_photo, product3_desc, 
        description, linkedin, facebook, tweeter, google_plus) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $db_conn->prepare($insert_sql);

        if(
            $stmt->execute([$values['url_cover'],$values['title'],$values['subtitle'],$values['about'],$values['phone'],
            $values['location'],$values['service_product'],$values['product1_photo'],$values['product1_desc'],
            $values['product2_photo'],$values['product2_desc'],$values['product3_photo'],$values['product3_desc'],
            $values['description'],$values['linkedin'],$values['facebook'],$values['tweeter'],$values['google_plus']])
        ) {
            $msg = "<span class='alert center-block text-center alert-info' role='alert'>Thank You! You have successfully submited the form.</span>";
        } else {
            $msg = "<div class='alert center-block text-center alert-danger' role='alert'>Somethig went wrong! Please try again.</div>";
        }
        
        }

        $id = $db_conn->lastInsertId();
        header("Location:website?id={$id}");

    }







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        #error{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid form_page">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-4 col-lg-offset-4">
                <h2>Еден чекор ве дели од Вашата веб страна</h2>

                <div>
                   <?php if(!empty($errors)) echo '<p id="error">Please fill the required fields.</p>' ;?>
                </div>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="form-group">
                        <label for="url_cover">Напишете го линкот до cover сликата:</label>
                        <input type="text" value="<?php if(isset($values['url_cover'])) echo $values['url_cover'] ?>" class="form-control" id="url_cover" name="url_cover" >
                    </div>
                    <div class="form-group">
                        <label for="title">Внесете го насловот:</label>
                        <input type="text" value="<?php if(isset($values['title'])) echo $values['title'] ?>" class="form-control" id="title" name="title" >
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Внесете го поднасловот:</label>
                        <input type="text" value="<?php if(isset($values['subtitle'])) echo $values['subtitle'] ?>"class="form-control" id="subtitle" name="subtitle" >
                    </div>
                    <div class="form-group">
                        <label for="about">Напишете нешто за Вас:</label>
                        <textarea class="form-control" value="<?php if(isset($values['about'])) echo $values['about'] ?>" id="about" name="about" rows="5" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="phone">Внесете го Вашиот телефон:</label>
                        <input type="text" value="<?php if(isset($values['phone'])) echo $values['phone'] ?>"class="form-control" id="phone" name="phone" >
                    </div>
                    <div class="form-group">
                        <label for="location">Внесете ја Вашата локација:</label>
                        <input type="text" value="<?php if(isset($values['location'])) echo $values['location'] ?>"class="form-control" id="location" name="location" >
                    </div>
                    <hr>
                    <select class="form-control" name="service_product">
                        <option value="Сервиси">Сервиси</option>
                        <option value="Продукти">Продукти</option>
                      </select>
                    <h5>Внесете URL од слика и опис на Вашите продукти или сервиси:</h5>
                    <div class="form-group image_url">
                        <label for="product1_photo">URL од сликата</label>
                        <input type="text" value="<?php if(isset($values['product1_photo'])) echo $values['product1_photo'] ?>" class="form-control" id="product1_photo" name="product1_photo" >
                    </div>
                    <div class="form-group">
                        <label for="product1_desc">Опис за сликата</label>
                        <textarea class="form-control" id="product1_desc" name="product1_desc" rows="5" >
                            <?php if(isset($values['product1_desc'])) echo $values['product1_desc'] ?>
                        </textarea>
                    </div>
                    <div class="form-group image_url">
                        <label for="product2_photo">URL од сликата</label>
                        <input type="text" value="<?php if(isset($values['product2_photo'])) echo $values['product2_photo'] ?>" class="form-control" id="product2_photo" name="product2_photo" >
                    </div>
                    <div class="form-group">
                        <label for="product2_desc">Опис за сликата</label>
                        <textarea class="form-control" id="product2_desc" name="product2_desc" rows="5" >
                            <?php if(isset($values['product1_desc'])) echo $values['product1_desc'] ?>
                        </textarea>
                    </div>
                    <div class="form-group image_url">
                        <label for="product3_photo">URL од сликата</label>
                        <input type="text" value="<?php if(isset($values['product3_photo'])) echo $values['product3_photo'] ?>" class="form-control" id="product3_photo" name="product3_photo" >
                    </div>
                    <div class="form-group">
                        <label for="product3_desc">Опис за сликата</label>
                        <textarea class="form-control" id="product3_desc" name="product3_desc" rows="5" >
                            <?php if(isset($values['product1_desc'])) echo $values['product1_desc'] ?>
                        </textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="description">Напишете нешто за Вашата фирма што луѓето треба да го знаат пред да ве контактираат:</label>
                        <textarea class="form-control" id="description" name="description" rows="5" >
                            <?php if(isset($values['product1_desc'])) echo $values['product1_desc'] ?>
                        </textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" value="<?php if(isset($values['linkedin'])) echo $values['linkedin'] ?>"  class="form-control" id="linkedin" name="linkedin" >
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" value="<?php if(isset($values['facebook'])) echo $values['facebook'] ?>" class="form-control" id="facebook" name="facebook" >
                    </div>
                    <div class="form-group">
                        <label for="tweeter">Tweeter</label>
                        <input type="text" value="<?php if(isset($values['tweeter'])) echo $values['tweeter'] ?>" class="form-control" id="tweeter" name="tweeter" >
                    </div>
                    <div class="form-group">
                        <label for="google_plus">Google+</label>
                        <input type="text" value="<?php if(isset($values['google_plus'])) echo $values['google_plus'] ?>" class="form-control" id="google_plus" name="google_plus" >
                    </div>
                    <hr>
                    
                    <button type="submit" class="btn btn-default center-block">Потврди</button>
                  
                </form>
                <?= $msg ?>

            </div>
        </div>
    </div>
</body>
</html>