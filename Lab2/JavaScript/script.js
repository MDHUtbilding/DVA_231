var myIndex = 0;
var div;
var news=[];

	carousel();

function createTopNews(index, start) //creating the news at the top that will be swapped
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

$getJSON("php/readnews.php", function addNews(data) //adding all the news to the gridboxes
{
    news=data['news'];
});

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