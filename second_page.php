<!DOCTYPE html>
<html>
    <head>
		<title>Second page</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php echo "Welcome to second page" ?>

    <?php $link_name = "Home page" ?>
    <br/>
    <br/>

    <pre>
      <?php
        echo print_r($_GET);
        $id = $_GET['id'];
        // echo '$id: ' . $id;
      ?>
    </pre>


    <a href="welcome.php"><?php echo $link_name ?></a>

    </body>
</html>
