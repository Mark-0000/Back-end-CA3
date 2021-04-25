# Back-end-CA3

## Required
XAMPP web server

### how to install
1. clone repository to C:->xampp->htdocs->todoapp
2. import the todo.sql file on php my admin page
3. launch xampp control panel
4. start Apache and MySQL
5. open http://localhost:port/todoapp on the browser

### how to use
1. type anything on the input form and click the plus(+) button or press enter to add todo.
2. if you've completed the todo, you can either click the the check button to cross out the todo or click the trash button to delete.
3. you can view all, completed or uncompleted todos by changing the selection on the right side of the input form.

### report
there are 4 main files, 4 dependency files and some extra file like css and javascript for this application
#### main files
1. base.php - the head of each html page where the title, header and insert form are required for each page. this file was created to reduce redundancy of code.
2. index.php - the home page where all the completed and uncompleted todos are displayed.
3. completed.php - the completed page where all the completed todos are displayed.
4. uncompleted.php - the uncompleted page where all the uncompleted todos are displayed.
#### dependency files
1. dbh.php
2. addTodo.php
3. update.php
4. delete.php
#### extra files
1. script.js
2. index.css

