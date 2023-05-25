<?php
$num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_SPECIAL_CHARS);
$num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_SPECIAL_CHARS);
$num3 = filter_input(INPUT_POST, "num3", FILTER_SANITIZE_SPECIAL_CHARS);

if (($num1 > $num2) and ($num1 > $num3) and ($num2 > $num3)){
    $maior = $num1;
    $meio = $num2;
    $menor = $num3;
    $resultado = "$maior, $meio e $menor";
}elseif (($num1 > $num2) and ($num1 > $num3) and ($num3 > $num2)){
    $maior = $num1;
    $meio = $num3;
    $menor = $num2;
    $resultado = "$maior, $meio e $menor";
}elseif (($num2 > $num1) and ($num2 > $num3) and ($num3 > $num1)){
    $maior = $num2;
    $meio = $num3;
    $menor = $num1;
    $resultado = "$maior, $meio e $menor";
}elseif (($num2 > $num1) and ($num2 > $num3) and ($num1 > $num3)){
    $maior = $num2;
    $meio = $num1;
    $menor = $num3;
    $resultado = "$maior, $meio e $menor";
}elseif (($num3 > $num1) and ($num3 > $num2) and ($num1 > $num2)){
    $maior = $num3;
    $meio = $num1;
    $menor = $num2;
    $resultado = "$maior, $meio e $menor";
}elseif (($num3 > $num1) and ($num3 > $num2) and ($num2 > $num1)){
    $maior = $num3;
    $meio = $num2;
    $menor = $num1;
    $resultado = "$maior, $meio e $menor";
}elseif (($num1 == $num2) and ($num1 == $num3) and ($num2 == $num3)){
    $resultado = "Os três números são iguais";
}


require 'header.php'

?>

<main>
    <div>
    <p class="fs-2"> <?= $resultado; ?></p>
    </div>
</main>

<?php

require '../footer.php'  

?>