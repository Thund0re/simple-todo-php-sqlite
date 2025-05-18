<?php
if (isset($_POST['add'])) {
    $task = $_POST['task'];
    $db = new SQLite3('tasks.db');
    $stmt = $db->prepare('INSERT INTO task (task, status) VALUES (:task, "Pending")');
    $stmt->bindValue(':task', $task, SQLITE3_TEXT);
    $stmt->execute();
    header('Location: index.php');
}
?>
