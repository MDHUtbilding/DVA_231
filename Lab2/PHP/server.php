<?php
// this PHP script is to be used for displaying news in the grid boxes
    $news = json_decode(file_get_contents('../JSON/news.json'), true);
?>