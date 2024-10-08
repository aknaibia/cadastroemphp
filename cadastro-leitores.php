<?php
// Inclui o arquivo de conexão de dados
include "config.php";

// Verifica se a conexão com o banco de dados foi bem sucedida
if (!$conn) {
    // Se a conexão falhar, exibe uma mensagem de erro e encerra a execução
    die("falha na conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$nome = 'teste nome';
$dtnasc = '2006-09-23';
$celular = '81985780419';
$email = 'biamirandart3@gmail.com';
$ra = '03231609';
$endereco = 'Rua Manoel de Albuquerque'; // Corrigido para "endereco"
$num_end = '01';
$bairro = 'Paratibe';
$cidade = 'Paulista';

// Criar variável para inserir o registro
$sql = "INSERT INTO leitores (Nome, DtNasc, Celular, Email, RA, Endereco, NumEnd, Bairro, CidadeUF) 
VALUES 
('$nome', '$dtnasc', '$celular', '$email', '$ra', '$endereco', '$num_end', '$bairro', '$cidade')";

// Executa a consulta SQL. Se falhar, exibe o erro de banco de dados
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($query) {
    echo "<center>";
    echo "Registro inserido com sucesso!<br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
} else {
    echo "<center>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}
?>
