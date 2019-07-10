<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    $collection=[];

    $file = file_get_contents("data.txt");

    if($file==''){
        file_put_contents("data.txt","a:0:{}");
        $file = file_get_contents("data.txt");
        $collection = unserialize($file);
    }
    else{

    $collection = unserialize($file);
    }

    
    array_push($collection, ['name' => $name, 'age' => $age, 'email' => $email]);
    
    $file = serialize($collection);

    file_put_contents("data.txt",$file);


    header("Location: {$_SERVER['HTTP_REFERER']}");
?>