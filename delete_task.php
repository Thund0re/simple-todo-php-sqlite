<?php
if (isset($_GET['task_id'])) {
    $task_id = $_GET['task_id'];
    $db = new SQLite3('tasks.db');
    $stmt = $db->prepare('DELETE FROM task WHERE task_id = :task_id');
    $stmt->bindValue(':task_id', $task_id, SQLITE3_INTEGER);
    $stmt->execute();
    header('Location: index.php');
}
?>
