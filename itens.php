<?php
include "cabecalho.php";



$id = $_GET['id'] ?? 0;



$servidor = 'localhost';
$bd = 'bd_loja';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("deu ruim" . mysqli_connect_error());
}


$sql = "select * from produtos where id = $id ";



$resultado = mysqli_query($conexao, $sql);


$nome = "";
$descricao = "";
$marca = "";
$preco = "";
$quantidade_estoque = "";
$data_cadastro = "";
$foto = "";

while ($linha = mysqli_fetch_assoc($resultado)) {
    $nome = $linha["nome"];
    $descricao = $linha["descricao"];
    $marca = $linha["marca"];
    $preco = $linha["preco"];
    $quantidade_estoque = $linha["quantidade_estoque"];
    $data_cadastro = $linha["data_cadastro"];
    $foto = $linha["foto"];

}



mysqli_close($conexao);

?>





<div class="container">
    <div class="row mx-5 mt-5">
        <div class="col">
            <img src="<?= $foto ?>" class="img-fluid fotoss">
        </div>
        <div class="col">
            <h2 class="text-start"><?= $nome ?></h2>
            <p><strong>descricao:</strong> <?= $descricao ?></p>
            <p><strong>marca:</strong> <?= $marca ?></p>
            <p><strong>preco:</strong> <?= $preco ?></p>
            <p><strong>quantidade_estoque:</strong> <?= $quantidade_estoque ?></p>
            <p><strong>data_cadastro</data>:</strong> <?= $data_cadastro ?></p>
            <a href="index.php" class="btn-voltar">← Voltar para página principal</a>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>