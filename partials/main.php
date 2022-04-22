<?php 
	include_once __DIR__ . "/../server/data.php"
; ?>

<main>
	<section id="albums-cards" class="container">
		<?php foreach($albums as $albums) { ; ?>
			<div class="album-card">
				<img src="<?= $albums['poster'] ; ?>" alt="<?= $albums['title'] ; ?>" />
				<h3 class="title">
					<?= $albums['title'] ; ?>
				</h3>
				<p class="author">
					<?= $albums['author'] ; ?>
				</p>
				<span class="year">
					<?= $albums['year'] ; ?>
				</span>
			</div>
		<?php } ; ?>
	</section>
</main>
