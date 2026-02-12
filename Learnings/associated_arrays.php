<?php

    $users =["Fritz" => "Admin",
             "Symon" => "Staff",
             "Saur" => "User",        
    ];

    foreach($users as $key => $value){
        echo("{$key} is {$value} <br>");
    }

?>