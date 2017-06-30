<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $a = 3;
        $b = 5;
        $a=$a+$b;
        $b=$b-$a;
        $b=-$b;
        $a=$a-$b;

        echo 'a = '. $a;

        echo 'b = '. $b;
        //var_dump($a == $b); //Сравнение по значению
        //var_dump((int)'012345');

        //var_dump((int)'123.0');
        //var_dump((float)'123.0');
        //var_dump((float)123.0 === (int)123.0);//Сравнение по значению и типу
        //var_dump((int)0===(int)'helo world');

        ?>
    </body>
</html>
