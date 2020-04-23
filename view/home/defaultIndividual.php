<!DOCTYPE html>
<html lang="en">
<head>
  <title>For Individual</title>
  <meta charset="utf-8">
  <!-- Tell the browser to be responsive to screen width -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="styleHome.css" type="text/css" rel="stylesheet">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
  







<body style="background-color: #f5f5f5;">
<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="http://localhost/trust_people/logo.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><img src="http://localhost/trust_people/sample_profile.png" class="img-responsive" style="width:100%" alt="Image"></li>
      <li><h3> Williams </h3></li>
        
       
        
    </div>
  </div>
</nav>
-->
<!-- Collapsable Navbar -->
<div id="app">
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand mb-n4 mr-auto" href="#">
		<img class="rounded-lg" src="images/logo.png" alt="Logo">
		<a href="defaultIndividual.php" class="d-flex justify-content-end small font-weight-lighter">For Individuals</p>
    </a>
    <div class="">
       <!-- Top Nav Bar -->
      <ul class="navbar-nav">
        <li class="nav-item align-self-center mx-2">
        <!-- Link to Home -->
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item align-self-center mx-2">
        <!-- Link to Enterprise -->
          <a  href="defaultEnterprise.php">For Enterprise</a>
        </li>
		<li class="nav-item align-self-center mx-2">
			<a class="nav-link" href="profile.html">
				<img src="images/sample_profile.png" style="width:50%">
			</a>
		  </li>   
      </ul>
    </div>  
  </nav>
  <br>
  <!-- Container for search bar and profile icon -->
  <div class="block2">
<a class="glyphicon glyphicon-pencil topic marginRight" href="Create_Posts/index.php"> Post Now</a>
 
  </div>
  <div class="block2">
  <div class="container-fluid ">
       <!-- Search Bar and Profile Icon      -->
	<form class="form-inline d-flex justify-content-center md-form form-sm my-1 ">
		<input class="form-control form-control-sm mr-3 w-75 rounded-lg" type="text" placeholder="Search" aria-label="Search">
		<i class="fa fa-search" aria-hidden="true"></i>
  	</form>
   
  
  <!-- Container for search bar and profile icon -->
  </div>
  </div>
  
<div class="block1">
<div class="btn-group btn-xl block1" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-xl btn-secondary">Most Recent</button>
  <button type="button" class="btn btn-xl btn-secondary">Top Posts</button>
