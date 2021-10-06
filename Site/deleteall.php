<?php
    $dsn = 'mysql:host=site;dbname=tasks';
    $pdo = new PDO($dsn,'root','root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $id = $_GET['id'];

    $sql= 'TRUNCATE TABLE tasks';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header('Location: /Список-дел.php');
?>