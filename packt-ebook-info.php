<?php
require('simple_html_dom.php'); // a scraper library http://sourceforge.net/projects/simplehtmldom/ 

$html = file_get_html('https://www.packtpub.com/packt/offers/free-learning/');
$bookTitle = $html->find(".dotd-title", 0)->children(0)->innertext;
$bookDescription = $html->find(".dotd-title", 0)->next_sibling(0)->next_sibling(0)->innertext;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Packt Publishing - Free ebook of the day</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style media="screen">
  div {
    font-family:sans-serif;
    margin:5px auto;
    padding:3px 15px 3px 15px;
    max-width: 500px;
  }
  .title {
    background-color:#101010;
    color:FloralWhite;
  }
  .description {
    background-color:Gainsboro;
    color:#101010;
  }
  .download {
    background-color:green;
    color:white;
  }
  a.download-link:hover, a.download-link:visited, a.download-link:link, a.download-link:active {
    text-decoration: none;
  }
</style>
</head>
<body>
<div class="box">
  <p>Here is the latest free book download from PACKT Publishing.</p>
</div>
<div class="box title"><h1><?php echo $bookTitle; ?></h1></div>
<div class="box description"><p><?php echo $bookDescription; ?></p></div>
<a href="https://www.packtpub.com/packt/offers/free-learning/" class="download-link">
  <div class="box download"><h2>Click here to download</h2></div>
</a>

</body>
</html>
