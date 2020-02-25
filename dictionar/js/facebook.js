//Social Facebook

var fb=false;
function toogle_fb(){
if (!fb) { $('#fb_cont').show('medium');fb = true;}
else {$('#fb_cont').hide('medium'); fb = false;}
}


window.fbAsyncInit = function() {
          FB.init({
            appId      : '154019231376351',
            status     : true, 
            cookie     : true,
            xfbml      : true,
            oauth      : true,
          });
	   FB.Event.subscribe('auth.statusChange', handleStatusChange);	
        };
        (function(d){
           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           d.getElementsByTagName('head')[0].appendChild(js);
         }(document));

 
  
  function login() {
    FB.login(function(response) { }, {scope:'user_likes'});
  }
 
  function handleStatusChange(response) {
    if (response.authResponse) {
      console.log(response);
      updateUserInfo(response);
      } 
  }
  

   function publishStory() {
    FB.ui({
      method: 'feed',
      name: 'Dictionar Multimedia IT',
      caption: 'www.kmtel.ro',
      description: 'Dictioanr Multimedia IT de specialitate. Gasiti toate informatiile care va intereseaza in imagini si format video.',
      link: 'http://www.kmtel.ro/dictionar',
      picture: 'http://www.kmtel.ro/img/social/facebook_icon_large.png'
    }, 
    function(response) {
      console.log('publishStory response: ', response);
    });
    return false;
  }
  


  function updateUserInfo(response) {
    FB.api('/me&fields=likes,id,name,first_name,last_name', function(response) {
      document.getElementById('user-info').innerHTML = '<div style="font-size:12px;"><img src="https://graph.facebook.com/' + response.id + '/picture" style="vertical-align:middle;width:30px;height:30px;float:left;margin-right:5px;border:1px solid #AAA;"> <i>Bine ai venit</i><br /> '+response.name+' <img src="http://www.kmtel.ro/img/tiny_smiley.png" /></div>';
    //document.getElementById('usr').innerHTML =  response.name;
    
        fb_usr = response.name;
	fb_id = response.id;  
    });
 } 
