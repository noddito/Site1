<?php
    $dsn = 'mysql:host=site;dbname=tasks';
    $pdo = new PDO($dsn,'root','root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $id = $_GET['id'];

    $sql= 'UPDATE tasks SET not_completed_task = not_ready_task WHERE id=?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    $sql= 'UPDATE tasks SET not_ready_task = NULL WHERE id=?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);
    header('Location: /Список-дел.php');
?>