<?php

$usuariosRegistrados = array(
    array('username' => 'Samuca1', 'password' => 'paçoca123'),
);


function verificarCredenciais($username, $password, $usuariosRegistrados) {
    foreach ($usuariosRegistrados as $usuario) {
        if ($usuario['username'] === $username && $usuario['password'] === $password) {
            return true;
        }
    }
    return false;
}

//valores do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar as credenciais
if (verificarCredenciais($username, $password, $usuariosRegistrados)) {
    // Credenciais corretas, vai redirecionar para a página de acesso
    header('Location: acesso.php');
    exit;
} else {
    // Credenciais incorretas, vai exibir uma mensagem de erro
    echo 'Erro ao tentar o login na sua conta, nome de usuário ou senha incorreta.';
}
?>
