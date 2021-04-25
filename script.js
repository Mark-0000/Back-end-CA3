function deleteTodo(id, location) {
    if (location == 0){
        location = "uncompleted";
    }else if(location > 0){
        location = "completed";
    }else{
        location = "index";
    }
    window.location.href = "delete.php?id=" + id + "&location=" + location;
}

function updateTodo(id, completed, location) {
    if (location == 0){
        location = "uncompleted";
    }else if(location > 0){
        location = "completed";
    }else{
        location = "index";
    }
    window.location.href = "update.php?id=" + id + "&completed=" + completed + "&location=" + location;
}

var urlmenu = document.getElementById("filter-todos");
urlmenu.onchange = function () {
  let temp = this.options[this.selectedIndex].value;
  console.log(temp);

  if (temp === "default") {
    console.log("all");
    window.location.href = "index.php";
  } else if (temp == 0) {
    console.log("uncompleted");
    window.location.href = "uncompleted.php";
  } else {
    console.log("completed");
    window.location.href = "completed.php";
  }
};

