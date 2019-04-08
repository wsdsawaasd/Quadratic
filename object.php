<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    ax^2 <input type="number" name="a">
    +bx <input type="number" name="b">
    +c <input type="number" name="c">
    =0 <input type="submit">
</form>
<?php
include "QuadraticEquation.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $check = new QuadraticEquation($a,$b,$c);
   echo $check->getRoot2();
   echo "<br/>";
   echo $check->getRoot1();
}
?>


</body>
</html>
