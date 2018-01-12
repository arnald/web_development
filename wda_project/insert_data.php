<?php

    $result = false;

    $dbhost = 'localhost';
    $username = 'root';
    $password = 'Dwyane Wade 2006';
    $db = 'project';

    if( $_SERVER['REQUEST_METHOD']=='POST' ){

        $conn = new mysqli ( $dbhost,$username, $password, $db );
        if( $conn ){

            $sql='insert into `wda` ( `name`,`email`,`message` ) values (?,?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('sss', $_POST['name'], $_POST['email'], $_POST['message'] );
            $result = $stmt->execute();

        }
        $conn->close();
    }

?>