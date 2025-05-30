<?php

//recebendo os dados do formulário//

$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];




// chamando o arquivo de conexão com o banco de dados (é como se eu desse ctrl c e ctrl v no código da conexão.php//

include 'conexao.php';


$insert = "INSERT INTO tb_user VALUES (null, '$nome', '$email', '$setor', '$senha')";

$query = $conexao ->query($insert);

if ($conexao ->query($insert) === TRUE) {
    echo "<script>alert('Usuário Cadastrado com Sucesso!');
    location.href = '../cadastro.html'</script>";
}


?>