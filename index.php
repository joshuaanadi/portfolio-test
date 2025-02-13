<?php require "header.php"; ?>
  <div class="header-text"> <img src="images/WhatsApp Image 2024-11-05 at 08.38.57_bdce6e01.jpg" width="300px "
      height="300px" alt="a profile picture" class="profile-pic">
    <h1>Hi,I'm Joshua-web developer</h1>
    <p>In need of a good website?</p> <a href="contact.html" class="calltoaction">maak nu een afspraak</a>
  </div>
  <div id="cookie_notification" class="cookie_notification">
    <p>This website uses cookies to ensure you get the best experience on our website.<a href="#">Learn more</a></p>
    <button class="accept-btn" onclick="toggle_cookie_notification()">accept</button>
  </div>
  <script>   
       function toggle_cookie_notification() 
      { document.getElementById('cookie_notification').style.display = 'none'; }

   </script>

   
    <button onclick="switchMode()">wsedrtfgyhjkml</button>
   
   <script>

    function switchMode(){
        var x = document.getElementById("colorlink");
        if(x.href.includes("darkmode.css")){
            x.href = "lightmode.css";
        }
        else{
          
          x.href = "darkmode.css";
        }
    }
</script>
