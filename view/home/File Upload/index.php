<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.10/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
</head>
<body>
	<style type="text/css">
		.error{
			color: red;
		}	
	</style>

	<div class="container" id="mainForm">
		<div class="container-fluid">
			<div class="row bg-dark">
				<div class="col-lg-12">
					<p class="text-center text-light display-4 pt-2" style="font-size: 25px;">Image Upload</p>
				</div>
			</div>
		</div>
		<br>
		<div class="alert alert-success text-center" v-if="successMessage">
			<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
			<span class="glyphicon glyphicon-check"></span> {{ successMessage }}
		</div>
  	    <!-- <form class="form-horizontal" action="#" method="POST"> -->
  	    	
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="file">Select an Image:</label>
		      <div class="col-sm-10">          
		        	<input type="file" class="form-control" name="file" ref="file" v-model="forValidation.file">
		        	<div v-if="errorUserimage" class="error">{{ errorUserimage }}</div>
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <button type="submit" class="btn btn-success" @click="submitForm();">Submit</button>
		      </div>
		    </div>
		</div>
		<!-- </form> -->
		</div>

		<script src="app.js"></script>
</body>
</html>