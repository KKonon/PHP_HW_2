<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Kirill_Kononovich" />
        <title>HW-PHP-2</title>
        
    </head>

    <body>
        <?php 

            echo "<hr>";
            echo 'Задание 1';
            echo "<hr>";

            $a = 5;

            if ($a >= 1){
                echo "Верно";
            } else {
                echo "Не верно";
            }

            echo "<hr>";
            echo 'Задание 2';
            echo "<hr>";

            $a = 658;

            $b = "$a";

            $b[1] = "0";

            echo "$b";

            echo "<hr>";
            echo 'Задание 3';
            echo "<hr>";

            $a = 3;
            $b = 5;

            if ($a >=1 && $b >= 3){
               $c = $a + $b;

               echo "Сумма: $c";
            } else {
                $c = $a - $b;

                echo "Вычитание: $c";
            }

            echo "<hr>";
            echo 'Задание 4';
            echo "<hr>";

            $string = "abcde";

            if ($string[0] == a){
                echo "Да";
            } else {
                echo "Нет";
            }

            echo "<hr>";
            echo 'Задание 5';
            echo "<hr>";

            $string = "123321";
           
            $String2 = $string[0]+$string[1]+$string[2];
            $String3 = $string[3]+$string[4]+$string[5];

            if ($String2 == $String3){
                echo "Да";
            } else {
                echo "Нет";
            }

            echo "<hr>";
            echo 'Задание 6';
            echo "<hr>";

            $gradusov = 360;
            $OneHour = 15;

            $suntime = ($gradusov / $OneHour);

            if ($suntime == 24){
                echo "Часов прошло $suntime";
            } else {
                echo "Невозможно определить время";
            }
        ?>
    </body>
</html>