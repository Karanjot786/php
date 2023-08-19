<!DOCTYPE html>
<html>
<head>
    <title>Isosceles Triangle Checker</title>
</head>
<body>
    <h1>Isosceles Triangle Checker</h1>
    <form method="post" action="">
        <label for="side1">Side 1:</label>
        <input type="number" name="side1" required><br>

        <label for="side2">Side 2:</label>
        <input type="number" name="side2" required><br>

        <label for="side3">Side 3:</label>
        <input type="number" name="side3" required><br>

        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if(isset($_POST['check'])) {
        $side1 = $_POST['side1'];
        $side2 = $_POST['side2'];
        $side3 = $_POST['side3'];

        if($side1 == $side2 || $side1 == $side3 || $side2 == $side3) {
            echo "<p>The triangle is isosceles.</p>";
        } else {
            echo "<p>The triangle is not isosceles.</p>";
        }
    }
    ?>
</body>
</html>
