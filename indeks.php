<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
</head>
<body>
    <h2>Angka Kelipatan 3 dan 5</h2>
    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>