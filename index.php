<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Қонақтар кітабы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Қонақтар кітабы</h1>
    <form method="POST" action="add.php">
        <input type="text" name="name" placeholder="Атыңыз" required><br>
        <textarea name="message" placeholder="Хабарлама" required></textarea><br>
        <button type="submit">Жіберу</button>
    </form>

    <h2>Хабарламалар</h2>
    <?php
    $result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<div><strong>{$row['name']}</strong>: {$row['message']} <em>({$row['created_at']})</em></div><hr>";
    }
    ?>
</body>
</html>
