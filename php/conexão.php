<?php
//variáveis que receberão os dados para inserir na função de conexão
// o correto é escrever em inglês as variáveis//

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "bd_sistema_chamado";


//Função de conexão com o banco de dados//
$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados); 



//função para mostrar se a conexão deu errado//
if ($conexao->connect_error) {
    die("erro:" .$$conexao->connect_error);
}
?>