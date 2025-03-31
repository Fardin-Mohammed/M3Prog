<?php
$celsius = isset($_GET["celsius"]) ? floatval($_GET["celsius"]) : null;
$fahrenheit = ($celsius !== null) ? ($celsius * 9/5) + 32 : "Onbekend";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sigma omrekenen</title>
</head>
<body>
    <h1>Omrekening</h1>
    <?php if ($celsius !== null): ?>
        <p><?php echo htmlspecialchars($celsius); ?>°C is gelijk aan <?php echo htmlspecialchars($fahrenheit); ?>°F.</p>
    <?php else: ?>
        <p>Geen geldige temperatuur opgegeven.</p>
    <?php endif; ?>
</body>
</html>
