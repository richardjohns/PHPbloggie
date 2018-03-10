<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php echo "Welcome to the home page" ?>

    <?php
      $link_name = "Second page";
      $id = 1
     ?>
    <br/>
    <br/>

    <a href="second_page.php"><?php echo $link_name ?></a>
    <a href="second_page.php?id=<?php echo $id ?>"><?php echo $link_name . "with id" ?></a>

    <br/>

    // $_GET is a superglobal variable set by PHP and available to all pages

    // urlencode - letters numbers underscore & dash unchanged but reserved char become % + 2-digit hexadecimal equivalent.

    </body>
</html>
