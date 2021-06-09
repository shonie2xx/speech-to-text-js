<?php
    
    $pdo = require 'dbh.conn.php';

     $coleft = '0';
     $cotop = '0';
    $tekst = $_POST['tekst'];
     $image = 'img.url';

    $sql = "INSERT INTO notes(coleft,cotop,tekst,image) VALUES (:coleft,:cotop,:tekst,:image)";
    
    $sth = $pdo->prepare($sql);

    $sth->execute([
        ':coleft'=> $coleft,
        ':cotop' => $cotop,
        ':tekst' => $tekst,
        ':image' => $image
    ]);
    
    $noteId = $pdo->lastInsertId();

    echo 'The last inserted note id ' . $noteId . ' was inserted';

?>

