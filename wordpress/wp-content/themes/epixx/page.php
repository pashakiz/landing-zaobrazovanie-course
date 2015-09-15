<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package epixx
 */
?>

<?php get_header(); ?>

<?php /* текст из редактора WP */ 
/*
the_post();
the_content();

*/?>

			<section class="countdown-block">
				<h2><?php the_field('countdown_header'); ?></h2>
				<div class="countdown clearfix" data-countdown-date="<?php the_field('countdown_date'); ?>">
					<div class="dimension-count count-days">
						<div class="value"></div>
						<div class="title"></div>
					</div>
					<div class="count-separator"></div>
					<div class="dimension-count count-hours">
						<div class="value"></div>
						<div class="title"></div>
					</div>
					<div class="count-separator"></div>
					<div class="dimension-count count-mins">
						<div class="value"></div>
						<div class="title"></div>
					</div>
					<div class="count-separator"></div>
					<div class="dimension-count count-seconds">
						<div class="value"></div>
						<div class="title"></div>
					</div>
				</div>
			</section>
			<section id="courseinfo">
				<div class="courseinfo-about">
					<div class="title-section animated out" data-animation="fadeInUp" data-delay="0">
						<h2>В чем особенность этого курса?</h2>
						<p>Качество образования - один из наиболее актуальных вопросов современного образования, поскольку именно оно определяет конкурентоспособность на рынке труда. В курсе подробно рассказывается как устроена система высшего образования Российской Федерации, какими средствами осуществляется его контроль и регулирование.</p>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-4">
							<div class="benefits text-right animated out" data-animation="fadeInLeft" data-delay="0">
								<h5>Уникальные материалы</h5>
								<p>В курсе собраны наработки Комиссии по вопросам качества образования Совета Минобрнауки России по делам молодежи и Общероссийской общественной организации "За качественное образование".</p>
							</div>
							<div class="benefits text-right animated out" data-animation="fadeInLeft" data-delay="0">
								<h5>Обмен опытом</h5>
								<p>Вы будете иметь возможность поделиться опытом и перенять его у коллег из других регионов.</p>
							</div>
							<div class="benefits text-right animated out" data-animation="fadeInLeft" data-delay="0">
								<h5>Современный подход к обучению</h5>
								<p>Формат массового открытого онлайн-курса намного эффективнее других форматов дистанционного образования.</p>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="about img-container">
								<img src="<?php bloginfo("template_directory"); ?>/image/about-img.png" alt="">
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="benefits animated out" data-animation="fadeInRight" data-delay="0">
								<h5>Формирование сообщества</h5>
								<p>В процессе проведения курса сформируется сообщество, занимающееся повышением качества образования, для проведения федеральных проектов.</p>
							</div>
							<div class="benefits animated out" data-animation="fadeInRight" data-delay="0">
								<h5>Повышение квалификации</h5>
								<p>После прохождения курса и успешного выполнения итогового задания, вы получите удостоверение о краткосрочном повышении квалификации.</p>
							</div>
							<div class="benefits animated out" data-animation="fadeInRight" data-delay="0">
								<h5>Экспертное мнение</h5>
								<p>Вы сможете представить свои проекты для получения комментариев и критики экспертами в сфере образования.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="bullets padding80border-bottom">
					<h2>После прохождения курса вы узнаете</h2>
					<div class="row">
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-pencil-square-o"></i>
								<p>Как устроена система образования Российской Федерации, в чем ее особенности и каковы направления развития.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-wrench"></i>
								<p>Какими инструментами осуществляется контроль качества образования со стороны государства.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-files-o"></i>
								<p>Что такое локальные нормативные акты и каковы их функции в регулировании образовательного процесса.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-bar-chart"></i>
								<p>Как проводить мониторинг удовлетворенности студентов качеством образования, использовать опросники и измерительные шкалы.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-rocket"></i>
								<p>Что такое проектная деятельность в сфере образования, каковы ее инструменты и методы.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-bolt"></i>
								<p>Какие проблемы могут возникнуть при оценке качества образования.</p>
							</div>
						</div>
					</div>
				</div> <!-- bullets -->
				<div class="bullets padding80border-bottom">
					<h2>После прохождения курса вы научитесь</h2>
					<div class="row">
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-check-square-o"></i>
								<p>Разрабатывать и доводить до утверждения локальные нормативные акты.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-check-square-o"></i>
								<p>Выстраивать взаимодействие с администрацией образовательной организации для реализации проектной деятельности.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-check-square-o"></i>
								<p>Повышать качество образования в своей образовательном учреждении.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-check-square-o"></i>
								<p>Разрабатывать показатели и инструменты оценки, анализировать ее результаты.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-check-square-o"></i>
								<p>Разрабатывать и управлять проектами, направленными на повышение качества образования.</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
								<i class="fa fa-check-square-o"></i>
								<p>Разрабатывать проектную документацию для получения поддержки проектов в сфере образования со стороны государства и общественных фондов.</p>
							</div>
						</div>
					</div>
				</div> <!-- bullets -->
				<div class="video-about">
					<h3>Вступительное видео к массовому открытому онлайн курсу</h3>
					<p>&quot;Как использовать мнение студентов в оценке качества образования&quot;</p>
					<div class="video-container animated out" data-animation="fadeInUp" data-delay="0">
						<iframe src="http://player.vimeo.com/video/138255430?title=0&amp;byline=0&amp;portrait=0&amp;vq=hd720" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="fitvid778782"></iframe>
					</div>
				</div>
			</section> <!-- #courseinfo -->
			<section id="lectors">
				<div class="title-section" data-delay="0">
					<h2>Лекторы курса</h2>
				</div>
				<div class="row">
					<div class="col-md-3">
						<img src="<?php bloginfo("template_directory"); ?>/image/lector1.jpg" class="img-lector img-circle">
						<p class="lector-name">Швиндт Антоний Николаевич</p>
						<p>Руководитель Комиссии по вопросам качества образования Совета Министерства образования и науки Российской Федерации по делам молодежи, председатель координационного совета Общероссийской общественной организации &laquo;За качественное образование&raquo;.</p>
					</div>
					<div class="col-md-3">
						<img src="<?php bloginfo("template_directory"); ?>/image/lector2.jpg" class="img-lector img-circle">
						<p class="lector-name">Сладкова Анастасия Вячеславовна</p>
						<p>Кандидат юридических наук, старший преподаватель кафедры Административного права и процесса, помощник проректора ФГБОУ ВПО &laquo;Московский государственный юридический университет им. О.Е. Кутафина&raquo;.</p>
					</div>
					<div class="col-md-3">
						<img src="<?php bloginfo("template_directory"); ?>/image/lector3.jpg" class="img-lector img-circle">
						<p class="lector-name">Стукен Татьяна Юрьевна</p>
						<p>Доктор экономических наук, профессор, директор Института психологии, педагогики и управления человеческими ресурсами ФГБОУ ВПО &laquo;Московский государственный гуманитарный университет им. М.А. Шолохова&raquo;.</p>
					</div>
					<div class="col-md-3">
						<img src="<?php bloginfo("template_directory"); ?>/image/lector4.jpg" class="img-lector img-circle">
						<p class="lector-name">Волкова Светлана Вадимовна</p>
						<p>Кандидат педагогических наук, заместитель директора Некоммерческого Партнерства &laquo;Институт развития инициатив молодежи&raquo;; заместитель руководителя Комиссии по вопросам качества образования Совета Министерства образования и науки Российской Федерации по делам молодежи.</p>
					</div>
				</div>
			</section> <!-- #lectors -->
			<section class="about-section padding80border-bottom">
				<h2>Краткая информация о курсе</h2>
				<div class="row">
					<div class="col-sm-4">
						<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
							<i class="fa fa-calendar"></i>
							<h4>6 недель обучения</h4>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
							<i class="fa fa-clock-o"></i>
							<h4>Трудоёмкость: 2-4 часа в неделю</h4>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="about-inner animated out" data-animation="fadeInLeft" data-delay="0">
							<i class="fa fa-language"></i>
							<h4>Язык: русский</h4>
						</div>
					</div>
				</div>
			</section> <!-- .about-section -->
			<section id="faq" class="padding80border-bottom">
				<h2>Вопросы и ответы</h2>
				<p><i class="fa fa-question-circle"></i> <strong>Что такое массовый открытый онлайн-курс?</strong></p>
				<p><i class="fa fa-hand-o-right"></i> Массовый открытый онлайн-курс – это:</p>
				<ul>
					<li>Видео лекции, теоретические тексты и дополнительные материалы.</li>
					<li>Задания, которые помогают не просто понять излагаемые знания, а научиться их применять в собственной деятельности.</li>
					<li>Сообщество людей изучающих тему которой посвящен курс. Общение происходит на интерактивном форуме. В нем вы задаете вопросы и получаете на них ответы. Там вы можете получить важные контакты, которые помогут вам в дальнейшей деятельности.</li>
					<li>Сессии, которые имеют дату начала и окончания. Курс разбит на недели. Курс можно проходить только в то время, пока длится сессия.</li>
					<li>Дедлайны заданий. Каждое задание имеет ограниченный отрезок времени, за который его нужно выполнить.</li>
				</ul>
				<p><i class="fa fa-question-circle"></i> <strong>Получат ли учащиеся сертификаты по окончанию курса?</strong></p>
				<p><i class="fa fa-hand-o-right"></i> Слушатели, которые успешно выполнят индивидуальные задания и проекты курса, получат удостоверение о краткосрочном повышении квалификации.</p>
				<p><i class="fa fa-question-circle"></i> <strong>Можно ли слушать курс не имея знаний в этой сфере?</strong></p>
				<p><i class="fa fa-hand-o-right"></i> Да, курс рассчитан на слушателей не имеющих специальных знаний.</p>
				<p><i class="fa fa-question-circle"></i> <strong>Когда можно записаться на курс?</strong></p>
				<p><i class="fa fa-hand-o-right"></i> Записаться на курс можно уже сейчас, нажав на кнопку &laquo;Записаться на курс&raquo;</p>
				<p><i class="fa fa-question-circle"></i> <strong><?php the_field('question'); ?></strong></p>
				<p><i class="fa fa-hand-o-right"></i> <?php the_field('answer'); ?></p>

			</section> <!-- #faq -->
			<section id="programm" class="padding80border-bottom">
				<h2>Программа курса</h2>
				<p><strong>Неделя 1: Государственная политика в области образования.</strong></p>
				<ul>
					<li>Цели и задачи системы высшего образования;</li>
					<li>Принципы государственной политики в сфере высшего образования;</li>
					<li>Основные тенденции развития системы образования;</li>
					<li>Глобальные тенденции системы образования;</li>
					<li>Локальные тенденции системы образования;</li>
					<li>Законодательство и концептуальные документы, регулирующие сферу образования.</li>
				</ul>
				<p><strong>Неделя 2: Субъекты образовательного процесса, основные понятия и принципы взаимодействия.</strong></p>
				<ul>
					<li>Образовательный процесс: основные понятия;</li>
					<li>Государственные органы в сфере управления образованием;</li>
					<li>Образовательные организации;</li>
					<li>Правовой статус образовательной организации;</li>
					<li>Обучающиеся: общая характеристика;</li>
					<li>Права обучающихся;</li>
					<li>Обязанности обучающихся;</li>
					<li>Краткие выводы.</li>
				</ul>
				<p><strong>Неделя 3: Критерии и принципы оценки качества высшего образования.</strong></p>
				<ul>
					<li>Актуальность вопроса качества образования;</li>
					<li>Понятие качества образования и его классификация;</li>
					<li>Классификации оценки качества образования;</li>
					<li>Подходы к оценке качества образования;</li>
					<li>Система менеджмента качества образования;</li>
					<li>Виды оценки качества образования со стороны государства;</li>
					<li>Сравнение мониторинга и аккредитации;</li>
					<li>Общественная и профессионально-общественная аккредитация;</li>
					<li>Рейтинги в системе оценки качества образования;</li>
					<li>Гарантии качества образования.</li>
				</ul>
				<p><strong>Неделя 4: Разработка критериев и проведение оценки качества образования.</strong></p>
				<ul>
					<li>Содержание оценки качества образования;</li>
					<li>Разработка методики оценки;</li>
					<li>Разработка инструментария оценки;</li>
					<li>Проведение оценки;</li>
					<li>Обработка результатов. Составление отчета;</li>
					<li>Показатели оценки качества образования;</li>
					<li>Примеры вопросов;</li>
					<li>Измерительные шкалы;</li>
					<li>Риски оценки качества образования.</li>
				</ul>
				<p><strong>Неделя 5: Анализ локальных нормативно-правовых актов в контексте внутренней оценки качества.</strong></p>
				<ul>
					<li>Понятие: локальный нормативный акт;</li>
					<li>Устав образовательной организации;</li>
					<li>Предмет регулирования локальных нормативных актов в образовательной организации;</li>
					<li>Локальные нормативные акты, регламентирующие образовательные отношения;</li>
					<li>Представительные органы обучающихся;</li>
					<li>Краткие итоги.</li>
				</ul>
				<p><strong>Неделя 6: Проектирование в сфере образования.</strong></p>
				<ul>
					<li>Принципы проектной деятельности в сфере образования;</li>
					<li>Основные понятия;</li>
					<li>Необходимые компетенции руководителя проекта;</li>
					<li>Проектная деятельность;</li>
					<li>Виды проектирования;</li>
					<li>Структура проекта;</li>
					<li>Возможные трудности при реализации проекта;</li>
					<li>Практикум: обзор проектов.</li>
				</ul>
			</section> <!-- #programm -->
			<section class="about-partners padding80border-bottom">
				<h2>Партнёры</h2>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<a href="http://minobr.org/" class="thumbnail" target="_blank">
							<img src="<?php bloginfo("template_directory"); ?>/image/parner1.png" alt="Министерство образования и науки Российской Федерации">
						</a>
						<p>Министерство образования и науки Российской Федерации</p>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="http://alrf.ru/" class="thumbnail" target="_blank">
							<img src="<?php bloginfo("template_directory"); ?>/image/parner2.png" alt="Ассоциация юристов России">
						</a>
						<p>Ассоциация юристов России</p>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="http://mipt.ru" class="thumbnail" target="_blank">
							<img src="<?php bloginfo("template_directory"); ?>/image/parner3.jpg" alt="Московский физико-технический институт">
						</a>
						<p>Московский физико-технический институт</p>
					</div>
				</div>
			</section> <!-- .about-partners -->
			<section class="about-quotations padding80border-bottom">
				<h2>Цитаты</h2>
				<div class="row">
					<div class="col-sm-3">
						<img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/image/cite1.jpg" alt="">
					</div>
					<div class="col-sm-9">
						<blockquote>
							<p>&laquo;Приоритет государственной политики в области образования - это качество образования для каждого школьника и студента&laquo;.</p>
							<p class="pull-right">Дмитрий Ливанов</p>
						</blockquote>
					</div>
				</div>
				<div class="row mt20">
					<div class="col-sm-3">
						<img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/image/cite2.jpg" alt="">
					</div>
					<div class="col-sm-9">
						<blockquote>
							<p>&laquo;У нас единое понимание, что качественное, современное образование — залог устойчивого развития нашей страны и благодаря сильной высшей школе Россия не раз добивалась успехов.&laquo;.</p>
							<p class="pull-right">Владимир Путин</p>
						</blockquote>
					</div>
				</div>
			</section> <!-- .about-partners -->

<?php get_footer(); ?>