<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="./backend/login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password" required>
        <br>
        <button type="submit">Masuk</button>
    </form>
</body>
</html>