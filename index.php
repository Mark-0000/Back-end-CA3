<?php include 'base.php';
$sql = "SELECT * FROM todo ORDER BY completed";
$result = $conn->query($sql);
?>
<div class="select">
    <select name="todos" class="filter-todo" id="filter-todos">
        <option value="default">All</option>
        <option value="1">Completed</option>
        <option value="0">Uncompleted</option>
    </select>
</div>
</form>
<div class="todo-container">
    <ul class="todo-list">

        <?php

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["completed"]  > 0) {
                    echo '<div class="todo">
                            <li class="todo-item completed">
                                ' . $row["text"] . '
                            </li>
                            <button class="complete-btn" onClick="updateTodo('. $row['id'] . "," . $row['completed'] . ')">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="trash-btn" onClick="deleteTodo('. $row['id'] .')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>';
                } else {
                    echo '<div class="todo">
                            <li class="todo-item">
                                ' . $row["text"] . '
                            </li>
                            <button class="complete-btn" onClick="updateTodo('. $row['id'] . "," . $row['completed'] . ')">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="trash-btn" onClick="deleteTodo('. $row['id'] .')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>';
                }
            }
        }else{
            echo '<h2>No Task/s To Do <i class="no-task fas fa-check"></i></h2>';
        }
        ?>

    </ul>
</div>
</div>
</div>
<script src="script.js"></script>
</body>

</html>