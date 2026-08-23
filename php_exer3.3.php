<?php

$price = 0;
$toppings = 0;
$quantity = 0;
$total = 0;

if (isset($_POST['compute'])) {

    $pizza = $_POST['pizza'];

    if ($pizza == "Hawaiian") {
        $price = 100;
    } elseif ($pizza == "Ham & Cheese") {
        $price = 150;
    } elseif ($pizza == "Beef Supreme") {
        $price = 200;
    } elseif ($pizza == "Cheese Supreme") {
        $price = 250;
    }

    $size = $_POST['size'];

    if ($size == "Solo") {
        $price += 0;
    } elseif ($size == "Double") {
        $price += 50;
    } elseif ($size == "Family") {
        $price += 70;
    } elseif ($size == "Barkada") {
        $price += 90;
    }

    if (isset($_POST['toppings'])) {

        foreach ($_POST['toppings'] as $topping) {

            if ($topping == "Cheese") {
                $toppings += 10;
            } elseif ($topping == "Pepper") {
                $toppings += 15;
            } elseif ($topping == "Ham") {
                $toppings += 27;
            } elseif ($topping == "Pineapple") {
                $toppings += 25;
            } elseif ($topping == "Ground Beef") {
                $toppings += 30;
            }
        }
    }

    $quantity = $_POST['quantity'];

    $total = ($price + $toppings) * $quantity;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Exercise 3.3</title>

    <style>
        .container {
            width: 700px;
            display: grid;
            grid-template-columns: 250px 180px 180px;
            gap: 20px;
        }

        .choice {
            margin: 12px 0;
        }

        .right div {
            margin: 12px 0;
        }

        .right input {
            width: 100px;
        }
    </style>
</head>

<body>

<form method="POST">

    <div class="container">

        <div class="left">

            <h1>
                PHP Exercise 3.3:<br>
                PHP PIZZA SHOP
            </h1>

            <h3>Pizza</h3>

            <div class="choice">
                <input type="radio" name="pizza" value="Hawaiian" required>
                Hawaiian
            </div>

            <div class="choice">
                <input type="radio" name="pizza" value="Ham & Cheese">
                Ham & Cheese
            </div>

            <div class="choice">
                <input type="radio" name="pizza" value="Beef Supreme">
                Beef Supreme
            </div>

            <div class="choice">
                <input type="radio" name="pizza" value="Cheese Supreme">
                Cheese Supreme
            </div>

            <h3>Size</h3>

            <div class="choice">
                <input type="radio" name="size" value="Solo" required>
                Solo
            </div>

            <div class="choice">
                <input type="radio" name="size" value="Double">
                Double
            </div>

            <div class="choice">
                <input type="radio" name="size" value="Family">
                Family
            </div>

            <div class="choice">
                <input type="radio" name="size" value="Barkada">
                Barkada
            </div>

        </div>

        <div class="middle">

            <h3>Extra Toppings</h3>

            <div class="choice">
                <input type="checkbox" name="toppings[]" value="Cheese">
                Cheese
            </div>

            <div class="choice">
                <input type="checkbox" name="toppings[]" value="Pepper">
                Pepper
            </div>

            <div class="choice">
                <input type="checkbox" name="toppings[]" value="Ham">
                Ham
            </div>

            <div class="choice">
                <input type="checkbox" name="toppings[]" value="Pineapple">
                Pineapple
            </div>

            <div class="choice">
                <input type="checkbox" name="toppings[]" value="Ground Beef">
                Ground Beef
            </div>

        </div>

        <div class="right">

            <button type="submit" name="compute">
                Compute
            </button>

            <div>
                Price:
                <input type="text"
                    value="<?php echo number_format($price, 2); ?>"
                    readonly>
            </div>

            <div>
                Quantity:
                <input type="number"
                    name="quantity"
                    value="<?php echo $quantity; ?>"
                    min="1"
                    required>
            </div>

            <div>
                Toppings:
                <input type="text"
                    value="<?php echo number_format($toppings, 2); ?>"
                    readonly>
            </div>

            <div>
                <strong>TOTAL:</strong>
                <input type="text"
                    value="<?php echo number_format($total, 2); ?>"
                    readonly>
            </div>

        </div>

    </div>

</form>

</body>

</html>