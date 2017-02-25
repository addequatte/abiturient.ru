<?php require_once('header.php') ?>
<?php require_once('left-sidebar.php') ?>
<?php $rrr = Array(
    'administrator' => Array(
            'name' => 'Administrator',
            'capabilities' => Array(
                    'edit_users' => 1,
                    'edit_files' => 1,
                    'manage_options' => 1,
                    'moderate_comments' => 1,
                    'manage_categories' => 1,
                    'manage_links' => 1,
                    'upload_files' => 1,
                    'edit_posts' => 1,
                    'edit_others_posts' => 1,
                    'edit_published_posts' => 1,
                    'publish_posts' => 1,
                    'read' => 1,
                    'level_10' => 1,
                    'level_9' => 1,
                    'level_8' => 1,
                    'level_7' => 1,
                    'level_6' => 1,
                    'level_5' => 1,
                    'level_4' => 1,
                    'level_3' => 1,
                    'level_2' => 1,
                    'level_1' => 1,
                    'level_0' => 1,
                    'delete_posts' => 1,
                    'delete_others_posts' => 1,
                    'delete_published_posts' => 1,
                    'delete_private_posts' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1,
                    'delete_private_pages' => 1,
                    'edit_private_pages' => 1,
                    'read_private_pages' => 1,
                    'delete_users' => 1,
                    'create_users' => 1,
                    'list_users' => 1,
                    'remove_users' => 1,
                    'promote_users' => 1
                )
        ),
    'editor' => Array(
            'name' => 'Editor',
            'capabilities' => Array(
                    'moderate_comments' => 1,
                    'manage_categories' => 1,
                    'manage_links' => 1,
                    'upload_files' => 1,
                    'edit_posts' => 1,
                    'edit_others_posts' => 1,
                    'edit_published_posts' => 1,
                    'publish_posts' => 1,
                    'read' => 1,
                    'level_7' => 1,
                    'level_6' => 1,
                    'level_5' => 1,
                    'level_4' => 1,
                    'level_3' => 1,
                    'level_2' => 1,
                    'level_1' => 1,
                    'level_0' => 1,
                    'delete_posts' => 1,
                    'delete_others_posts' => 1,
                    'delete_published_posts' => 1,
                    'delete_private_posts' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1
                )

        ),
    'author' => Array(
            'name' => 'Author',
            'capabilities' => Array(
                    'upload_files' => 1,
                    'edit_posts' => 1,
                    'edit_published_posts' => 1,
                    'publish_posts' => 1,
                    'read' => 1,
                    'level_2' => 1,
                    'level_1' => 1,
                    'level_0' => 1,
                    'delete_posts' => 1,
                    'delete_published_posts' => 1
                )
        )
);
echo serialize($rrr);?>
<div id="slider">
	<button id="prev-slide" onclick="move_slide('back', '3')"><i class="icon-left"></i></button> <!-- Второй параметр - это количество слайдов -->
	<button id="next-slide" onclick="move_slide('next', '3')"><i class="icon-right"></i></button>
	<div id="caption-nav">
		<div>
			<span id="radio-1"></span>
			<span id="radio-2"></span>
			<span id="radio-3"></span>
		</div>
	</div>
	<div id="slide-1">
		<div class="slider-caption">
			<div>
				<h3>Заголовок 1</h3>
				<li>Краткий текст содержания статьи</li>
				<button><a href="">ссылка на статью</a></button>
			</div>
		</div>
	</div>
	<div id="slide-2">
		<div class="slider-caption">
			<div>
				<h3>Заголовок 2</h3>
				<li>Краткий текст содержания статьи</li>
				<button><a href="">ссылка на статью</a></button>
			</div>
		</div>
	</div>
	<div id="slide-3">
		<div class="slider-caption">
			<div>
				<h3>Заголовок 3</h3>
				<li>Краткий текст содержания статьи</li>
				<button><a href="">ссылка на статью</a></button>
			</div>
		</div>
	</div>
</div>
<div id="content" style="padding-top:420px" class="left">
	<div class="block">
		<p><b>Система «Абитуриент»</b> - это уникальная автоматизированная электронная база данных по всем абитуриентам СФУ, специально разработанная для проведения приемной кампании Сибирского федерального университета.</p>
		<p>Став абитуриентом СФУ, Вы сможете, не выходя из дома, отслеживать свое <strong>положение в конкурсе</strong> по мере поступления в приемную комиссию сведений о результатах ЕГЭ и прохождения вступительных испытаний.</p>
	</div>
	<div class="block">
		<p>Для зачисление на <b>Бюджетные</b> места необходимо:</p>
		<Ol>
			<li><strong>Оригинал документа об образовании</strong></li>
			<li><strong>Заявление о согласии на зачисление</strong></li>
		</ol>
	</div>
	<div class="block">
		<p>Для зачисление на <b>Платные</b> места необходимо:</p>
		<Ol>
			<li><strong>Копия</strong> или<strong>Оригинал документа об образовании</strong></li>
			<li><strong>Заявление о согласии на зачисление</strong></li>
			<li>Заключить договор, внести оплату за 1 семестр обучения и предоставить копию (или скан) квитанции в приемную комиссию.</li>
		</ol>
	</div>
	<div class="block">
		<p>Документы нужно доставить в приемную комиссию не позднее 18:00 по местному времени:</p>
		<Ol>
			<li><strong>28 июля - если поступаете</strong> без вступительных испытаний/ по особым правам/ по целевому приему</li>
			<li><strong>1 августа - если поступаете</strong> по общему конкурсу (для участия в первой волне/ этапе зачисления)</li>
			<li><strong>6 августа - если поступаете</strong> по общему конкурсу (для участия во второй волне/ этапе зачисления)</li>
		</ol>
	</div>
	<h3>Более подробная информация представлена <a href="http://www.sfu-kras.ru">на сайте СФУ</a></h3>
</div>
<script>var timerId = setTimeout(function live_slide(){move_slide('next', '3'); timerId = setTimeout(live_slide, 5000); }, 5000)</script> <!-- Второй параметр - это количество слайдов -->
<?php require_once('footer.php') ?>