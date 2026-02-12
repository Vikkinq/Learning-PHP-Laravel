<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="activity_arrays.php" method="post">
        <div>
            <label for="key">Enter Key: </label>
            <input type="text" placeholder="Enter Key" name="key">
        </div>
    </form>
</body>
</html>

<?php 

    $schools = ["Iloilo" => "University of San Agustin",
                "Manila" => "La Salle",
                "America" => "Harvard University",
    ];

    $input = $_POST["key"];

    if(!array_key_exists($input, $schools)){
        echo("No Value or Key Found inside Array");
    } else {
        echo "<br> Key is {$input}, Value is {$schools[$input]}";
    };
?>
