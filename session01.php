<?php
session_start();

function validate_login($username, $password) {
    $valid_username = "GM";
    $valid_password = "yagitu";

    return $username === $valid_username && $password === $valid_password;
}

if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    if (validate_login($user, $pass)) {
        $_SESSION['login'] = $user;
        header('Location: session02.php');
        exit();
    } else {
        $error_message = "Username atau password salah. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style type="text/css">
        .style1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: small;
        }
        .style2 {
            font-family: Arial, Helvetica, sans-serif;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2 class="style2">Login</h2>
        <?php if (isset($error_message)) : ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <p class="style1">Silahkan masukkan username dan password Anda!</p>
        <table border="0">
            <tr>
                <td class="style1">Username</td>
                <td>:</td>
                <td><input type="text" name="user" require></td>
            </tr>
            <tr>
                <td class="style1">Password</td>
                <td>:</td>
                <td><input type="password" name="pass" require ></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Login" value="Log In"></td>
            </tr>
        </table>
    </form>
</body>
</html>