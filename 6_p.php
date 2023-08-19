<!DOCTYPE html>
<html>
<head>
    <title>Sum of Natural Numbers</title>
</head>
<body>
    <h1>Sum of Natural Numbers</h1>
    <form method="post" action="">
        <label for="n">Enter a natural number:</label>
        <input type="number" name="n" required><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $n = $_POST['n'];

        // Calculate the sum of natural numbers
        $sum = 0;
        for($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }

        echo "<p>The sum of natural numbers from 1 to $n is: $sum</p>";
    }
    ?>
</body>
</html>

