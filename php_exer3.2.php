<?php

$total = 0;

if (isset($_POST['compute'])) {

    // Processor
    $processor = $_POST['processor'];

    if ($processor == "Intel i7") {
        $total += 15000;
    } elseif ($processor == "Intel i5") {
        $total += 13000;
    } elseif ($processor == "Intel i3") {
        $total += 10000;
    } elseif ($processor == "Intel Quad Core") {
        $total += 8000;
    } elseif ($processor == "Intel Dual Core") {
        $total += 6000;
    }

    // RAM
    $ram = $_POST['ram'];

    if ($ram == "16GB") {
        $total += 10000;
    } elseif ($ram == "8GB") {
        $total += 8000;
    } elseif ($ram == "4GB") {
        $total += 4000;
    } elseif ($ram == "2GB") {
        $total += 2000;
    }

    // Accessories
    if (isset($_POST['accessories'])) {

        foreach ($_POST['accessories'] as $accessory) {

            if ($accessory == "Gaming Keyboard") {
                $total += 3000;
            } elseif ($accessory == "Gaming Mouse") {
                $total += 2000;
            } elseif ($accessory == "Gaming Headset") {
                $total += 3500;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise 3.2</title>

<div class="container">

    <h1>PHP Exercise 3.2:<br>PHP PC Shop</h1>

    <form method="POST">

        <!-- PROCESSOR -->
        <h3>Processor</h3>

        <div class="column">
            <div class="option">
                <input type="radio" name="processor" value="Intel i7" required>
                Intel i7
            </div>

            <div class="option">
                <input type="radio" name="processor" value="Intel i5">
                Intel i5
            </div>

            <div class="option">
                <input type="radio" name="processor" value="Intel i3">
                Intel i3
            </div>
        </div>

        <div class="column">
            <div class="option">
                <input type="radio" name="processor" value="Intel Quad Core">
                Intel Quad Core
            </div>

            <div class="option">
                <input type="radio" name="processor" value="Intel Dual Core">
                Intel Dual Core
            </div>
        </div>


        <!-- RAM -->
        <h3>RAM</h3>

        <div class="column">
            <div class="option">
                <input type="radio" name="ram" value="16GB" required>
                16 GB
            </div>

            <div class="option">
                <input type="radio" name="ram" value="8GB">
                8 GB
            </div>
        </div>

        <div class="column">
            <div class="option">
                <input type="radio" name="ram" value="4GB">
                4 GB
            </div>

            <div class="option">
                <input type="radio" name="ram" value="2GB">
                2 GB
            </div>
        </div>


        <!-- ACCESSORIES -->
        <h3>Accessories</h3>

        <div class="option">
            <input type="checkbox" name="accessories[]" value="Gaming Keyboard">
            Gaming Keyboard
        </div>

        <div class="option">
            <input type="checkbox" name="accessories[]" value="Gaming Mouse">
            Gaming Mouse
        </div>

        <div class="option">
            <input type="checkbox" name="accessories[]" value="Gaming Headset">
            Gaming Headset
        </div>

        <button type="submit" name="compute" class="compute">
            Compute
        </button>

        <div class="total">
            <strong>TOTAL:</strong>

            <input type="text"
                   value="<?php echo number_format($total, 2); ?>"
                   readonly>
        </div>

    </form>

</div>

</body>
</html>