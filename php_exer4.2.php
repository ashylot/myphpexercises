<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 4.2</title>
</head>
<body>

<h1>PHP Exercise 4.2</h1>

<form method="post" action="php_exer4.2.php">
    Item Name: <input type="text" name="item"><br><br>
    Original Price: <input type="text" name="price"><br><br>
    Number of Year: <input type="text" name="years"><br><br>
    Inflation Rate (%): <input type="text" name="rate"><br><br>
    <input type="submit" name="submit" value="Compute">
</form>

<br>

<?php
if (isset($_POST['submit'])) {

    $item = isset($_POST['item']) ? $_POST['item'] : "";
    $price = isset($_POST['price']) ? $_POST['price'] : 0;
    $years = isset($_POST['years']) ? $_POST['years'] : 0;
    $rate = isset($_POST['rate']) ? $_POST['rate'] : 0;

    echo "Item Name: " . $item . "<br>";
    echo "Original Price: " . $price . "<br>";
    echo "Price of " . $item . " within " . $years . " years with " . $rate . "% inflation rate.<br><br>";

    echo "Year - Price<br>";

    $ratePercent = $rate / 100;

    for ($y=1; $y<=$years; $y++){
        $newPrice = $price * pow((1 + $ratePercent), $y);
        echo $y . " - " . number_format($newPrice, 2) . "<br>";
    }
}
?>

</body>
</html>