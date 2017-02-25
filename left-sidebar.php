<input type="checkbox" id="sidebar-left-toggle" class="hidden">
<label class="sidebar-left-toggle" for="sidebar-left-toggle">
	<i class="icon-right"></i>
</label>
<div id="sidebar-left" class="left">
<?php 
    if(empty($_SESSION)) {
	echo "<div id='login-form'>
			<form action='userpass.php' method='post'>
			<input type='text' name='user' placeholder='Логин' required>
			<input type='password' name='password' placeholder='Пароль' required>
			<button type='submit'>Вход</button>
			</form>
		</div>";
        }
if($_SERVER['REQUEST_URI'] == '/rating.php') {
	    foreach($users_data as $user){
        if($user[id] == $_SESSION[id]){
			echo '<div id="user-info">
					<table>
						<tr class="light-back">
							<th colspan="2">Информация о обитуриенте</th>
						</tr>
						<tr>
							<th>ФИО</th>
							<td>'.$user[student].'</td>
						</tr>
						<tr>
							<th>Документ</th>
							<td>'.$user[user_doc].'</td>
						</tr>
						<tr>
							<th>Дата рождения</th>
							<td>'.$user[user_bithday].'</td>
						</tr>
						<tr>
							<th>Адрес</th>
							<td>'.$user[user_adress].'</td>
						</tr>
						<tr>
							<th>Контакты</th>
							<td>'.$user[user_contacts].'</td>
						</tr>
					</table>
				</div>';
				}
			}
    foreach($user_exam_data as $exam){
        if($exam[user_id] == $_SESSION[id]){
            echo '<div id="user-score">
					<table>
						<tr class="light-back">
							<th>Предмет</th>
							<th>Тип</th>
							<th>Оценка</th>
							<th>№ документа</th>
						</tr>
						<tr>
							<td>Русский язык</td>
							<td>'.$exam[rus_type].'</td>
							<td>'.$exam[rus_exam].'</td>
							<td>'.$exam[rus_doc].'</td>
						</tr>
						<tr>
							<td>Математика</td>
							<td>'.$exam[math_type].'</td>
							<td>'.$exam[math_exam].'</td>
							<td>'.$exam[math_doc].'</td>
						</tr>
						<tr>
							<td>'.$exam[user_exam].'</td>
							<td>'.$exam[user_exam_type].'</td>
							<td>'.$exam[user_exam_score].'</td>
							<td>'.$exam[user_exam_doc].'</td>
						</tr>
					</table>
				</div>';
        }
    }
} ?>
</div>