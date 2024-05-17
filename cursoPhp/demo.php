<?php
$name = "Miguelito";
$age = 10 + "8";
define('Logo_Url', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/2560px-Webysther_20160423_-_Elephpant.svg.png');
const pi =3.14;

// if ($age > 40){
//     echo "<h1>Eres viejo</h1>";
// } elseif ($name == "Miguel"){
//     echo "Eres Miguelito y joven";
// } else {
//     echo "<h1>Eres joven </h1>";
// } 

$output="Mi primer app con " . $name;
$output .= " 😎 con una edad de $age";
$outputAge = match(true){
    $age < 2    => "Eres un bebe",
    $age < 10   => "Eres un niño",
    $age < 18   => "Eres un Adolescente",
    $age == 18  => "Eres mayor de edad",
    default     => "no entras en parametros",
};

$bestLanguages = ["Python","php","java","javascript"];
$bestLanguages [] = "C#";
$bestLanguages [1] = "typeScript";


?>

<img src="<?= Logo_Url?>" alt="">
<h1>
    <?=$output?>
</h1>
    <br>
    <?=pi?>
    <?=$outputAge?>

<ul>
    <?php foreach ($bestLanguages as $key => $lenguaje): ?>
        <li><?=$key . " " . $lenguaje?></li>
    <?php endforeach; ?>
</ul>


<br>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    img{
        width: 30%;
    }
</style>