<!DOCTYPE html>
<html>
<head>
    <title>Лаба 9</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число больше 0 и меньше или равно 2:</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $b = 0;
            for($a=0; $a<$n; $a++){
                $b=$b+((((-1)**$a)*($x-1**($a+1)))/($a+1));
            }
        echo $b;
    ?>
</body>
</html>