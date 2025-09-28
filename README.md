Here’s an updated README.md for your Simple Todo App:

---

# Simple Todo App

A lightweight Todo application built with PHP and SQLite. It allows users to add, view, complete, and delete tasks with a clean UI styled by CSS.

## Features

- Add new tasks via a simple form
- View all tasks in a table
- Mark tasks as completed
- Delete tasks
- Uses SQLite for persistent storage
- Responsive, modern CSS styling

## Getting Started

1. **Clone the repository**
   ```
   git clone https://github.com/Thund0re/Todo-php-sqlite.git
   ```
2. **Requirements**
   - PHP 7 or higher
   - SQLite3 extension enabled

3. **Run the app**
   - Place the files on a PHP-enabled server.
   - Access `index.php` in your browser.
   - Tasks will be stored in `tasks.db` automatically.

## File Structure

- `index.php`: Main UI and logic for displaying and managing tasks.
- `add_task.php`: Handles adding new tasks.
- `update_task.php`: Marks a task as completed.
- `delete_task.php`: Deletes a task.
- `css/todo.css`: Stylesheet for the app.

## Database Schema

The app uses a single table in SQLite:

```sql
CREATE TABLE IF NOT EXISTS task (
  task_id INTEGER PRIMARY KEY AUTOINCREMENT,
  task TEXT,
  status TEXT
);
```

## License

MIT

---

Let me know if you want further customization or usage instructions!
