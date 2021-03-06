<?php

	$json = file_get_contents("../JSON/news.json");
	echo $json;
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/gridNavigation.css">
    <link rel="stylesheet" type="text/css" href="../CSS/gridImage.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bottomMenu.css">
    <link rel="stylesheet" type="text/css" href="../CSS/topMenu.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="gridNavigation">
	<div class="nasaLogo"><img src="../Img/nasa-logo.svg"></div>

	<div id="topcontainer">
		
    	<div id="topMenu">	
        	<div class="dropdown">
	    		<button class="dropbtn">Missions</button>			
	        		<div class="dropdown-content">
		    			<a href="#">Commercial Crew</a>
		   	 			<a href="#">International Spacestation</a>
		    			<a href="#">Parker Solar Probe</a>
	 				</div>
			</div>
		
			<div class="dropdown">
	   	 		<button class="dropbtn">Galleries</button>
					<div class="dropdown-content">
		    			<a href="#">Image of the day</a>
		   				<a href="#">Ultra high-def Videos</a>
		    			<a href="#">Images</a>
		    			<a href="#">Videos</a>
					</div>
			</div>

			<div class="dropdown">
           	 <button class="dropbtn">NASA TV</button>
	        	<div class="dropdown-content">
		    		<a href="#">Link 1</a>
		    		<a href="#">Link 2</a>
		    		<a href="#">Link 3</a>
				</div>
			</div>

			<div class="dropdown">
             <button class="dropbtn">Follow NASA</button>
	        	<div class="dropdown-content">
		    		<a href="#">Get involved</a>
		   			<a href="#">NASA Live</a>
		    		<a href="#">Social media</a>
				</div>
			</div>
			
			<div class="dropdown">
             <button class="dropbtn">Downloads</button>
	        	<div class="dropdown-content">
		    		<a href="#">Apps</a>
		   			<a href="#">Podcasts</a>
		    		<a href="#">Third rock radio</a>
				</div>
			</div>

			<div class="dropdown">
             <button class="dropbtn">About</button>
				<div class="dropdown-content">
		    		<a href="#">About NASA</a>
		    		<a href="#">Leadership</a>
		    		<a href="#">People of NASA</a>
				</div>
			</div>

			<div class="dropdown">
             <button class="dropbtn">NASA Audiences </button>
	        	<div class="dropdown-content">
		    		<a href="#">For Media</a>
		    		<a href="#">For Educators</a>
		    		<a href="#">For students</a>
				</div>
			</div>
			
			<div class="endpic"><img src="../Img/share.png"></div>
			
			<div class="search-container">
	    		<form action="/action_page.php">
      				<input type="text" placeholder="Search.." name="search">
      				<button type="submit"><i class="fa fa-search"></i></button>
    	    	</form>

  			</div>
			
		</div>	
			
    


		<div class="bottomMenu">
    		<div class="bottomMenuBar">
        		<ul>
	    			<li><a href="">International Space Station</a></li>
	    			<li><a href="">Journey to Mars</a></li>
	    			<li><a href="">Earth</a></li>
	    			<li><a href="">Technology</a></li>
	    			<li><a href="">Aeronautics</a></li>
	    			<li><a href="">Solar System and Beyond</a></li>
	    			<li><a href="">Education</a></li>
	    			<li><a href="">History</a></li>
	    			<li><a href="">Benefits to You</a></li>
				</ul>
    		</div>
		</div>
	</div>
	<div class="admin">
		<div class="adminlink">
			<ul>
				<li><a href="../HTML/SignIn.php">Admin Page</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="gridImage">
    <div class="image1">
        <img class="carouselImg" src="../Img/pic1.JPG">
	<img class="carouselImg" src="../Img/pic2.JPG">
	<img class="carouselImg" src="../Img/pic3.JPG">
    </div>

    <script>
        var myIndex = 0;
	carousel();

	function carousel()
	{
            var i;
	    var x = document.getElementsByClassName("carouselImg");
			
	    for (i = 0; i < x.length; i++)
	        x[i].style.display = "none";  

            myIndex++;

            if (myIndex > x.length)
	        myIndex = 1

            x[myIndex-1].style.display = "block";  
	    setTimeout(carousel, 30000); // Change image every 30 seconds
        }
    </script>


    <div class="image2">
	<div class="textWrap">
	    <div id="moreText">
		<div id="img">

		</div>		
	    </div>
	</div>
    </div>

    <script>
        fetch('../JSON/news1.json')
            .then(function (response)
            {
                return response.json();
            })
            .then(function (data) 
            {
                appendData(data);
            })
            .catch(function (err) 
            {
                console.log('error: ' + err);
            });

        function appendData(data) 
        {
            var mainContainer = document.getElementById("moreText");
            for (var i = 0; i < data.length; i++) 
            {
                var div = document.createElement("div");
                div.innerHTML = 'Content: ' + data[i].content;
                mainContainer.appendChild(div);
            }
        }
    </script>
    

    <div class="image3">
        <div class="textWrap">
            <div class="moreText">
	        	Drowsy drivers are a cause of car crashes. You would think self-driving cars would fix that since computers don't go sleepy.
	        	Cars with partially automated systems today, can still require a driver to take over at a moment notice. But studies has shown 
	        	that drivers get more sleepy from automatic systems. The study was carried out to understand how humans interact with automatic systems
	        	and to help make automatic systems better for cars, aviation and space rockets. 
	    	</div>
        </div>  
    </div> 
 
    <div class="image4">
	    <img id="image4attr" src="../Img/Venus.jpg">
    </div> 

    <div class="image5">
        <div class="textWrap">
	    	<div class="moreText">
                NASA began flight testing with Joby Aviation's all-electric vertical takeoff and landing aircraft (eVTOL) as a part of the agency's Advanced Air Mobility
	        	National Campaign. This is the first time NASA will test an eVTOL aircraft as part of the campaign. In the future, eVTOL aircraft could serve as airtaxis.
            </div>
        </div>
    </div>

    <div class="image6">
		<div class="textWrap">
	    	<div class="moreText">
	        	Recovery and assessments continue at NASA's Michoud Assembly Facility in New Orleans following hurricane Ida. The powerful category 4
	        	hurricane made landfall in Louisiana Aug. 29, on the 16th anniversary of hurricane Katrina. The Michoud Safety and Security team completed
	        	an initial assessment of the 829-acre facility and its 81 buildings and structures on Aug 31. Winds from the storm caused damage to several
	        	buildings as well as to the roof deck panels and lightning protection systems. Many of the roofing systems did sustain significant damage
	        	and caused water intrusion into some buildings.  
	    	</div>
        </div>
    </div>

    <div class="image7">
        <iframe width="350" height="290" src="https://www.youtube.com/embed/FUq5d7dqlVY" 
	    	title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
	    	allowfullscreen></iframe>
        </div>
    </div>

   <div id="myData"></div>
