<?php
include "cabecalho.php";
include "banner.php";
?>






<div class="container">
    <h2 class="display-5 text-center mb-5">Melhores Preços</h2>

    <div class="row mb-5">
        <?php
        include "conexao.php";

        $sql = "select * from pecas order by descricao,preco desc limit 4";
        $resultado = mysqli_query($conexao, $sql);

        // echo "<pre>";
        // print_r($resultado);
        // exit();
        while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="col-3 text-center">
                <img src="<?= $linha['foto'] ?>" class="img-fluid fotosss">
                <a href="itens.php?id=<?= $linha['id']; ?>" class="btn btn-outline-success mb-3 btn">Detalhes</a>

            </div>
            <?php
        }

        ?>

    </div>

    <div class="row mt-5">
        <div class="col-4 align-content-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit vero aut dolorem explicabo, maiores
                provident impedit, inventore dolorum magnam repellat error omnis voluptates exercitationem ullam quam
                nihil eum vel praesentium?</p>

        </div>
        <div class="col-8 mb-5">
            <img src="img/benner2.jpg" class="img-fluid">
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-8 mb-5">
            <img src="img/banner1.jpg" class="img-fluid">
        </div>
        <div class="col-4 align-content-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit vero aut dolorem explicabo, maiores
                provident impedit, inventore dolorum magnam repellat error omnis voluptates exercitationem ullam quam
                nihil eum vel praesentium?</p>

        </div>

    </div>



    <?php
    include "rodape.php"
        ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    </body>

    </html>