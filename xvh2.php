<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form>
        <input type="text" name="num1"></p>
        <input type="text" name="num2"></p>
        <input type="submit" value="send">
    </form>
    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $a = $_GET["num1"];
        $b = $_GET["num2"];
        function NOD($a, $b)
        {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        $result = NOD($a, $b);
        echo "$result";
    }
    ?>
</body>

</html>