</div>

</body>
</html>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/gridNavigation.css">
    <link rel="stylesheet" type="text/css" href="../CSS/gridImage.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bottomMenu.css">
    <link rel="stylesheet" type="text/css" href="../CSS/topMenu.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="gridNavigation">
	<div class="nasaLogo"><img src="../Img/nasa-logo.svg"></div>

	<div id="topcontainer">
		
    	<div id="topMenu">	
        	<div class="dropdown">
	    		<button class="dropbtn">Missions</button>			
	        		<div class="dropdown-content">
		    			<a href="#">Commercial Crew</a>
		   	 			<a href="#">International Spacestation</a>
		    			<a href="#">Parker Solar Probe</a>
	 				</div>
			</div>
		
			<div class="dropdown">
	   	 		<button class="dropbtn">Galleries</button>
					<div class="dropdown-content">
		    			<a href="#">Image of the day</a>
		   				<a href="#">Ultra high-def Videos</a>
		    			<a href="#">Images</a>
		    			<a href="#">Videos</a>
					</div>
			</div>

			<div class="dropdown">
           	 <button class="dropbtn">NASA TV</button>
	        	<div class="dropdown-content">
		    		<a href="#">Link 1</a>
		    		<a href="#">Link 2</a>
		    		<a href="#">Link 3</a>
				</div>
			</div>

			<div class="dropdown">
             <button class="dropbtn">Follow NASA</button>
	        	<div class="dropdown-content">
		    		<a href="#">Get involved</a>
		   			<a href="#">NASA Live</a>
		    		<a href="#">Social media</a>
				</div>
			</div>
			
			<div class="dropdown">
             <button class="dropbtn">Downloads</button>
	        	<div class="dropdown-content">
		    		<a href="#">Apps</a>
		   			<a href="#">Podcasts</a>
		    		<a href="#">Third rock radio</a>
				</div>
			</div>

			<div class="dropdown">
             <button class="dropbtn">About</button>
				<div class="dropdown-content">
		    		<a href="#">About NASA</a>
		    		<a href="#">Leadership</a>
		    		<a href="#">People of NASA</a>
				</div>
			</div>

			<div class="dropdown">
             <button class="dropbtn">NASA Audiences </button>
	        	<div class="dropdown-content">
		    		<a href="#">For Media</a>
		    		<a href="#">For Educators</a>
		    		<a href="#">For students</a>
				</div>
			</div>
			
			<div class="endpic"><img src="../Img/share.png"></div>
			
			<div class="search-container">
	    		<form action="/action_page.php">
      				<input type="text" placeholder="Search.." name="search">
      				<button type="submit"><i class="fa fa-search"></i></button>
    	    	</form>

  			</div>
			
		</div>	
			
    


		<div class="bottomMenu">
    		<div class="bottomMenuBar">
        		<ul>
	    			<li><a href="">International Space Station</a></li>
	    			<li><a href="">Journey to Mars</a></li>
	    			<li><a href="">Earth</a></li>
	    			<li><a href="">Technology</a></li>
	    			<li><a href="">Aeronautics</a></li>
	    			<li><a href="">Solar System and Beyond</a></li>
	    			<li><a href="">Education</a></li>
	    			<li><a href="">History</a></li>
	    			<li><a href="">Benefits to You</a></li>
				</ul>
    		</div>
		</div>
	</div>
	<div class="admin">
		<div class="adminlink">
			<ul>
				<li><a href="../HTML/admin.html">Admin Page</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="gridImage">
    <div class="image1">
        <img class="carouselImg" src="../Img/pic1.JPG">
	<img class="carouselImg" src="../Img/pic2.JPG">
	<img class="carouselImg" src="../Img/pic3.JPG">
	<p class="text-topnews"></p>
    </div>

  

    <div class="image2">
		<div class="textWrap">
			<!--
			<div class="moreText">-->
				NASA Eart Science Divison has many online tools to help understand and track climate change. Sea Level Projection Tool allows the user to 
					visualize and project the global sea levels. Sea Level and Evaluation Assessment Tool provides data for assesing sea level and its causes.
					Earth Observatory: Fires tool is a collection of current wildfires and natural disasters. 
			<!--</div> -->
		</div>
		
    </div>

    <div class="image3">
        <div class="textWrap">
            <div class="moreText">
	        	Drowsy drivers are a cause of car crashes. You would think self-driving cars would fix that since computers don't go sleepy.
	        	Cars with partially automated systems today, can still require a driver to take over at a moment notice. But studies has shown 
	        	that drivers get more sleepy from automatic systems. The study was carried out to understand how humans interact with automatic systems
	        	and to help make automatic systems better for cars, aviation and space rockets. 
	    	</div>
        </div>  
    </div> 
 
    <div class="image4">
	    <img id="image4attr" src="../Img/Venus.jpg">
    </div> 

    <div class="image5">
        <div class="textWrap">
	    	<div class="moreText">
                NASA began flight testing with Joby Aviation's all-electric vertical takeoff and landing aircraft (eVTOL) as a part of the agency's Advanced Air Mobility
	        	National Campaign. This is the first time NASA will test an eVTOL aircraft as part of the campaign. In the future, eVTOL aircraft could serve as airtaxis.
            </div>
        </div>
    </div>

    <div class="image6">
		<div class="textWrap">
	    	<div class="moreText">
	        	Recovery and assessments continue at NASA's Michoud Assembly Facility in New Orleans following hurricane Ida. The powerful category 4
	        	hurricane made landfall in Louisiana Aug. 29, on the 16th anniversary of hurricane Katrina. The Michoud Safety and Security team completed
	        	an initial assessment of the 829-acre facility and its 81 buildings and structures on Aug 31. Winds from the storm caused damage to several
	        	buildings as well as to the roof deck panels and lightning protection systems. Many of the roofing systems did sustain significant damage
	        	and caused water intrusion into some buildings.  
	    	</div>
        </div>
    </div>

    <div class="image7">
        <iframe width="350" height="290" src="https://www.youtube.com/embed/FUq5d7dqlVY" 
	    	title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
	    	allowfullscreen></iframe>
        </div>
    </div>
</div>

</body>
</html>
