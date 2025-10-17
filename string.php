<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $j = 0;
    $str = "fdfdf(xvhkiqq)sdsds";
    while ($str != "(") {
        $j++;
    }
    while ($str != ")")
        echo $j;
    ?>
    <br>
    <?php
    "</br>";
    $ilya = [
        'words' => 0,
        'xvh' => "hello my name is iliy and im idiot"
    ];
    for ($i = 0; $i < mb_strlen($ilya['xvh']); $i++) {
        if ($ilya['xvh'][$i] == " ") {
            $ilya['words']++;
        }
    }
    echo $ilya['words'] + 1;
    ?>
</body>

</html>