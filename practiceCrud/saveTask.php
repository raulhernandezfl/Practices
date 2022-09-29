<?php

    include("db.php");

    if (isset($_POST['save-task'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        $query = "INSERT INTO task(title, descrition) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed");
        }

        $_SESSION['message'] = 'Task Saved successfuly';
        $_SESSION['message_type'] = 'success';

        header("location: index.php");
    }
?>