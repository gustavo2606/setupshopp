<?php
include "cabecalho.php"
    ?>

<?php
    $servidor = 'localhost';
    $bd = 'bd_loja';
    $usuario = 'root';
    $senha = '';
 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
 
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
 
    while ($linha = mysqli_fetch_assoc($resultado)) {
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $linha['foto'] ?>" class="card-img-top" alt="">
            <h3><?= $linha['nome'] ?></h3>
            <p class="cards"><?=$linha['descricao']; ?></p>
            <p class="cards"><?=$linha['categoria']; ?></p>
            <p class="cards"><?=$linha['marca']; ?></p>
            <p class="cards"><?=$linha['preco']; ?></p>
            <a href="itens.php?id=<?= $linha['id'] ?>">
                <button>Ver Mais</button>
            </a>
        </div>
    <?php
    }
    ?>

<div class="card" style="width: 18rem;">
    <img src="img/pc1.jpg" class="card-img-top" alt="...">
    <div class="card-body">



 
</div>

























<?php
include "rodape.php"
?>
</body>

</html>