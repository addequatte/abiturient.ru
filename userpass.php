<?php
require_once('data.php');
$user = $_POST['user'];
$password = $_POST['password'];
$count = count($users_data) - 1;
		for($i = 0; $i <= $count ; $i++){
		    if((in_array($_POST['user'], $users_data[$i]) == $users_data[$i]['user_login']) && 
			(in_array($_POST['password'], $users_data[$i]) == $users_data[$i]['user_password'])){
            session_start();
			$_SESSION['id'] = $users_data[$i]['id'];
			$_SESSION['login'] = $user;
			$_SESSION['pass'] = $password;
			$_SESSION['Time'] = time()+3600;
			exit(header("location: rating.php"));
			}
		}
		echo "Вы неверно ввели логин или пароль,<a href='index.php'>попробовать снова</a>";
?>