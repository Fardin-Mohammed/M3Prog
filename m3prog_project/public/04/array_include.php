<?php
// Announcements array met extra items
$announcements = [
    "a.html",
    "b.html",
    "c.html",
    "d.html", // Extra announcement
    "e.html"  // Extra announcement
];

// Reviews array
$reviews = [
    ["demon's souls", 10],
    ["mario wonder", 9.5],
    ["mega man 2", 8]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07arrays_include.md</title>
</head>
<body>

<h2>Announcements</h2>
<?php
// Loop door de announcements en include ze
foreach ($announcements as $announcement) {
    include "announcements/$announcement";
}
?>

<h2>Game Reviews</h2>
<ul>
    <?php
    $total = 0;
    foreach ($reviews as $review) {
        echo "<li>{$review[0]} - Score: {$review[1]}</li>";
        $total += $review[1];
    }

    // Conclusie berekenen
    $average = $total / count($reviews);
    ?>
</ul>

<h3>Conclusie</h3>
<p>Gemiddelde score van de reviews: <?php echo round($average, 1); ?></p>

</body>
</html>
