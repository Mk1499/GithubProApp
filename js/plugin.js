$(document).ready(function(){
     
    $("#home").click(function(){
        $("#home").addClass("active");
     
    });
    $("#users").click(function(){
        $(this).addClass("active");
    });
    $("#about").click(function(){
        $(this).addClass("active");
    });
    
    
    var id;
    $("#link1").on("click",function(){
        id = '#'+$(this).attr('id');
        chnage(id);
        
    });
    $("#link2").on("click",function(){
        id = '#'+$(this).attr('id');
        chnage(id);
        
    });
    $("#link3").on("click",function(){
        id = '#'+$(this).attr('id');
        chnage(id);
        
    });
    $("#link4").on("click",function(){
        id = '#'+$(this).attr('id');
        chnage(id);
        
    });
    
    function chnage (un){
        
       var username = $(un).attr('value') ; 
        console.log(username);
        
        $.ajax({
            url : 'https://api.github.com/users/'+username, 
           data:{
               client_id:'ea91db8a23b72cf45302',
        client_secret:'b504cc27c4b692c0ab2574f4edc0bd6380f98dc0'
           }  
            
        }).done(function(user){
            $("#profile").html(`
           <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">${user.name}</h3>
  </div>
  <div class="panel-body">
<div class="text-center avatar">
   <img src="${user.avatar_url}" >
    <h2> ${user.name}</h2>
 <a target="_blank" class="btn btn-primary btn-block" href="${user.html_url}">View Profile</a>
</div>
<ul class="list-group">
                <li class="list-group-item">Email: ${user.email}</li>
                <li class="list-group-item">Company: ${user.company}</li>
                <li class="list-group-item">Website/blog: ${user.blog}</li>
                <li class="list-group-item">Location: ${user.location}</li>
                <li class="list-group-item">Member Since: ${user.created_at}</li>
              </ul>

 

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Bio</h3>
  </div>
  </div>

<div class="panel-body"> 
${user.bio}

</div>

</div>`
           
            );
        }) ;
        
    };
   
})