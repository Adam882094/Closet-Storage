<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Closet</title>
        <meta charset="utf-8" />
        <link href="styles.css" rel="stylesheet" />
        <h1>View all the items in the Closet!</h1>
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
$db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');

$sql = "SELECT * FROM closet";

$cmd = $db->prepare($sql);

$cmd->execute();

$closet = $cmd->fetchAll();

echo '<table class=<thead><th>Name</th><th>Colour</th><th>Category</th></thead>';

foreach ($closet as $c)
{
    echo ' <tr><td> '. $c['name'] . '</td>
      <td> '. $c['colour'] . '</td> 
     <td> '. $c['clothesID'] . '</td></tr>';
}
echo '</table>';
$db = null;
?> 
    </body>
</html>
