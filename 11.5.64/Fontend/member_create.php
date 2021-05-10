<?php 
    session_start();
    include('h.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="member_add_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);                    
                    ?>
                </h3>            
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="m_user">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="m_pass">
        </div>
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="m_name">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="m_email">
        </div>
        <div class="input-group">
            <label for="tel">Tel.</label><br>
            <input type="number" name="m_tel">
        </div>
        <div class="input-group">
            <label for="email">Address</label>
            <input type="text" name="m_address">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Already a member? <a href="member_login.php">Sign in</a></p>
    </form>
</body>
</html>