</div>
<a href="File Upload/index.php"> Change Profile Picture</a>
  </div>
  
  <br>
  <br><br><hr><br><br>  



  <!-- Post Formatting -->
  <!-- Post Formatting -->
  <div class="container">
  <div class="well" style="background-color: #FFFFFF; box-shadow: 0px 1px 2px 0px rgba(0,0,.9, .9)">
      <div class="media">
  		<a class="pull-left" href="#">
    		<img class="media-object" src="images/sample_profile.png">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading">Why can I no longer use the stretch button?</h4>
          <p class="text-right">By Williams @jamon</p>
          <p>This is a resource that seeks to educate job seekers or the unemployed on how to search for jobs online and offline. It is very important to note the various ways</p>
          <ul class="list-inline list-unstyled">
          <span><button v-on:click="updateFollower" class="button-oval">Follow</button></span>
            <li>|</li>
  			<li><span><i class="glyphicon glyphicon-calendar"></i> Jan 14th, 2020</span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
            <li>|</li>
            
            
            <li>
              <p>43 Yes. I am with you.</p>
              <p>120 I have similar experience.</p>
            </li>
            <li>|</li>
            <span><button id="show-modal" class="button-oval" @click="showModal3 = true">Share</button>
      <!-- use the modal component, pass in the prop -->
      <modal v-if="showModal3" @close="showModal3 = false" >
        <!--
      you can use custom content here to overwrite
      default content
    -->
        <h3 slot="header">Share</h3>
        <p slot="body">
        <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
        </p>

      </modal></span>
            <li>|</li>
			</ul>
       </div>
    </div>
  </div>


  
    <!-- Database Post -->
    <div class="well" style="background-color: #FFFFFF; box-shadow: 0px 1px 2px 0px rgba(0,0,.9, .9)" v-for="posts in posts">
      <div class="media">
  		<a class="pull-left" href="#">
    		<img class="media-object" src="images/sample_profile.png">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading">Why can I no longer use the stretch button?</h4>
          <p class="text-right">By {{ posts.name }}, {{ posts.role }}</p>
          <p>{{ posts.attachment }}</p>
          <ul class="list-inline list-unstyled">
          <span><button v-on:click="updateFollower" class="button-oval">Follow</button></span>
            <li>|</li>
  			<li><span><i class="glyphicon glyphicon-calendar"></i> {{ posts.date_post }}</span></li>
            <li>|</li>
            <span>
            <button id="show-modal2" class="button-oval" @click="showModal2 = true">Comments</button>
      <!-- use the modal component, pass in the prop -->
      <modal v-if="showModal2" @close="showModal2 = false" >
        <!--
      you can use custom content here to overwrite
      default content
    -->
        <h3 slot="header"><i class="glyphicon glyphicon-comment"></i>Comments</h3>
       <div slot="body">
       <form action="#" method="POST">
                               
                                <div class="form-group">
                                    <input type="text" name="comment" class="
                                    form-control form-control-lg" placeholder="Add New Comment" v-model="newPost.comment">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info btn-block btn-lg" @click="showModal2=false; addComment(); clearMsg();">Add Comment</button>
                                </div>                            
                           </form>
          <table slot="body" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center bg-info text-light">
                                    <th>Comments</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>{{ posts.comments }}</td>
                                 
                                    
                                </tr>
                                
                            </tbody>
  </table>
  </div>
      </modal>
  </span>
			
            <li>|</li>
            
            <li>
              <button v-on:click="incrementAgree"> {{ posts.agree_value }} </button><p>Yes. I am with you.</p> 
              <button v-on:click="incrementSimilar"> {{ posts.similar_value }} </button><p>I have similar experience.</p>
              
            </li>
            <li>|</li>
            <span><button id="show-modal" class="button-oval" @click="showModal3 = true">Share</button>
      <!-- use the modal component, pass in the prop -->
      <modal v-if="showModal3" @close="showModal3 = false" >
        <!--
      you can use custom content here to overwrite
      default content
    -->
        <h3 slot="header">Share</h3>
        <p slot="body">
        <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
        </p>

      </modal></span>
            <li>|</li>
  
    <button id="show-modal" class="button-oval" @click="showModal = true">Show More</button>
      <!-- use the modal component, pass in the prop -->
      <modal v-if="showModal" @close="showModal = false" >
        <!--
      you can use custom content here to overwrite
      default content
    -->
        <h3 slot="header">Post Info</h3>
        <p slot="body">{{ posts.attachment }}</p>

      </modal>
			</ul>
       </div>
    </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
  <!-- Vue code -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
	var app = new Vue({
		el: '#app',
		data: {
      errorMsg : "",
			successMsg : "",
      users : [],
      showModal: false,
      showModal2: false,
      showModal3: false,
      agreeVal: 0,
      similarVal: 0,
			posts : [],
			newPost : {name: "", date_post: "", role: "", date_discussed: "", location: "", attachment: ""},
			currentPost : {},
			// a : 1
    },
    //Calls the methods on start
		mounted: function(){
			
			this.getAllPost();
			// this.a+1;
		},
    methods: {
			//reads post information
			
			getAllPost(){
				axios.get("model.php?action=readpost").then(function(response){
					if(response.data.error){
						app.errorMsg = response.data.message;
					}
					else{
						app.posts = response.data.posts;
					}
				});
			},

      updateFollower(){
				axios.get("model.php?action=updatefollower").then(function(response){
					if(response.data.error){
						app.errorMsg = response.data.message;
					}
					else{
						app.posts = response.data.posts;
					}
				});
        alert('You are now following this user.');
			},

      addComment(){
                    var formData = app.toFormData(app.newPost);
                    axios.post("model.php?action=createcom", formData).then(function
                    (response){
                        app.newPost = {comment: ""};
                        if(response.data.error){
                            app.errorMsg = response.data.message;
                        }
                        else{
                            app.successMsg = response.data.message;
                            app.getAllPost();
                        }
                    });
			},

      updateUser(){
				var formData = app.toFormData(app.currentProfile);
				axios.post("model.php?action=update_profile", formData).then(function(response){
					app.currentProfile = {};
					if(response.data.error){
						app.errorMsg = response.data.message;
					}
					else{
						app.successMsg = response.data.message;
						app.getAllProfile();
					}
				});
      },
      incrementAgree() {
        axios.get("model.php?action=incrementAgree").then(function(response){
					if(response.data.error){
						app.errorMsg = response.data.message;
					}
					else{
						app.posts = response.data.posts;
					}
				});
    },
    
    incrementSimilar() {
      axios.get("model.php?action=incrementSimilar").then(function(response){
					if(response.data.error){
						app.errorMsg = response.data.message;
					}
					else{
						app.posts = response.data.posts;
					}
				});
    },
			
			toFormData(obj){
				var fd = new FormData();
				for(var i in obj){
					fd.append(i, obj[i]);
				}
				return fd;
			},
			selectProfile(profile){
				app.currentProfile = profile;
      },
      //alerts user on follow
     
			clearMsg(){
				app.errorMsg = "";
				app.successMsg = "";
			}
			},
	});
</script>




</body>
</html>