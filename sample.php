<?php
    $styles1 = [
        "color" => "tomato",
        "font-size" => "3em",
        "background" => "#ccddcc",
        "padding" => "1em 0.61em"

    ];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach( $styles1 as $key => $value ) :?>
        <p><?= $key ; ?> : <?= $value; ?> ; </p>
    <?php endforeach ?>
</body>
</html>