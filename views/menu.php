<?php
    $counties = \App\Enums\CountryEnum::toArray();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>PHP Menu</title>
</head>

<body>
<div class="wrapper-form">
    <form action="/menu/get-price" method="post" id="menu_form" class="form-menu">
        <div class="text-center">
            Country
        </div>
        <div class="wrapper-radio">
            <?php foreach($counties as $key=>$value): ?>
            <input type="radio" id="country" name="country" value="<?= $key; ?>"
                   required>
            <label for="france"><?= $value; ?></label>
            <?php endforeach; ?>
        </div>
        <br/>
        <div class="text-center">
            <div>
                Food serving
            </div>
            <input type="number" id="serving" name="serving"
                   min="1" max="100" required>
        </div>
        <br/>
        <div class="wrapper-sauce">
            <div>
                Sauce
            </div>
            <input type="checkbox" id="sauce" name="sauce">
        </div>
        <br/>
        <div class="wrapper-compliment">
            <div>
                A compliment to the establishment: 1$
            </div>
            <input type="checkbox" id="compliment" name="compliment">
        </div>
        <br/>
        <div class="wrapper-result-button">
            <button>Get Result</button>
        </div>
    </form>
</div>
</body>

</html>
