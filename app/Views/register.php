<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="navbar">
                <div class="menu">
                    <ul>
                        <li><a href="/">Login</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <h1>Register</h1>
            <?php if (session()->get('success')) : ?>
                <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
            <?php endif; ?>
            <form action="/register" method="post">
                <input type="text" name="level" placeholder="level" value="2" readonly><br>
                <input type="text" name="nama_pelanggan" placeholder="nama"><br>
                <input type="text" name="alamat" placeholder="alamat"><br>
                <input type="text" name="no_telp" placeholder="no telpon"><br>
                <input type="text" name="email" placeholder="email"><br>
                <input type="text" name="password" placeholder="password"><br>
                <input type="password" placeholder="password confirm" name="password_confirm" value=""><br>
                <?php if (isset($validation)) : ?>
                    <?= $validation->listErrors() ?>
                <?php endif; ?>
                <button type="submit">Register</button>
                <p>
                    Already have an acoount? <a href="/">Click here</a> to login
                </p>
            </form>
        </div>
        <div class="right">
            <img src="pic/2.jpg" alt="">
        </div>
    </div>
</body>

</html>