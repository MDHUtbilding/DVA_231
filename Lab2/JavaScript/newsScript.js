var news = [];

$.getJSON("PHP/readnews.php", function AddNews(data)
{
    news=data['news'];

})

function CreateTopNews(i)
{
    var topbox = $("<div />",
    {
        "class": "image1",
        css:
        {
            backgroundImage: "url('"+news[i]['imgurl']+"')"
        }
    });
    for(i=0; i < 3; i++)
    {
        var newsTitle=$("<div />",
        {
            "class": "topnews-title",
            text:news[i]['title']
        });

        $(topbox).append(newsTitle);
    }
}

function SwitchTopNews()
{

}