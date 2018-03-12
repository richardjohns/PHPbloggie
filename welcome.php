<?php
  // 1. Create a database connection
  $dbhost = "127.0.0.1"; // Use instead of localhost.
  $dbuser = "widget_cms";
  $dbpass = "secretpassword";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<?php
  // 2. Perform db query
  $query = "SELECT * FROM subjects";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Db query failed");
  };
?>

<!DOCTYPE html>
<html>
    <head>
		<title>PHPbloggie</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>

    <?php
    // 3. Use returned database
      while($row = mysqli_fetch_row($result)) {
        // output data from each row
          var_dump($row);
          echo "<hr />";
      }
    ?>

    <?php echo "Welcome to the home page" ?>

    <?php
      $link_name = "Second page";
      $id = 1;
      $company = "Johnson & Johnson"
     ?>

    <br/>
    <br/>

    <a href="second_page.php?id=<?php echo $id ?>&company=<?php echo urlencode($company) ?>"><?php echo $link_name . "with id" ?></a>

    <br/>

    <!--
    $_GET is a superglobal variable set by PHP and available to all pages
    urlencode - letters numbers underscore & dash unchanged but reserved char become % + 2-digit
    hexadecimal equivalent. Spaces become '+'. Needed to work on the query string after the '?'.
    rawurlencode - Spaces become '%20'. Needed to work on the part of the path before the '?'
    so the server can correctly interpret file path, but is also more compatible generally.
    -->

    </body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>
