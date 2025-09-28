<!DOCTYPE html>
<html lang="en">

<head>
  <title>mTodo-Do App</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Fonts START -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
  <!-- Fonts END -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="./css/todo.css" />

  <style>
    i {
      padding-right: 1rem;
    }
  </style>
</head>

<body>
  <p>
  <a class="heading" href="/" style="font-size:3rem"><i class="fas fa-home"></i><u>Home</u></a>
  <p></p>
  <p>


  </p>
  <a class="heading" href="#"><i class="fas fa-tasks"></i> mTodo-Do App</a>
  </nav>
  <div class="container">
    <div class="input-area">
      <form method="POST" action="./add_task.php">  
        <input type="text" name="task" placeholder="Write your tasks here..." required />
        <button class="btn" name="add">Add Task</button>
      </form>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Tasks</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $db = new SQLite3('./tasks.db');

        $db->exec("CREATE TABLE IF NOT EXISTS task (
            task_id INTEGER PRIMARY KEY AUTOINCREMENT,
            task TEXT,
            status TEXT
        )");

        $result = $db->query("SELECT * FROM task ORDER BY task_id ASC");

        $count = 1;
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        ?>
        <tr class="border-bottom">
          <td><?php echo $count++ ?></td>
          <td><?php echo $row['task'] ?></td>
          <td><?php echo $row['status'] ?></td>
          <td colspan="2" class="action">
            <?php if ($row['status'] != "Done") { ?>
            <a href="update_task.php?task_id=<?php echo $row['task_id'] ?>" class="btn-completed">✅</a>
            <?php } ?>
            <a href="delete_task.php?task_id=<?php echo $row['task_id'] ?>" class="btn-remove">❌</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <?php 
      //phpinfo(); 
    ?>

  </div>
</body>

</html>

