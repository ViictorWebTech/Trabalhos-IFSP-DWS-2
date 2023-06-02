<?php

require 'header.php';

?>
<main>
    <section>
        <div class='row numeros text-center'>
            <div class="col">
                <a href="?num=1">Número 1</a>
            </div>
            <div class="col">
                <a href="?num=2">Número 2</a>
            </div>
            <div class="col">
                <a href="?num=3">Número 3</a>
            </div>
            <div class="col">
                <a href="?num=5">Número 5</a>
            </div>
            <div class="col">
                <a href="?num=20">Número 20</a>
            </div>
            <div class="col">
                <a href="?num=32">Número 32</a>
            </div>
            <div class="col">
                <a href="?num=37">Número 37</a>
            </div>

    </section>

    <section>
        <div class="row m-4">

            <?php

            if (isset($_GET['num'])) {
                $num = $_GET['num'];

                if ($_GET['num'] == 2) {
                    $afirmacao = "<span class='text-success fw-bold fs-2 text-decoration-underline px-2'>é</span>";
                } elseif ($_GET['num'] % 2 == 0) {
                    $afirmacao = "<span class='text-danger fw-bold fs-2 text-decoration-underline px-2'>não é</span>";
                } else {
                    $afirmacao = "<span class='text-success fw-bold fs-2 text-decoration-underline px-2'>é</span>";
                }
                echo "<p>O número <span class='fw-bold fs-2 text-decoration-underline'>$num</span> $afirmacao um número <span class='fw-bold fs-2 text-uppercase text-decoration-underline'>primo</span>.</p>";
            }

            ?>


        </div>
    </section>

</main>

<?php

require '../footer.php';

?>