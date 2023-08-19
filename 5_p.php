<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table Generator</title>
</head>
<body>
    <h1>Multiplication Table Generator</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required><br>

        <input type="submit" name="generate" value="Generate">
    </form>

    <?php
    if(isset($_POST['generate'])) {
        $number = $_POST['number'];

        echo "<h2>Multiplication Table of $number:</h2>";
        echo "<table border='1'>";
        for($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>

