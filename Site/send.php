<?php
	$not_ready_task = $_POST['not_ready_task'];
	if ($not_ready_task == '') {
		echo 'Введите задачу!!!';
		
	}

	$dsn = 'mysql:host=site;dbname=tasks';
	$pdo = new PDO($dsn,'root','root');

	
	$query = $pdo->prepare('INSERT INTO tasks(not_ready_task, time) VALUES( :not_ready_task, :time)');

	$query->bindParam(":time", $time);
	$query->bindParam(":not_ready_task", $not_ready_task);
	$time = $_POST['time'];
	$not_ready_task = $_POST['not_ready_task'];

	$query->execute();

	$time = $_POST['time'];
	if ($time == '') :
		echo "Введите дату!!";
		exit();
	

	endif;
		header('Location:/Список-дел.php');

	
?>