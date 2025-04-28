<?php 
session_start();
// Redirect ke dashboard jika sudah login
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistem Sederhana</title>
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            background: #2575fc;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background: #6a11cb;
        }
        label {
            display: block;
            text-align: left;
            margin-left: 20px;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])): ?>
            <p class="error">Username atau Password salah!</p>
        <?php endif; ?>
        <form action="proses_login.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <label><input type="checkbox" name="remember"> Remember me</label>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>