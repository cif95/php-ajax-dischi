const app = new Vue (
	{
		el: "#app",
		data: {
			albums: [],
			filteredAlbums: [],
		},
		created() {
			axios.get('http://localhost/php-ajax-dischi-/server/controller.php')
			.then((result)=>{
				this.albums = result.data.results;
				console.log(this.albums);
			})
			.catch((error)=> console.log(error));
			
			axios.get('http://localhost/php-ajax-dischi-/server/genresController.php')
			.then((result)=>{
				this.filteredAlbums = result.data.results;
				console.log(this.filteredAlbums);
			})
			.catch((error)=> console.log(error));
		}
	}
)