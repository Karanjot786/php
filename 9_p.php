<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="post" action="">
        <label for="start">Enter the start of the range:</label>
        <input type="number" name="start" required><br>

        <label for="end">Enter the end of the range:</label>
        <input type="number" name="end" required><br>

        <input type="submit" name="check" value="Check">
    </form>

    <?php
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        if ($number <= 3) {
            return true;
        }
        if ($number % 2 == 0 || $number % 3 == 0) {
            return false;
        }
        $i = 5;
        while ($i * $i <= $number) {
            if ($number % $i == 0 || $number % ($i + 2) == 0) {
                return false;
            }
            $i += 6;
        }
        return true;
    }

    if(isset($_POST['check'])) {
        $start = $_POST['start'];
        $end = $_POST['end'];

        echo "<h2>Prime numbers between $start and $end:</h2>";
        for ($i = $start; $i <= $end; $i++) {
            if (isPrime($i)) {
                echo "$i ";
            }
        }
    }
    ?>
</body>
</html>
