<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <form action="<?php if (isset($_GET['register'])) {echo 'register.php';} else {echo 'login.php';}?>" method="post">
    <div class="login-nav">
        <a href="index.php" class="<?php if (!isset($_GET['register'])) {echo 'active';}?>">LOGIN</a>
        <a href="index.php?register" class="<?php if (isset($_GET['register'])) {echo 'active';}?>">REGISTER</a>
    </div>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
        <label>UserName</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br> 
        <?php
            if (isset($_GET['register'])) {
                ?>
                    <label>Name</label>
                    <input type="name" name="name" placeholder="Name"><br>
                    <div class="button"><button type="submit">Register</button></div>
                <?php
            } else {
                ?>
                    <div class="button"><button type="submit">Login</button></div>
                <?php
            }
        ?>
    </div>
 </form>
</body>
</html>

