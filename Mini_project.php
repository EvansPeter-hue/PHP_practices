<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marks of Students</title>
</head>
<style>
    h1{
        color: red;
    }
</style>
  <body>
            <h1>Marks of Students:</h1>
    
        </body>
 </html>
 
 <?php
$marks = array(80, 92, 78, 96, 88, 45, 50, 47, 39, 24);

$total = 0;
$pass = 0;
$fail = 0;

foreach ($marks as $mark) {
    echo "Mark: $mark - ";

    if ($mark >= 50) {
        echo "Pass <br>";
        $pass++;
    } else {
        echo "Fail <br>";
        $fail++;
    }

    $total += $mark;
}

$average = $total / count($marks);

echo "<br>";
echo "Total Marks: " . $total . "<br>";
echo "Average Marks: " . $average . "<br>";
echo "Number of Students Passed: " . $pass . "<br>";
echo "Number of Students Failed: " . $fail . "<br>";
?>
