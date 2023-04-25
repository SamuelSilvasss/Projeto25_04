<?php
// Dados de usuários registrados
$usuariosRegistrados = array(
    array('username' => 'Samuca1', 'password' => 'paçoca123'),
);

// Função para verificar se as credenciais são válidas
function verificarCredenciais($username, $password, $usuariosRegistrados) {
    foreach ($usuariosRegistrados as $usuario) {
        if ($usuario['username'] === $username && $usuario['password'] === $password) {
            return true;
        }
    }
    return false;
}

// Obter os valores do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar as credenciais
if (verificarCredenciais($username, $password, $usuariosRegistrados)) {
    // Credenciais corretas, redirecionar para a página de sucesso
    header('Location: acesso.php');
    exit;
} else {
    // Credenciais incorretas, exibir mensagem de erro
    echo 'Erro ao tentar o login na sua conta, nome de usuário ou senha incorreta.';
}
?>
