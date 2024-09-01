<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator App</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <h1>Calculator</h1>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="post">
        <input  type="number" name="num01" placeholder="Number One">
        <select name="operator" id="">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>

        <input  type="number" name="num02" placeholder="Number Two">
        <button>Calculate</button>


    </form>

    <!-- PHP Code -->
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);

    // Error checking
    $errors = false;

    if (empty($num01) || empty($num02) || empty($operator)) {
        echo "<p class='calc-error'>Fill in all fields! </p>";
        $errors = true;
    }

    if (!is_numeric($num01) || !is_numeric($num02)) {
        echo "<p class='calc-error'>Only write numbers! </p>";
        $errors = true;
    }

    // If no errors, perform the calculation
    if (!$errors) {
        switch ($operator) {
            case "add":
                $value = $num01 + $num02;
                break;
            case "subtract":
                $value = $num01 - $num02;
                break;
            case "multiply":
                $value = $num01 * $num02;
                break;
            case "divide":
                if ($num02 != 0) {
                    $value = $num01 / $num02;
                } else {
                    echo "<p class='calc-error'>Cannot divide by zero! </p>";
                    $errors = true;
                }
                break;
            default:
                echo "<p class='calc-error'>Something went HORRIBLY wrong! </p>";
                $errors = true;
        }

        // Display result if there are no errors
        if (!$errors) {
            echo "<p class='calc-answer'>Result = " . $value . "</p>";
        }
    }
}
?>

</body>
</html>