<?php
try {
    $host = '127.0.0.1';
    $port = '3307';
    $dbname = 'demo';
    $user = 'root';
    $pass = '';

    $db = new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user, $pass);

    // $create_query = 'CREATE TABLE IF NOT EXISTS users(
    // user_id  INT(11) AUTO_INCREMENT PRIMARY KEY,
    // username VARCHAR(50) NOT NULL,
    // email VARCHAR(100) NOT NULL,
    // is_logged_in INT(1) DEFAULT 0
    // )';
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $insert_query = "INSERT INTO users (username, email, is_logged_in) VALUES ('O''Reily', 'reily@gmail.com', 0)";

    // $update_query = "UPDATE users SET username='Josiah Queen'
    // WHERE email='jqueen@gmail.com'";

    // $delete_query = "DELETE FROM users WHERE user_id = 5 || user_id = 6";

    /*
    $stmt = $db -> prepare("INSERT INTO users (username, email) VALUES (?, ?)");
    $stmt -> execute(['bob', 'bob@example.com']); */

    // $users = [];

    // $stmt = $db -> query("SELECT COUNT(*) AS total_users FROM users WHERE user_id % 2 = 0");

    // $users = $stmt -> fetch();
    // while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    //     $users[] = $row;
    // }

    // $users = $stmt -> fetchAll();

    // echo '<pre>';
    // print_r($users);
    // echo '<pre>';

    $select_query = $db -> query("SELECT is_logged_in FROM users ORDER BY is_logged_in DESC LIMIT 2");
    
    while($row = $select_query -> fetch(PDO::FETCH_OBJ)) {
        $users[] = $row;
    }
        
    echo '<pre>';
    print_r($users);
    echo '<pre>';
} catch (PDOException $e) {
    $error = $db -> errorInfo();
    echo "Error inserting data:";
    echo "SQL Error={$error[0]}, DB Error={$error[1]}, Message={$error[2]}";
}