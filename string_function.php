<?php
    $word = "Hello There";

    $phone = "+639943462821";

    echo(strtolower($word) . "<br>");
    echo(strtoupper($word) . "<br>");
    echo(trim($word) . "<br>");
    echo(str_pad($word, 20, "/") . "<br>");
    echo(strrev($word) . "<br>");
    echo(str_shuffle($word) . "<br>");
    echo(str_pad($word, 20, "/") . "<br>");


    echo("<br>" .  str_replace("+63", "0", $phone) . "<br>");
?>