<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="MaximusCarlos, Maximus, Carlos, Maximus Carlos, Developer, Java, HTML, Best, Maximus Carlos, bukkit, spigot, minecraft">
    <meta name="author" content="Maximus Carlos">
    <meta property="og:site_name" property="MaximusCarlos"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Maximus Carlos"/>
    <meta property="og:description" content="Computer Science student, professional bukkit/spigot and web development."/>
    <meta property="og:image" content="https://puu.sh/vj8WX/8c4903106e.jpg">
    <title>Maximus | Home</title>
    <link rel="icon" href="./img/maximuscarlos_logo.png">
    <link rel="stylesheet" href="./css/style.css">
    <?php
       $username = "id1338433_maximuscarlos";
       $password = "ehhbalsaintsrow+306";
       $hostname = "localhost";
       $ip_user = $_SERVER['REMOTE_ADDR'];

       //connect to database
       //$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

       $dbhandle = mysqli_connect($hostname, $username, $password);
       //Select database
       $dbname = mysql_select_db($id1338433_maindb, $dbhandle) or die("Cannot find the database");

       //execute the SQL INSERT query
       mysql_query("INSERT INTO iplogs (ip) VALUES (" . $ip_user . ")");

       //close the connection
       mysql_close($dbhandle);
    ?>
  </head>

  <body>
    <header>
    <div class="container">
        <nav>
          <ul>
            <li class="current"><a href="http://www.maximuscarlos.xyz">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="./pages/contact">Contact</a></li>
            <li><a href="http://chat.maximuscarlos.xyz">Chat Room<b>[New]</b></a></li>
            <li><a href="./pages/tos">Terms</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="layer">
      </div>
      <div class="container">
        <h1>Maximus Carlos</h1>
        <p>Software Engineer | Bukkit | I also run ☺</p>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <a href="https://dev.bukkit.org/members/MaximusCarlos" target="_blank"><img id="left" src="./img/Bukkit_logo.png"></a>
        </div>
        <div class="box">
          <a href="https://github.com/MaximusCarlos" target="_blank"><img id="center" src="./img/GitHub_logo.png"></a>
        </div>
        <div class="box">
          <a href="https://www.spigotmc.org/members/maximuscarlos.371811/" target="_blank"><img id="right" src="./img/Spigot_logo.png"></a>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <a name="about"></a><h1>About</h1>
        <p>Hi! I’m a high school student studying Computer Science and Marketing. I also love running! On the other hand, I currently offer freelance work such as professional bukkit/spigot plugin development, plugin maintenance as well as web design and development.<br><br>*Minecraft</p>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <a name="services"></a><h1>Services</h1>
        <p>Interested in any of my services? Please take note. I currently offer services such as:</p>
        <ul>
          <li>» Professional bukkit/spigot plugin development.</li>
          <li>» Plugin maintenance (includes updating plugins to the newest version)</li>
        </ul>
        <p id="last"><br>Payments are to be made on a per plugin basis (40% pre-payment). When buying a service, you automatically agree to my <a href="./pages/tos">Terms of Service</a></p>
      </div>
    </section>

    <footer>
      <p>Developed and maintained by &copy; 2017, Maximus Carlos. All Rights Reserved | <a href="./pages/contact"><b>Contact Email:</b></a> info@maximuscarlos.xyz<br><a href="./pages/tos">Terms of Service</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script>
		  $(document).ready(function(){
		    $('a[href*=#]').click(function() {
			  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
			  && location.hostname == this.hostname) {
			    var $target = $(this.hash);
			    $target = $target.length && $target
			    || $('[name=' + this.hash.slice(1) +']');
			    if ($target.length) {
				  var targetOffset = $target.offset().top;
				  $('html,body')
				  .animate({scrollTop: targetOffset}, 1000);
			     return false;
			    }
			  }
		    });
		  });
	  </script>
  </body>
</html>
