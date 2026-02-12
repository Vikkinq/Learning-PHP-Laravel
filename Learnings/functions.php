<?php
    function person($name, $age){
        echo("Good Day, Lord {$name} <br>");
        echo("You are {$age} years old, milord <br> <br>");
    }

    function isEven($num){
        $result = $num % 2;
        if($result == 0){
            echo("Even");
        } else {
            echo("Odd");
        }
    }

    function calculator(float $num1, float $num2){
        $result = $num1 * $num2;
        echo("<br>Answer is: {$result}");
    }

    person("Symon", 24);
    isEven(3);
    calculator(2, 5);
    calculator(5, 5);
    calculator(5, 5); 
    
?>