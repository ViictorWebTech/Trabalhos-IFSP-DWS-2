<?php

require 'header.php'

?>

<main>
    <div class="formulario">
        <form action="ordenado.php" method="POST" class="row gy-2 gx-3">
            <div class="row justify-content-start">
                <div class="col-3 d-flex">
                    <label for="num1" class="col-form-label col-4">Num 1: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="num1" title="Número 1" required>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <label for="num2" class="col-form-label col-4">Num 2: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="num2" title="Número 2" required>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <label for="num3" class="col-form-label col-4">Num 3: </label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="num3" title="Número 3" required>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>