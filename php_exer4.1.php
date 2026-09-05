<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 4.1</title>
</head>
<body>

<h1>PHP Exercise 4.1</h1>

<form method="post" action="php_exer4.1.php">

    Starting Number: <input type="text" name="start"><br><br>

    Ending Number: <input type="text" name="end"><br><br>
    
    <input type="submit" name="submit" value="Display">

</form>
<br>

<?php
if (isset($_POST['submit'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];

    echo "Starting Number: " . $start . "<br>";
    echo "Ending Number: " . $end . "<br>";

    $odd = "";
    $even = "";

    for ($i=$start; $i<=$end; $i++){
        if ($i % 2 == 0) {
            $even = $even . $i . " ";
        } else {
            $odd = $odd . $i . " ";
        }
    }

    echo "ODD: " . $odd . "<br>";
    echo "EVEN: " . $even . "<br>";
}
?>

</body>
</html>