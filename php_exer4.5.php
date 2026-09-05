<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 4.5</title>
</head>
<body>
    <h1>PHP Exercise 4.5</h1>

    <form method="POST" action="php_exer4.5.php">

        Starting Number: <input type="text" name="start"><br><br>
        Ending Number: <input type="text" name="end"><br><br>
        <input type="submit" name="submit" value="Display">
</form>

<?php
if (isset($_POST['submit'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];

    if ($start < $end) {
          for ($i=$start; $i<=$end; $i++){
            echo $i . " ";
          }
        } else {
             for ($i=$start; $i>=$end; $i--){
            echo $i . " ";
        }
    }
}

?>


</body>
</html>