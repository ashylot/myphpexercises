<?php
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $usernames = array("Jdelacruz", "RoseT", "jChua");
    $passwords = array("123456", "12345trewq", "James");
    $names     = array("Juan Dela Cruz", "Rose Tan", "James Chua");
 
    $valid = false;
 
    for ($i = 0; $i < count($usernames); $i++) {
        if ($username == $usernames[$i] && $password == $passwords[$i]) {
            echo "Welcome: " . $names[$i];
            $valid = true;
        }
    }
 
    if (!$valid) {
        echo "Invalid Username or Password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 3.4</title>
</head>
<body>
    <h1>PHP Exercise 3.4</h1>
<form method="POST">
    Username: <input type="text" name="username">
    <br><br>

    Password: <input type="password" name="password">
    <br><br>

    <input type="submit" name="login" value="Login">

    <input type="reset" value="Cancel">
</form>

</body>
</html>