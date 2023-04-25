<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username" required><br>
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>