<?php
require_once('header.php');
require_once('left-sidebar.php');
require_once('functions.php');
?>
<div id="content" class="left">
	<h3>Уважаемый Абитуриент!</h3>
	<p>Вы находитесь на своей персональной сранице АИС &laquoАбитуриент&raquo.
	 Проверьте свои данные. В случае нахождения ошибки обратитесь в приемную комиссию СФУ.
	 Внести изменения может только оператор Приёмной комиссии по месту подачи заявления.
	 Изменения в заявление поступающим на очную форму можно вносить <strong>до 26 июля.</strong></p>
	<div class="block">
		<p>В АИС Вы видите свой РЕЙТИНГ(сумму баллов за вступительные испытания + индивидуальные достижения) и ПОЛОЖЕНИЕ В КОНКУРСЕ(Ваше место относительно других претендентов на конкретную специальность, направление или программу).</p>
		<p><strong>ПОЛОЖЕНИЕ В КОНКУРСЕ ПО СУММЕ БАЛЛОВ</strong> показывает Ваше место по рейтингу, без учета представленных оригиналов документов об образовании(подлинников) и Согласия.</p>
		<p><strong>ПОЛОЖЕНИЕ В КОНКУРСЕ С УЧЕТОМ ПОДЛИННИКОВ</strong> показывает Ваше место с учетом оригиналов документов об образовании и Согласия. 
		Именно по данному рейтингу проводится зачисление</p>
	</div>
	<div id="rating">
	<?php	
	$i=1;
	foreach($user_university_data as $user){
        if($user['user_id'] == $_SESSION['id']){
		echo '<div id="table-rating-1" class="block">
			<div class="left-rating left">
				<div id="student">'.user_name($user[user_id]).'<i>'.$i.'</i></div>
				<div id="pay-base">На платной основе<i class="icon-'.checker($user[pay-base]).'"></i></div>
				<div id="paid">Оплачено<i class="icon-'.checker($user[paid]).'"></i></div>
				<div id="original">Подлинник<i class="icon-'.checker($user[original]).'"></i></div>
				<div id="olympiad">Диплом олимпиады<i class="icon-'.checker($user[olympiad]).'"></i></div>
				<div id="permission">Согласие<i class="icon-'.checker($user[permission]).'"></i></div>
			</div>
			<div class="right-rating left">
				<div id="score-study">
					<b>Рейтинг</b>
					<div class="text-right right">'.sum_score($user[user_id]).'</div>
				</div>
				<div id="type-study">
					<b>Тип поступления</b>
					<div class="text-right right">'.$user['type-study'].'</div>
				</div>
				<div  id="form-study">
					<b>Форма обучения</b>
					<div class="text-right right">'.$user['form-study'].'</div>
				</div>
				<div id="group-study">
					<b>Конкурсная группа</b>
					<div class="text-right right">'.$user['group_study'].'</div>
				</div>
				<div id="pos-score">
					<b>Положение <b class="full">в конкурсе</b> по сумме баллов</b>
					<div class="text-right right">'.pos_all($user[user_id], $user['group_study']).' из '.pay_place($user['group_study']).'</div>
				</div>
				<div  id="pos-orig">
					<b>Положение <b class="full">в конкурсе</b> с учетом подлинников</b>
					<div class="text-right right">'.pos_orig($user[user_id], $user['group_study']).' из '.orig_count($user['group_study']).'</div>
				</div>
			</div>
		</div>
		';
		$i++;
		}
	} ?>
	</div>
	<div class="block">
		<p>Например Ваш <strong>РЕЙТИНГ</strong> - 188 баллов:</p>
		<p><strong>ПОЛОЖЕНИЕ В КОНКУРСЕ ПО СУММЕ БАЛЛОВ</strong>: 659 из 54.</p>
		<p><strong>ПОЛОЖЕНИЕ В КОНКУРСЕ С УЧЕТОМ ПОДЛИННИКОВ</strong>: 10 из 15.</p>
		<p><b>Положение в конкурсе по сумме баллов</b> означает, что в данный момент впереди вас 658 абитуриента имеют более высокий рейтинг, 54 - это количество бюджетных мест.</p>
		<p><b>Положение в конкурсе с учетом подлинников</b> означает, что перед вами всего 9 человек, предоставляющих все необходимые документы. Следовательно, если и вы предоставите документы, то будете зачислены вместе с ними.</p>
	</div>
	<h3>Списки с баллами будут размещаться на сайте СФУ с 27-го июля.</h3>
</div>
<?php require_once('footer.php') ?>