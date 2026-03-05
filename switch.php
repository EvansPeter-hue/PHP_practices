<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php practice file</title>
</head>
<body>
    <h1>Welcome to PHP Practice!</h1>
    <p>This is a simple PHP practice file.</p>
</body>
</html>

<?php
/*
$day = "Sunday";

switch($day){
    case "Sunday":
        echo "Today is Sunday.";
        break;

    case "Monday":
        echo "Today is Monday.";
        break;

    case "Tuesday":
        echo "Today is Tuesday.";
        break;

    case "Wednesday":
        echo "Today is Wednesday.";
        break;

    case "Thursday":
        echo "Today is Thursday.";
        break;

    case "Friday":
        echo "Today is Friday.";
        break;

    case "Saturday":
        echo "Today is Saturday.";
        break;

    default:
        echo "Invalid day.";
}
*/
?>

<?php
$score = 80;

if($score >= 80 && $score <= 100){
    echo "Grade A";
}
elseif($score >= 70){
    echo "Grade B";
}
elseif($score >= 60){
    echo "Grade C";
}
elseif($score >= 50){
    echo "Grade D";
}
else{
    echo "Fail";
}
?>

