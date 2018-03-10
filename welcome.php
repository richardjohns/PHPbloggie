<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
    	//Add while loop below
    	$flipCount = 0;
    	$headCount = 0;
      
    	while($headCount < 3) {
    	    $headCount = $headCount + rand(0,1);
    	    $flipCount ++;
    	    echo "This is flipCount: " . $flipCount;
    	    echo "This is headCount: " . $headCount;
	    }

    ?>
    </body>
</html>
