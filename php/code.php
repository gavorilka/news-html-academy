<?php
    $dbname = "html_simple";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $user = "root";
    $pass = "";
    try {
        $con = new PDO($dsn,$user,$pass);
    } catch(PDOExeption $e){
        var_dump($e);
        echo $e->getMessage();
    }

    $send = $con->query('SELECT * FROM `news`');
   
    function myFetch($res) {
        $posts =[];
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $row;
        }
        return $posts;
    }

    $posts = myFetch($send);

    // echo "<pre>";
    // var_dump($posts);
    // echo "</pre>";