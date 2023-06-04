<?php

require 'header.php'

?>

<main>
    <div class="formulario">
        <form action="exibicao.php" method="POST" class="row gy-2 gx-3">
            <div class="row justify-content-start">
                <div class="col-3 d-flex">
                    <label for="inicio" class="col-form-label col-4">Início: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="inicio" title="Número onde começara" required>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <label for="final" class="col-form-label col-4">Final: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="final" title="Número onde termina" required>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <label for="incremento" class="col-form-label col-4">Incremento: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="incremento" title="Número que define de quanto em quanto será a contagem" required min="0">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
    </div>
</main>

<?php

require '../footer.php'

?>
