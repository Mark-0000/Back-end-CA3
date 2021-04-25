<?php include 'base.php';
$sql = "SELECT * FROM todo WHERE completed = 0";
$result = $conn->query($sql);
?>
<div class="select">
    <select name="todos" class="filter-todo" id="filter-todos">
        <option value="default">All</option>
        <option value="1">Completed</option>
        <option value="0" selected>Uncompleted</option>
    </select>
</div>
</form>
<div class="todo-container">
    <ul class="todo-list">

        <?php

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="todo">
                                <li class="todo-item">
                                    ' . $row["text"] . '
                                </li>
                                <button class="complete-btn" onClick="updateTodo(' . $row['id'] . "," .  $row['completed'] . ",0" . ')">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="trash-btn" onClick="deleteTodo(' . $row['id'] . ",0" . ')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>';
            }
        }else{
            echo '<h2>No Uncompleted Task/s. <i class="no-task fas fa-check"></i></h2>';
        }
        ?>

    </ul>
</div>
</div>
</div>
<script src="script.js"></script>
</body>

</html>