<?php
include "cabecalho.php";
?>


<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/banner.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/banner.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<h2 class="letra1 ">Melhores Preços</h2>




<div class="row mb-5">
    <?php



    $servidor = 'localhost';
    $bd = 'bd_loja';
    $usuario = 'root';
    $senha = '';

    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

    if (!$conexao) {
        die("deu ruim " . mysqli_connect_error());
    }




    $sql = "select * from produtos order by avaliacao desc limit 4";
    $resultado = mysqli_query($conexao, $sql);

    // echo "<pre>";
    // print_r($resultado);
    // exit();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
        <div class="col-3">
            <img src="<?= $linha['foto'] ?>" class="img-fluid">
            <h3><?= $linha['nome']; ?></h3>
           
            <a href="itens.php?id=<?= $linha['id']; ?>" class="btn btn-outline-success mb-3">Ver Mais</a>
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