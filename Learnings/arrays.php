<?php

    $foods = array("Apple", "Orange", "Water Melon");
    $users = ["Symon", "Fritz"];

    echo($foods[0] . "<br>");

    for($i = 0; $i < count($foods); $i++){
        echo($foods[$i] . "<br>");
    }

    foreach($users as $food){
        echo($food);
    }

?>