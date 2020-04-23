<!DOCTYPE html>
<html lang="en">
<head>
  <title>For Enterprise</title>
  <meta charset="utf-8">
  <!-- Tell the browser to be responsive to screen width -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="home.php"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .bg-2 {
    background-color: #FFFFFF; 
    color: #ffffff;
  } 
  .modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: table;
  transition: opacity 0.3s ease;
}
.marginLeft {
    margin-left: 40px;
}
.marginRight{
    margin-right: 40px;
}
.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
  transition: all 0.3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
  .button-oval {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: rgb(255, 255, 255);
    }

    .nav-item img {
    max-width: 40px;
    border-radius: 50%;
}
.block1 {
  float:left ;
}
.block2 {
  float:right ;
}
.fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  
  .fa-google {
    background: #dd4b39;
    color: white;
  }
  
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }
  
  .fa-youtube {
    background: #bb0000;
    color: white;
  }
  
  .fa-instagram {
    background: #125688;
    color: white;
  }
div.c {
  text-align: right;
} 
.topic { font-size: 20px; text-decoration: none; }
.topic2 { font-size: 25px; text-decoration: none; }

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      /* width: 50%; */
    }
    .column {
  float: left;
  width: 50%;
  padding: 10px;
    }
    /* Add a black background color to the top navigation bar */
</style>

<body style="background-color: #f5f5f5;">


<!-- Modal Instructions -->
<script type="text/x-template" id="modal-template">
      <transition name="modal">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container" >

              <div class="modal-header">
                <slot name="header">
                 
                </slot>
              </div>

              <div class="modal-body">
                <slot name="body">
                  
                </slot>
              </div>

              <div class="modal-footer">
                <slot name="footer">
                  
                  <button class="modal-default-button" @click="$emit('close')">
                    Exit
                  </button>
                </slot>
              </div>
            </div>
          </div>
        </div>
      </transition>
    </script>




    <script type="text/x-template" id="modal-template">
      <transition name="modal2">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container" >

              <div class="modal-header">
                <slot name="header">
                 
                </slot>
              </div>

              <div class="modal-body">
                <slot name="body">
                  
                </slot>
              </div>

              <div class="modal-footer">
                <slot name="footer">
                  
                  <button class="modal-default-button" @click="$emit('close')">
                    Exit
                  </button>
                </slot>
              </div>
            </div>
          </div>
        </div>
      </transition>
    </script>



<div id="app">
<!-- Collapsable Navbar -
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand mb-n4 mr-auto" href="#">
		<img class="rounded-lg" src="images/trustpeople_ent.png" style="width:50%" alt="Logo">
		<a href="defaultIndividual.php" class="d-flex justify-content-end small font-weight-lighter">For Individuals</p>
    </a>
    <div class="">
      
      <ul class="navbar-nav">
        <li class="nav-item align-self-center mx-2">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item align-self-center mx-2">
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
  -->



  <!-- Collapsable Navbar --> 
<nav class="navbar navbar-expand-md bg-white"> 
<a class="mb-n4 mr-auto" href="#"> 
<img class="rounded-lg" width="60%" src="images/trustpeople.png" alt="Logo"> 
<div class="logo"> 

</div> 
</a> 
<div class=""> 
<ul class="navbar-nav"> 
<!-- <li class="nav-item align-self-center mx-2"> <a class="nav-link" href="#">Home</a> </li> --> 
<div class="navbar-link">
 <li class="nav-item align-self-center mr-5 mt-2">
 <a class="nav-link align-self-center" href="#">For Enterprise</a> 
 <a class="nav-link align-self-center" href="defaultIndividual.php">For Individual</a> 

</li> </div> 
<li class="nav-item align-self-center mx-1">
 <a class="nav-link" href="profile.html">
 <img src="images/sample_profile.png"> </a> </li> 
<div class="navbar-name">
 <li class="nav-item align-self-center mt-2"> 
<a class="nav-link align-self-center" href="#">Williams</a> </li>
 </div> 
<!-- <div class="navbar-more"> <li class="nav-item align-self-center mt-2"> 
<a class="nav-link align-self-center" href="#"> Steven</a> </li> </div> --> 
</ul> </div> </nav>





  <br>
  <!-- Container for search bar and profile icon -->
  <div class="block2 marginRight">
  <i class="glyphicon glyphicon-pencil"></i>   |   <a href="#" >  Post Now</a>
 
  </div>
  <div class="block2">
  <div class="container-fluid ">
       <!-- Search Bar and Profile Icon      -->
	<form class="form-inline d-flex justify-content-center md-form form-sm my-1 ">
		<input class="form-control form-control-sm mr-3 w-75 rounded-lg" type="text" placeholder="Search..." aria-label="Search">
  	</form>
   
  
  <!-- Container for search bar and profile icon -->
  </div>
  </div>
<div class="block1">
  <h3 class="topic2 marginLeft"> Analysis  |  Occasion  |  Role  |  Date </h3>
  </div>
  <br>
  <br><br><hr><br><br>
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

 

<!-- Post Template -->
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
   Vue.component("modal", {
        template: "#modal-template"
      });

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
			newPost : {name: "", date_post: "", role: "", date_discussed: "", location: "", attachment: "", profile_picture: "", comment:""},
			currentPost : {},
			// a : 1
		},
		mounted: function(){
			
			this.getAllPost();
			// this.a+1;
		},
    methods: {
			
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
			clearMsg(){
				app.errorMsg = "";
				app.successMsg = "";
			}
			},
	});
</script>





</body>
</html>