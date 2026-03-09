<!DOCTYPE html>
<html lang="en">
<head>
    <title>Evans Peter PHP</title>
</head>
<body>

<h1>Evans Peter PHP</h1>
<?php
// Compute SHA256 hash of your name
print "<p>The SHA256 hash of 'Evans Peter' is:</p>";
print "<p>";
print hash('sha256', 'Evans Peter');
print "</p>";
?>

<h3>ASCII art:</h3>

<pre>
    ************
     *        *
      *      *
       *    *
         *
    *
    *
    ************
    *
    ************
</pre>

<li><a href="http://localhost:8080/Assignment/fail.php">Click here to see the error settlings</a></li>
<li><a href="http://localhost:8080/Assignment/check.php">Click here to cause a traceback</a></li>

</body>
</html>
