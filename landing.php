<?php
    require("func/conn.php");
    require("func/settings.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/base.css">
    </head>
    <body>
        <?php
            require("header.php");
        ?>
        <div class="container">
            <div class="left">
                <div class="topBarWithItemsThing">
                    <a href="blogs.php">Blogs</a> &nbsp;<a href="groups.php">Groups</a> &nbsp;<a href="register.php">Register</a> &nbsp;<a href="login.php">Login</a>
                </div>
                THIS IS UNDER CONSTRUCTION!!<br>
                if you're seeing this you're not logged in
            </div>
            <div class="right">
                <div class="info">
                    Users
                </div>
                <br>
                <?php
                    $stmt = $conn->prepare("SELECT * FROM `users`");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<a href='profile.php?id=" . $row['id'] . "'>" . $row['username'] . "</a><br>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>