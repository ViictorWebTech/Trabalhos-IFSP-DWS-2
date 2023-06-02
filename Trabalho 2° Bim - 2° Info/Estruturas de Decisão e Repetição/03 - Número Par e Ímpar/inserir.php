<?php

require 'header.php'

?>

<main>
    <section class="espaco mb-4">
        <span class="formulario">
            <form action="?" method="GET" class="row gy-2 gx-3">
                <span class="row mb-3">
                    <span class="col-3 d-flex">
                        <label for="num" class="col-form-label col-4">Número: </label>
                        <span class="col-8">
                            <input type="number" class="form-control" name="num" title="Número" required>
                        </span>
                    </span>
                    <span class="col-3 d-flex">
                        <button type="submit" class="btn btn-success">Enviar</button>

                        <button type="reset" class="btn btn-warning">Limpar</button>

                    </span>
                </span>
            </form>
        </span>

    </section>
    <?php
    $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);

    if (isset($_GET['num'])) {
        if ($num % 2 == 0) {
            $tipo = "PAR";
            $conta = "DOBRO";
            $result = $num * 2;
            $numf = "<span class='p-3 mb-3 bg-success-subtle text-emphasis-success fs-3 m-2 border border-success border-2'>$num</span>";
            $tipof = "<span class='p-3 mb-3 bg-success-subtle text-emphasis-success fs-3 m-2 border border-success border-2 me-0'>$tipo</span>";
            $contaf = "<span class='p-3 mb-3 bg-success-subtle text-emphasis-success fs-3 m-2 border border-success border-2'>$conta</span>";
            $resultf = "<span class='p-3 mb-3 bg-success-subtle text-emphasis-success fs-3 m-2 border border-success border-2 me-0'>$result</span>";
        } else {
            $tipo = "ÍMPAR";
            $conta = "TRIPLO";
            $result = $num * 3;
            $numf = "<span class='p-3 mb-3 bg-warning-subtle text-emphasis-warning fs-3 m-2 border border-warning border-2'>$num</span>";
            $tipof = "<span class='p-3 mb-3 bg-warning-subtle text-emphasis-warning fs-3 m-2 border border-warning border-2 me-0'>$tipo</span>";
            $contaf = "<span class='p-3 mb-3 bg-warning-subtle text-emphasis-warning fs-3 m-2 border border-warning border-2'>$conta</span>";
            $resultf = "<span class='p-3 mb-3 bg-warning-subtle text-emphasis-warning fs-3 m-2 border border-warning border-2 me-0'>$result</span>";
        }
        echo "<section class='corpo'>";
        echo '<div class="row mb-4">';
        echo "<p>O número $numf é $tipof.</p>";
        echo "</div>";
        echo '<div class="row mb-4">';
        echo "<p>O $contaf de $numf é $resultf.</p>";
        echo " </div>";
        echo "</section>";
    }

    ?>





</main>

<?php

require '../footer.php'

?>