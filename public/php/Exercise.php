<?php
function pageController()
{

    $hour = date('G');
    $message = 'Hello Hampton';
    $google = 'http://www.google.com';
    $names = [
        "letty",
        "craig",
        "vaughn",
        "John", 
        "Ron"
    ];
    // Return the completed data array.
   
    $personName = isset($_GET['person_name']) ? $_GET['person_name'] :'Hampton';

    return array(
        'hour' => $hour,
        'message' => $message,
        'google' => $google,
        'names' => $names,
        'personName' => $_GET['personName']
        );    
}
$data = pageController();

extract($data);
?>
<!doctype html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
        <h1>Hello Codeup</h1>


        <h2>Hello <?= $personName ?></h2>

        <a href="Exercise.php">Go Here!</a>

        <form method = "GET" action="Exercise.php">
            <label for "person-name">Who would you like to say hello to?</label>
            <input type ="text" id="person-name" name ="person_name">
            <button type ="submit">Say Hello!</button>
        </form>

        <?php if ($hour < 12): ?>
            <h3>Good Morning!</h3>
        <?php elseif ($hour < 18): ?>
            <h3>Good Afternoon!</h3>
        <?php else: ?>
            <h3>Good Night!</h3>
        <?php endif: ?> 
        <a href="http://google.com">Go To Google</a>
    </body>
</html>