<?php
include 'header.php';
// DB Connections
$db = new mysqli('localhost', 'root', '', 'final_project');
$sql = $db->query("SELECT * FROM `list` ORDER BY sl ASC");
$msg = '';
$sl = '';
$task = '';
$date = '';



// Data Updation

if (isset($_GET['act']) && isset($_GET['sl']) && $_GET['act'] == 'edit' && $_GET['sl'] > 0) {
    $up = $db->query("SELECT * FROM `list` WHERE sl = '" . $_GET['sl'] . "'");
    $u = $up->fetch_assoc();
    $sl = $u['sl'];
    $task = $u['task'];
    $date = $u['date'];

    if (!empty($_POST['task'])) {

        $sl = $_GET['sl'];
        $task = $_POST['task'];
        $date = $_POST['date'];

        if ($db->query("UPDATE `list` SET `task`='$task',`date`='$date', WHERE sl=$sl")) {
            $msg = "Data Updated successfully";
            header("location: goal.php");
        }
    }
} else {
    // Data insert
    if ($_POST) {
        
        if(!empty($_POST['task'])){
            $task = $_POST['task'];
            $date = $_POST['date'];
            $status = $_POST['status'];
         
         

            if ($db->query("INSERT INTO `list`( `sl`, `task`, `date`, `status`) VALUES ('', '$task','$date', '$status')")) {
                
                $msg = "Data inserted successfully";
                header("location: goal.php");
                
            }else{
                $msg="something error";
            }
        } else {
            $msg = "Fill all the fields.";
        }
    }
}
?>

<body>
    <div class="container">
        <div class="card m-2 p-3">
            <h2 align="center">To Do List</h2>
            <form action="" method="POST">
                <div class="row g-2 p-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="hidden" name="sl" value="<?=$sl?>" class="form-control">
                            <input type="text" name="task" value="<?=$task?>" class="form-control"  id="floatingInputGrid" placeholder="Enter your valubale task">
                            <label for="floatingInputGrid">Enter your valubale task</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid">
                                <option selected>Open this select menu</option>
                                <option value="1">active</option>
                                <option value="2">draft</option>

                            </select>
                            <label for="floatingSelectGrid">Select Priority</label>
                        </div>

                    </div>

                </div>
                <div class="row g-2 p-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid">
                                <option selected>Open this select menu</option>
                                <option value="1">complete</option>
                                <option value="2">incomplete</option>

                            </select>
                            <label for="floatingSelectGrid">Select Status</label>
                        </div>

                    </div>


                    <div class="col-md">
                        <div class="form-floating">
                            <input type="date" name="date" value="<?=$date?>" class="form-control" id="floatingInputGrid">
                            <label for="floatingSelectGrid">Select Due date</label>
                        </div>

                    </div>

                </div>

                <div class="d-grid col-4 p-2  mx-auto">
                    <button class="btn btn-primary btn-lg" value="submit" type="submit">Save</button>
                </div>

            </form>

        </div>
        <div class="card card-body shadow-sm">
           
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sl No.</th>
                        <th scope="col">Task List</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $sql->fetch_assoc()) { ?>
                        <tr>
                            <th><?= $row['sl'] ?></th>
                            <td><?= $row['task'] ?></td>
                            <td><?= $row['date']?></td>
                            <td class="text">
                                <a href="?act=edit&sl=<?= $row['sl'] ?>" class="btn btn-primary">Update</a>
                                
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
</body>

</html>