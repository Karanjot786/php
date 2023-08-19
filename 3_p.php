<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Solver</title>
</head>
<body>
    <h1>Quadratic Equation Solver</h1>
    <form method="post" action="">
        <label for="a">Coefficient a:</label>
        <input type="number" name="a" required><br>

        <label for="b">Coefficient b:</label>
        <input type="number" name="b" required><br>

        <label for="c">Coefficient c:</label>
        <input type="number" name="c" required><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Calculate the discriminant
        $discriminant = ($b * $b) - (4 * $a * $c);

        if($discriminant > 0) {
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
            echo "<p>Root 1: $root1</p>";
            echo "<p>Root 2: $root2</p>";
        } elseif($discriminant == 0) {
            $root = -$b / (2 * $a);
            echo "<p>Repeated Root: $root</p>";
        } else {
            echo "<p>No real roots (complex roots).</p>";
        }
    }
    ?>
</body>
</html>

