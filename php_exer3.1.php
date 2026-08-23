<?php
$days = 0;
$grossSalary = 0;
$taxRate = 0;
$deduction = 0;
$netSalary = 0;

$employeeStatus = "Emp. Status";
$civilStatus = "Civil Status";

if (isset($_POST['compute'])) {

    $days = $_POST['days'];
    $employeeStatus = $_POST['employee_status'];
    $civilStatus = $_POST['civil_status'];

    if ($employeeStatus == "Regular") {
        $salaryRate = 500;
    } elseif ($employeeStatus == "Probationary") {
        $salaryRate = 400;
    } elseif ($employeeStatus == "Casual") {
        $salaryRate = 300;
    } else {
        $salaryRate = 0;
    }

    if ($civilStatus == "Single") {
        $taxRate = 0.12;
    } elseif ($civilStatus == "Married") {
        $taxRate = 0.10;
    } elseif ($civilStatus == "Widow") {
        $taxRate = 0.07;
    } else {
        $taxRate = 0;
    }

    $grossSalary = $days * $salaryRate;
    $deduction = $grossSalary * $taxRate;
    $netSalary = $grossSalary - $deduction;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 3.1</title>
</head>
<body>
    <div class="container">

    <h1>PHP Exercise 3.1</h1>

    <form method="POST">

    <label>No. of Days Worked: </label>
    <input type= "name" name= "days" value="<?php echo $days; ?>>" required>
    <br>
    
     <label>Employee Status:</label>
        <select name="employee_status">
            <option value="Emp. Status"
                <?php if ($employeeStatus == "Emp. Status") echo "selected"; ?>>
                Emp. Status
            </option>

            <option value="Regular"
                <?php if ($employeeStatus == "Regular") echo "selected"; ?>>
                Regular
            </option>

            <option value="Probationary"
                <?php if ($employeeStatus == "Probationary") echo "selected"; ?>>
                Probationary
            </option>

            <option value="Casual"
                <?php if ($employeeStatus == "Casual") echo "selected"; ?>>
                Casual
            </option>
        </select>
        <br>

        <label>Civil Status:</label>
        <select name="civil_status">
            <option value="Civil Status"
                <?php if ($civilStatus == "Civil Status") echo "selected"; ?>>
                Civil Status
            </option>

            <option value="Single"
                <?php if ($civilStatus == "Single") echo "selected"; ?>>
                Single
            </option>

            <option value="Married"
                <?php if ($civilStatus == "Married") echo "selected"; ?>>
                Married
            </option>

            <option value="Widow"
                <?php if ($civilStatus == "Widow") echo "selected"; ?>>
                Widow
            </option>
        </select>
        <br>

        <button type="submit" name="compute" class="button">
            Compute Salary
        </button>

    </form>

    <div class="result">

        <strong>Gross Salary:</strong>
        <?php echo number_format($grossSalary, 2); ?>
        <br>

        <strong>Tax:</strong>
        <?php echo ($taxRate * 100) . "%"; ?>
        <br>

        <strong>Deduction:</strong>
        <?php echo number_format($deduction, 2); ?>
        <br>

        <strong>Net Salary:</strong>
        <?php echo number_format($netSalary, 2); ?>

    </div>

</div>


</body>
</html>