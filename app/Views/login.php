<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <meta name="description" content="Responsive Image Gallery">
    <meta name="author" content="Tim Wells">
  
    <title>Login Ice Cream Shop</title>
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
            <form action="/" method="post">
                <h1>Login Milk It Ice Cream Shop</h1>
                <?php if(session()->get('success')) : ?>
                    <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
                <?php endif; ?>
                <hr>
                <p>Have an Account?</p>
                <label for="">Email</label>
                <input type="text" name="email" placeholder="email" required>
                <label for="">Password</label>
                <input type="text" name="password" placeholder="password" required><br>
                <?php if(isset($validation)) : ?>
                    <?= $validation->listErrors() ?>
                <?php endif; ?>
                <button>Login</button>
                <p>
                    Don't have an account yet? <a href="/register">Click here</a> to register
                </p>
            </form>
        </div>
        <div class="right">
            <img src="pic/1.jpg" alt="">
        </div>
    </div>
</body>
</html>