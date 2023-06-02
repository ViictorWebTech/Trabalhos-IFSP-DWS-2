<?php
$inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_SPECIAL_CHARS);
$final = filter_input(INPUT_POST, "final", FILTER_SANITIZE_SPECIAL_CHARS);
$incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_SPECIAL_CHARS);

$resultado = "";
$inicial = $inicio;

if ($inicio > $final) {
    $tipo = "Contador decrescente";

    while ($inicial >= $final) {
        $resultado .= "$inicial ";
        $inicial -= $incremento;
    }
} elseif ($inicial < $final) {
    $tipo = "Contador crescente";

    while ($inicial <= $final) {
        $resultado .= "$inicial ";
        $inicial += $incremento;
    }
}

require 'header.php'

?>


<main>
    <div>
        <h2>Parâmetros informados:</h2>
        <div class="bg-body-secondary p-2 mb-2 rounded">
            <div class="d-flex row fs-5">
                <div class="col-2">
                    <p>Início: <span class="fw-bold"><?= $inicio; ?></span></p>
                </div>
                <div class="col-2">
                    <p>Final: <span class="fw-bold"><?= $final; ?></span></p>
                </div>
                <div class="col-2">
                    <p>Incremento: <span class="fw-bold"><?= $incremento; ?></span></p>
                </div>
            </div>
        </div>
        <div>
            <h3> <?= $tipo; ?></h3>
            <p class=""> <?= $resultado; ?></p>
        </div>
</main>

<?php

require '../footer.php'

?>