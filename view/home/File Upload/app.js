var app = new Vue({
	el: '#mainForm',
	data: {
		forValidation: {username: '', useremail: '', password: '', confirm_password: '', file: ''},
		
		errorUserimage: "",
		successMessage: ""
	},
	methods:{
		submitForm: function(){
			this.file = this.$refs.file.files[0];      
			var valForm = app.toFormData(app.forValidation);
			valForm.append('file', this.file);
			axios.post('validation.php', valForm,
			{
				headers: {
		            'Content-Type': 'multipart/form-data'
		        }
			})
				.then(function(response){
					if(response.data.username){
						
					}
					
					else{
						app.successMessage = response.data.message;
						
						app.errorUserimage = '';
					}
				});
		},
		
		focusUserimage: function(){
			this.$refs.file.focus();
		},
		toFormData: function(obj){
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		},

		clearMessage: function(){
			app.successMessage = '';
		}
	}
});