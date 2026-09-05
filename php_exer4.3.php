<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 4.3</title>
</head>
<body>

<h1>PHP Exercise 4.3</h1>

<form method="POST" action="php_exer4.3.php">
    Enter a Number: <input type="text" name="num"><br>,<br>
    <input type="submit" name="submit" value="Display">
</form>
<br>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $total = 0;

    echo "List of numbers between 1 and " . $num . "<br>";

    for ($i=1; $i<=$num; $i++){
        echo $i . "<br>";
        $total = $total + $i;
    }

    echo "TOTAL: " . $total . "<br>";
}
?>

</body>
</html>