
function createTopNews()
{
    div=$("<div />", 
    {
        "class": "image1"
    });
}

function addNews()
{

}

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