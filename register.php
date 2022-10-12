<?php
    include 'db_conn.php';

    if (isset($_POST['uname']) && isset($_POST['name']) && isset($_POST['password'])) {
        $username = validate($_POST['uname']);
        $name = validate($_POST['name']);
        $password = validate($_POST['password']);
        if (empty($username)) {
            header('location: index.php?error=Username is required');
            exit();
        } else if (empty($name)) {
            header('location: index.php?error=Name is required');
            exit();
        } else if (empty($password)) {
            header('location: index.php?error=Password is required');
            exit();
        } else {
            $query = "INSERT INTO user VALUES ('', '$username', '$name', '$password')";
            
            if ($conn->query($query) === true) {
                header('location: index.php?error=New user created');
                exit();
            } else {
                header('location: index.php?error=Internal error');
                exit();
            }
        }
    } else {
        header('location: index.php?error=Do not leave anything blank!');
        exit();
    }

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }