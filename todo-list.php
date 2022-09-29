<?php
session_start();

include "db-todo-list.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="todo-list.css">
</head>

<body>
    <div class="container">
        <h2>TO-DO LIST</h2>
        <div class="body">
            <div class="box">
                <div class="box1">
                    <div class="left-wrapper">

                        <div class="head">
                            <div class="left">
                                <h4>Tasks</h4>
                            </div>
                            <div class="right">
                                <h4>All</h4>
                                <hr class="hr-head">
                                <h4>Not completed</h4>
                                </a>
                            </div>
                        </div>
                        <form action="todo-list-process.php" method="POST">

                            <div class="one">

                                <div class="main-box">
                                    <?php
                                    $sql = "select * from todolist";
                                    $query = mysqli_query($connect, $sql);
                                    // $num = 0;
                                    if (mysqli_num_rows($query) > 0) {
                                        foreach ($query as $todolist) {
                                            // $num += 1;

                                            // echo $num;
                                    ?>
                                            <div class="check-box">
                                                <input type="checkbox" class="check1 check">
                                                <p><?php echo $todolist["text"]; ?></p>
                                            </div>

                                    <?php
                                        }
                                    } else echo "No user found!";
                                    ?>
                                    <div class="add-box">
                                        <input type="text" class="add-task" placeholder="Add new task" name="text">
                                        <input type="submit" class="add-btn" value="+ Add" name="add">
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>



                <div class="box2">
                    <div class="right-wrapper">

                        <h4>Activity</h4>
                        <div class="two">
                            <?php
                            $sql = "select * from todolistactivity";
                            $query = mysqli_query($connect, $sql);
                            //   $num = 0;
                            if (mysqli_num_rows($query) > 0) {
                                foreach ($query as $todolistactivity) {
                                    //                 $num += 1;

                                    //                 echo $num;
                            ?>
                                    <div class="main">
                                        <div class="dot"><img src="bxs-circle.svg" alt="timeline">
                                        </div>
                                        <hr>

                                        <div class="activity">
                                            <div class="time">
                                                <span><?php echo $todolistactivity["date"]; ?></span>
                                            </div>
                                            <div class="text">
                                                <a href="#">Completed task:</a>
                                                <p><?php echo $todolistactivity["completed"]; ?></p>
                                            </div>

                                        </div>

                                    </div>
                            <?php
                                }
                            } else echo "No user found!";
                            ?>

                        </div>
                    </div>
                    <div class="shadows"> shaowwwww</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>