<?php include "cabecalho.php";
?>
 <style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
    .card {
        transition: transform 0.2s ease;
    }
    .card:hover {
        transform: scale(1.02);
    }
    </style>

    <div class="cotainer"> 
    <div class="row"> 
    <?php
    $servidor = 'localhost';
    $bd = 'bd_loja';
    $usuario = 'root';
    $senha = '';
 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
 
    if (!$conexao) {
        die("deu ruim" . mysqli_connect_error());
    }
    ?>
 
 
        <?php
 
    $sql = "select * from pecas  ";
    $resultado = mysqli_query($conexao, $sql);
    $avaliacao = mysqli_query($conexao, $sql);

   
 
    while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
     
     
     
     
            <div class="col-3 text-center mb-5">
                <img src="<?= $linha['foto'] ?>" class="img-fluid foto mb-2">
                <div class="card-body mb-2">
                    <h5 class="mb-2">
                        <?= $linha['nome']; ?>
                    </h5>

                    <p class="card-text mb-3">
                        <?= $linha['categoria']; ?>
                    </p>
                    <a href="itens.php?id=<?= $linha['id']; ?>" class="btn btn-outline-success mb-3">Detalhes</a>
                </div>
     
            </div>
     
     
     
            <?php
        }
        mysqli_close($conexao);
        ?>
     

    </div>
    </div>


    <?php include "rodape.php";
?>
    


  
