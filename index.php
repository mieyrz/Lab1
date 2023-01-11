<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>

<head>
    <title>Testing</title>
    <nav>
        <ul>
            <a href="./my-application-main/index.html">About Us</a>
        </ul>
    </nav>
</head>

<body>
    <h1>Homepage</h1>
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
    </form>
    <?php
    $sql = "SELECT id, username FROM users";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["username"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
</body>

<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName shahrul12
    ServerAlias shahrul12
    DocumentRoot /var/www/shahrul12
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

</html>