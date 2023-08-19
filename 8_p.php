<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $number = $_POST['number'];

        // Calculate the factorial
        $factorial = 1;
        for($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        echo "<p>The factorial of $number is: $factorial</p>";
    }
    ?>
</body>
</html>
