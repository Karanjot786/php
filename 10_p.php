<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
</head>
<body>
    <h1>Student Grade Calculator</h1>
    <form method="post" action="">
        <label for="marks">Enter student's marks (comma-separated):</label>
        <input type="text" name="marks" required><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    function calculateGrade($average) {
        if ($average >= 90) {
            return "A";
        } elseif ($average >= 80) {
            return "B";
        } elseif ($average >= 70) {
            return "C";
        } elseif ($average >= 60) {
            return "D";
        } else {
            return "F";
        }
    }

    if(isset($_POST['calculate'])) {
        $marks = explode(",", $_POST['marks']);
        $totalMarks = 0;

        foreach ($marks as $mark) {
            $totalMarks += $mark;
        }

        $numMarks = count($marks);
        if ($numMarks > 0) {
            $average = $totalMarks / $numMarks;
            $grade = calculateGrade($average);

            echo "<p>Number of marks: $numMarks</p>";
            echo "<p>Total marks: $totalMarks</p>";
            echo "<p>Average marks: $average</p>";
            echo "<p>Grade: $grade</p>";
        } else {
            echo "<p>No marks entered.</p>";
        }
    }
    ?>
</body>
</html>
