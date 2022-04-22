const app = new Vue (
	{
		el: "#app",
		data: {
			albums: [],
		},
		created() {
			axios.get('http://localhost/php-ajax-dischi-/server/controller.php')
			.then((result)=>{
				this.albums = result.data.results;
			})
			.error((error)=> console.log(error));
		}
	}
)