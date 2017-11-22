

<?php 
$page = "Users";
$_SESSION[$page] = $page;
require ("header.php") ?>
    <div class="container">

      <div class="row">
          <div class="col-md-3">
              
              <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Users</h3>
  </div>
  <div class="panel-body">
    <ul class="nav nav-sidebar"> 
          <li><a id="link1" value="mk1499">Mohamed Khaled</a> </li>
          <li><a id="link2" value="mario">Mario Đanić</a> </li>
          <li><a id="link3" value="Philip">Philip Olson</a> </li>
          <li><a id="link4" value="jo">Johannes Jörg </a> </li>
          </ul>
          </div>
  </div>
</div>
          
          
          <div class="col-md-9" id="profile" >
          
          <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Profile Template</h3>
  </div>
  <div class="panel-body">
<div class="text-center avatar">
   <img src="avatar.png" >
    <h2> User Name</h2>
 <a target="_blank" class="btn btn-primary btn-block" href="#">View Profile</a>
</div>
<ul class="list-group">
                <li class="list-group-item">Email: </li>
                <li class="list-group-item">Company: </li>
                <li class="list-group-item">Website/blog:</li>
                <li class="list-group-item">Location: </li>
                <li class="list-group-item">Member Since: }</li>
              </ul>

 

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Bio</h3>
  </div>
  </div>

<div class="panel-body"> 
Developer Biography 

</div>

</div>
          </div>
        

    </div><!-- /.container -->
      </div>
</div>

     <?php require('footer.php') ;?> 
  </body>
</html>
