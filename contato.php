<style>
.form-container {

    max-width: 500px;
    margin: 50px auto;
    padding: 30px;
    background-color: #1e1e1e; /* fundo escuro */
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.2);
    color: #fff;
    font-family: Arial, sans-serif;
}

.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #0ff; /* ciano estilo gamer */
}

.form-container form {
    display: flex;
    flex-direction: column;
}

.form-container label {
    margin-bottom: 5px;
    font-weight: bold;
}

.form-container input,
.form-container textarea {
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    background-color: #2c2c2c;
    color: #fff;
    font-size: 1rem;
}

.form-container input:focus,
.form-container textarea:focus {
    outline: none;
    border: 1px solid #0ff;
    background-color: #333;
}

.form-container textarea {
    min-height: 120px;
    resize: vertical;
}

.form-container button {
    padding: 12px;
    background-color: #0ff;
    color: #000;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-container button:hover {
    background-color: #00cccc;
}

</style>

<?php
include "cabecalho.php"
?>

    <div class="form-container">

    <h2>Fale com a gente 🎬</h2>
    <form action="resposta.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
 
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
 
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem..." required></textarea>
 
        <button type="submit">Enviar</button>
    </form>






</dIv>



<footer class="footer">
        <hr>
        <img src="" alt="Rodape" width="30">
        <small>
            <?php echo date ("Y"); ?>
        </small>
    </footer>

    
</body>
</html>

