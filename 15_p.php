<!DOCTYPE html>
<html>
<head>
    <title>Number Range Checker</title>
</head>
<body>
    <h1>Number Range Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required><br>

        <label for="min">Enter the minimum range:</label>
        <input type="number" name="min" required><br>

        <label for="max">Enter the maximum range:</label>
        <input type="number" name="max" required><br>

        <input type="submit" name="check" value="Check">
    </form>

    <?php
    function isNumberInRange($number, $min, $max) {
        return ($number >= $min && $number <= $max);
    }

    if(isset($_POST['check'])) {
        $number = $_POST['number'];
        $min = $_POST['min'];
        $max = $_POST['max'];

        if (isNumberInRange($number, $min, $max)) {
            echo "<p>The number $number is within the range [$min, $max].</p>";
        } else {
            echo "<p>The number $number is not within the range [$min, $max].</p>";
        }
    }
    ?>
</body>
</html>
