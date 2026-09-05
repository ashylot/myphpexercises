<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 4.4</title>
</head>
<body>

    <h1>PHP Exercise 4.4</h1>

<form method="post" action="php_exer4.4.php">
    Number of Rows: <input type="text" name="rows"><br><br>
    Number of Column: <input type="text" name="cols"><br><br>
    <input type="submit" name="submit" >
</form>
<br>

<?php

if (isset($_POST['submit'])) {

    $rows = $_POST['rows'];
    $cols = $_POST['cols'];

    echo $rows. " X ". $Cols. " Table<br>";
    echo "<table border='1' cellpadding='15'>";

    for ($r=1; $r<=$rows; $r++){
        echo "<tr>";
        for ($c = 1; $c <= $cols; $c++) {

        echo "<td></td>";

    }   
    echo "</tr>";

  }

    echo "</table>";

}

?>

</body>

</html>