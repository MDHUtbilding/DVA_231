var myIndex = 0;
	carousel();

function createTopNews(index, start)
{
    div=$("<div />", 
    {
        "class": "image1"
    });
    var title=$("<p />" ,
    {
        "class": "text-topnews",
        text:news[index]['title'] 
    });
}

function addNews()
{

}

function carousel() //swapping topnews
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