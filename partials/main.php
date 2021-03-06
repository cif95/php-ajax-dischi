<main>
	<section id="albums-cards" class="container">
			<div class="album-card" v-for="album in albums">
				<img :src="album.poster" :alt="album.title" />
				<h3 class="title">
					{{ album.title}}
				</h3>
				<p class="author">
					{{ album.author}}
				</p>
				<span class="year">
					{{ album.year}}
				</span>
				<p class="genre">
					{{ album.genre}}
				</p>
			</div>
	</section>
</main>
