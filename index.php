<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
    $title = 'First project of PHP';
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam minus aut numquam porro nesciunt! Facere sint itaque repellendus fugiat consequatur porro animi nisi, laborum magnam est, blanditiis dolorem maiores velit?';
    $nText = strlen($text);
    var_dump(strlen($text));
    $censoredWord = $_GET['censored'];
    $textCensored = str_ireplace ($censoredWord, '***', $text);
    ?>
    <h1><?= $title ?></h1>
    <p><?= $text?> <span style="color: blue">Word number(<?= $nText ?>)</span></p>
    <form action="" method="get">
        <label for="censored" style="color: red">Words banned</label>
		<input type="text" id="censored" name="censored">
        <button>Censored</button>
    </form>
    <p><?= $textCensored ?></p>
</body>
</html>