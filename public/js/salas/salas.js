var sala="http://localhost/GestionDeSalas/public/"
var urlsala=sala + '/apiSalas';
new Vue({
	
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#salas',
	data:{
		res_espacios:[],
		id_espacio:'',
		nombre:'',
		cupo:'',
		buscar:'',
		
	},

	created:function(){
		this.getSala();
	},

	methods:{
		getSala:function(){
			this.$http.get(urlsala)
			.then(function(json){
				this.res_espacios=json.data
			});
		},

		guardarSala:function(id){
			this.$http.get(urlsala + '/' + id)
			.then(function(json){
				this.id_espacio=json.data.id_espacio;
				this.nombre=json.data.nombre;
				this.cupo=json.data.cupo;
			});
		},

		eliminarSala:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlsala + '/' + id)
				.then(function(json){
				this.getSala();
				});
			}
			
		},

		agregarSala:function(){
			var sala={
				id_espacio:this.id_espacio,
				nombre:this.nombre,
				cupo:this.cupo
			};

				this.id_espacio='';
				this.nombre='';
				this.cupo='';

			this.$http.post(urlsala,sala)
			.then(function(response){
				this.getSala();
				alert('Se Ha Agregado Con Exito');
			});

		},

		actualizarSala:function(id){
			// crear un json 
			var sala={
				id_espacio:this.id_espacio,
				nombre:this.nombre,
				cupo:this.cupo,
					  }
		    console.log();

			this.$http.patch(urlsala + '/' + id,sala)
			.then(function(json){
				this.getSala();
				this.limpiar();
			})
		},

		limpiar:function(){
				
				this.id_espacio='';
				this.nombre='';
				this.cupo='';
		}

	},

	computed:{
		filtroSala:function(){
			return this.res_espacios.filter((x)=>{
				return x.nombre.match(this.buscar.trim()) ||
					x.nombre.toLowerCase()
					.match(this.buscar.trim().toLowerCase());
			});
		},
	},

});