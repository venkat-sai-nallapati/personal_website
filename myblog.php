<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<title>MyBlog</title>
</head>
<body>
<div class="container">
	<div class="header">
		<div class="left_head">
			<h3>VENKATA SAI</h3>
		</div>
		<div class="right_head">
		<ul>
			<li><a href="index.php"    id="btn1">Home</a></li>
			<li><a href="myblog.php"  class='active-page'     id="btn1">Myblog</a></li>
			<li><a href="admin.php"  		id="btn1">Admin</a></li>
			<li><a href="contact.php" 	id="btn1">Contact</a></li>			
		</ul>
		</div>
	</div>
	<div id="mid_content">
		<div id="inner_content">
			<div class="innerhead">
				<h2>My blog</h2>
			</div>
			<div class="slideshow">
				<div class="slide">
					<img class="mySlides" src="images/slide2.jpg" >
					<img class="mySlides" src="images/oned.jpg" >
					<img class="mySlides" src="images/band.jpg" >
					<img class="mySlides" src="images/onedi.jpg" >
					<img class="mySlides" src="images/slide3.jpg" >
					<button class="buttonleft" onclick="addthis(-1)">&#10094;</button>
					<button class="buttonright" onclick="addthis(1)">&#10095;</button>
				</div>
			</div>
			<div id="saitext">
				<button class="collapsible">Music</button>
				<div class="content">
					<p>My favourite rock band is Linkin Park. Linkin Park is an American rock band from Agoura Hills, California. The band's current lineup comprises vocalist/guitarist Mike Shinoda, lead guitarist Brad Delson, bassist Dave Farrell, keyboardist Joe Hahn and drummer Rob Bourdon, all of whom are founding members.
						<a href="https://www.linkinpark.com/" target="_blank" class="read">Read more</a></p> <br>
					
					<p>My second favourite band is One Direction. One Direction, often shortened to 1D, are an English-Irish pop boy band formed in London, England in 2010. The group is composed of Niall Horan, Liam Payne, Harry Styles and Louis Tomlinson; former member Zayn Malik departed from the group in 2015.
						<a href="http://www.onedirectionmusic.com/" target="_blank" class="read">Read more</a></p>	<br><br>
				 
				</div>
			
				<button class="collapsible">Actors</button>
				<div class="content">
					<div class="person">
					<div class="per">
							<div class="p1">
								<img src="images/mahesh.jpg">
								<p>This is tollywood actor Mahesh babu. </p>
							</div>

							<div class="p2">
								<img src="images/Aamir.jpg" >			
								<p>This is bollywood actor Aamir Khan.</p>
							</div>
							<div class="p3">
								<img src="images/hrithik.jpg" >
								<p>This is bollywood actor Hritik Roshan.</p>
							</div>
							<div class="p4">
								<img src="images/Henry.jpg" >
								<p>This is hollywood actor Henry Cavill.</p>
							</div>
						</div>
					</div>
				  
				</div>
				
				<button class="collapsible">Actresses</button>
				<div class="content">
										<div class="person">
					<div class="per">
							<div class="p1">
								<img src="images/jaiswal.jpg">
								<p>This is indian actor Jaiswal pragya. </p>
							</div>

							<div class="p2">
								<img src="images/amesha.jpg" >			
								<p>This is indian actor Ameesha patel.</p>
							</div>
							<div class="p3">
								<img src="images/regina.jpg" >
								<p>This is indian actor Regina Cassandra.</p>
							</div>
							<div class="p4">
								<img src="images/ileana.jpg" >
								<p>This is indian actor Ileana Dcruz.</p>
							</div>
						</div>
					</div>
				</div>
				
				<button class="collapsible">Movies</button>
				<div class="content">
					<p>Film, also called movie, motion picture or moving picture, is a visual art-form used to simulate experiences that communicate ideas, stories, perceptions, feelings, beauty, or atmosphere through the use of moving images. These images are generally accompanied by sound, and more rarely, other sensory stimulations. The word "cinema", short for cinematography, is often used to refer to filmmaking and the film industry, and to the art form that is the result of it.</p>

					<p>The moving images of a film are created by photographing actual scenes with a motion-picture camera, by photographing drawings or miniature models using traditional animation techniques, by means of CGI and computer animation, or by a combination of some or all of these techniques, and other visual effects.</p>

					<p>Traditionally, films were recorded onto celluloid film stock through a photochemical process and then shown through a movie projector onto a large screen. Contemporary films are often fully digital through the entire process of production, distribution, and exhibition, while films recorded in a photochemical form traditionally included an analogous optical soundtrack (a graphic recording of the spoken words, music and other sounds that accompany the images which runs along a portion of the film exclusively reserved for it, and is not projected).</p>
				</div>
				
				<button class="collapsible">Technology</button>
				<div class="content">
					<p>Space Exploration Technologies Corp., trading as SpaceX, is an American aerospace manufacturer and space transportation services company headquartered in Hawthorne, California. It was founded in 2002 by Elon Musk with the goal of reducing space transportation costs to enable the colonization of Mars. SpaceX has developed several launch vehicles, the Starlink satellite constellation, and the Dragon spacecraft.</p>

					<p>SpaceX's achievements include the first privately funded liquid-propellant rocket to reach orbit (Falcon 1 in 2008), the first private company to successfully launch, orbit, and recover a spacecraft (Dragon in 2010), the first private company to send a spacecraft to the International Space Station (Dragon in 2012), the first propulsive landing for an orbital rocket (Falcon 9 in 2015), the first reuse of an orbital rocket (Falcon 9 in 2017), the first private company to launch an object into orbit around the Sun (Falcon Heavy's payload of a Tesla Roadster in 2018), and the first private company to send astronauts to the International Space Station (Dragon 2 in 2020). SpaceX has flown 20 cargo resupply missions to the International Space Station (ISS) under a partnership with NASA, as well as an uncrewed demonstration flight of the human-rated Dragon 2 spacecraft (Crew Demo-1) on March 2, 2019, and the first crewed Dragon 2 flight on May 30, 2020.</p>
				</div>

			</div>

		</div>
	</div>
	<div id="footer">
		<p>copyright &copy; VenkatSai</p> 
	</div>
	<script>
		var count=0;
		disp(count);
		function addthis(n){
			count+=n;
			disp(count);
		}
		function disp(num){
			var i=0;
			var x = document.getElementsByClassName("mySlides");
			if(num>x.length-1){
					count=0;
			}
			if(num<0){
				count=x.length-1;
			}
			for(i=0;i<x.length;i++){
				x[i].style.display="none";
			}
			x[count].style.display="block";
		}
		</script>

		<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var content = this.nextElementSibling;
		    if (content.style.maxHeight){
		      content.style.maxHeight = null;
		    } else {
		      content.style.maxHeight = content.scrollHeight + "px";
		    } 
		  });
		}
		</script>
</div>
</body>
</html>