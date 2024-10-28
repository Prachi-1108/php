<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci </title>
</head>
<body>
    <form method="POST">
        <label for="number">Enter the number of terms: </label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Click</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["number"]);

       
        function fibonacci($n) {
            $fibo = [0, 1];
            
            for ($i = 2; $i < $n; $i++) {
                $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
            }
            
            return $fibo;
        }

        
        if ($n >= 1) {
            $fibonacci_sequence = fibonacci($n);
            echo "<h3>Fibonacci Sequence (first $n terms):</h3>";
            echo implode(", ", $fibonacci_sequence);
        }
    }
    ?>
</body>
</html>