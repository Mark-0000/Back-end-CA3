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
4. if the selected page is empty, it will simply display no task/s to do.

### files - explaied
there are 4 main files, 4 dependency files and some extra file like css and javascript for this application
#### main files
1. base.php - the head of each html page where the title, header and insert form are required for each page. this file was created to reduce redundancy of code.
2. index.php - the home page where all the completed and uncompleted todos are displayed.
3. completed.php - the completed page where all the completed todos are displayed.
4. uncompleted.php - the uncompleted page where all the uncompleted todos are displayed.
#### dependency files
1. dbh.php - the database handler. this file will handle all the database connection and is gonna be required for each dependency file.
2. addTodo.php - this file handles insert operation of the input form to the database.
3. update.php - this file handles the update of the todo changing from uncompleted to completed and vice versa. 
4. delete.php - this file handles the delete of the todo from the database.
#### extra files
1. script.js - this file handles all the interactions of the user to the page, like clicking the check/trash button and changing the selection.
2. index.css - this file handles the style of the page, like layout, background and colors

### report
1. base.php - this file requires the dbh.php. as the dbh.php is already included in this page, it will not be required on other main pages. the css, font-awesome and google font is also imported on this file so it's going to be applied on all of the pages. the input form POSTS a request to the addTodo.php.
2. index.php - when you launch the app, the route will go to this page by default. at the start of the code, it will get all of the todos from the database and save it into a array which can be displayed anywhere on the page. if the todo is completed, it will add a class for the style that crosses out the todo. 
3. script.js - this script only has 3 functions; deleteTodo -> this function requires 2 parameters(id - id of the todo, location - location of where to be redirected after you've deleted the todo on the database) the location is the value of the selection(default, 0 - uncompleted page, 1 - completed page), updateTodo -> this function has 3 parameters(id - id of the todo, completed - completed status on the todo, location - similar to deleteTodo), selection onChange - this is the navigation handler of the application where it redirects to other page based on the selection
4. addTodo.php - this file receives a POST request from the base.php inserts data to the database then redirects user back to index.php
5. database - there are only 1 table and 4 columns of the database(id - id of the record(auto incremented), user - user who inserted the todo(the is no user roles for this application so the it will insert "default" by default), text - the todo inserted by user on the input form, completed - there are 2 values for this column(0 - uncompleted, 1 - completed)). when you insert a record, the database will automatically insert 0 on the completed by default so you would only need to insert the text/todo.

