<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required><br>
        
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<h2>Results:</h2>";
        echo "Number 1: $num1<br>";
        echo "Number 2: $num2<br>";

        // Perform calculations
        echo "Sum: " . ($num1 + $num2) . "<br>";
        echo "Subtraction: " . ($num1 - $num2) . "<br>";
        echo "Multiplication: " . ($num1 * $num2) . "<br>";
        echo "Division: " . ($num1 / $num2) . "<br>";
        echo "Exponent of Number 1 to Number 2: " . ($num1 ** $num2) . "<br>";
    }
    ?>
</body>
</html>

