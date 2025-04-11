<?php

$name = "JERICHO MAQUILING";
$age = "21 yrs old";
$address = "Purok-2 Molatuhan bajo";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile and Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <section class="profile-section">
            <h2>My Profile</h2>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Age:</strong> <?php echo $age; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
        </section>

        <section class="login-section">
            <h2>Login</h2>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username" class="input-field"><br>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="PASSWORD" class="input-field"><br>
                </div>
                <input type="submit" value="Log In" class="submit-button">
            </form>
            <?php
                if(isset($_POST["username"]) && isset($_POST["PASSWORD"])){
                    echo "<div class='login-info'>";
                    echo "<p><strong>Username Entered:</strong> " . htmlspecialchars($_POST["username"]) . "</p>";
                    echo "<p><strong>Password Entered:</strong> " . htmlspecialchars($_POST["PASSWORD"]) . "</p>";
                    echo "</div>";
                }
            ?>
        </section>

        <section class="additional-info-section">
            <h2>More About Me</h2>
            <?php
                $Birthday = "04/27/2003";
                $Habbit = "playing basketball";
                $Favorate = "puppy!";
            ?>
            <p><strong>Birthday:</strong> <?php echo $Birthday; ?></p>
            <p><strong>Hobby:</strong> <?php echo $Habbit; ?></p>
            <p><strong>Favorite:</strong> <?php echo $Favorate; ?></p>
        </section>
    </div>
</body>
</html>