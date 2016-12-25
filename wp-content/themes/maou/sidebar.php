	<div class="col-md-3 right-block">
		<div class="application">
			<p>Подать заявку</p>
			<p>Имя</p>
			<input type="text" name="name">
			<p> Email</p>
			<input type="text" name="email">
			<p>Комментарий</p>
			<textarea></textarea>
			<button>Подать заявку</button>
		</div>
		<div id="right-menu">
			<ul>
				<li>Подпункт меню</li>
				<li>Подпункт меню</li>
				<li>Подпункт меню</li>
				<li>Подпункт меню</li>
				<li class="dropdown-right">Подпункт меню</li>
				<div>
					<ul>
						<li>Подпункт второго уровня меню</li>
						<li>Подпункт второго уровня меню</li>
						<li>Подпункт второго уровня меню</li>
					</ul>
				</div>
				<li>Подпункт меню</li>
				<li>Подпункт меню</li>
				<li>Подпункт меню</li>
				<li>Очень очень очень длинный подпункт меню</li>
				<li class="dropdown-right">Подпункт меню</li>
				<div>
					<ul>
						<li>Подпункт второго уровня меню</li>
						<li>Подпункт второго уровня меню</li>
						<li>Подпункт второго уровня меню</li>
					</ul>
				</div>
				<li>Подпункт меню</li>
				<li>Подпункт меню</li>
				<li>Подпункт меню</li>
			</ul>
		</div>
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
														<?php endif; ?>
													</div>