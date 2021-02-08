<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8" />
        <link href="styles.css" rel="stylesheet" />
        <h1>Items Saved</h1>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.html" title="Go to the Home page">Home</a></li>
                <li><a href="clothes.php" title="User add clothes to there closet">Add some clothes</a></li>
                <li><a href="closet.php" title="View the clothes within the closet">View your clothes</a></li>
            </ul>
        </nav>

<?php
// Stores data
$name = $_POST['name'];
$colour = $_POST['colour'];
$closetType = $_POST['closetType'];
$check = true;
//validate inputs
if (empty($name)) {
    echo 'Name is required<br />';
    $check = false;
}
if (empty($colour)) {
    echo 'Colour is required<br />';
    $check = false;
}
if (empty($closetType)) {
    echo 'Closet Type is required<br />';
    $check = false;
}
if ($check) {
//connect to db
$db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');
 
// insert items to sql
$sql = "INSERT INTO closet (name, colour, closetID) VALUES (:name, :colour, :closetType)";
 
// insert with values
$cmd = $db->prepare($sql);
$cmd->bindParam(':name', $name, PDO::PARAM_STR, 50);
$cmd->bindParam(':colour', $colour, PDO::PARAM_STR, 50);
$cmd->bindParam(':closetType', $closetID, PDO::PARAM_STR, 50);
 
// saves data
$cmd->execute();
 
// disconnect database
$db = null;
 
// connect successful 
echo "<h1>Item Added! Go to View your Closet to see the item!</h1>";
}
?>
</body>
</html>
