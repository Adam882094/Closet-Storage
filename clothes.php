<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Adds clothes into your closet</title>
        <meta charset="utf-8" />
        <link href="styles.css" rel="stylesheet" />
        <h1>Add some clothes to the Closet!</h1>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.html" title="Go to the Home page">Home</a></li>
                <li><a href="clothes.php" title="User add clothes to there closet">Add some clothes</a></li>
                <li><a href="closet.php" title="View the clothes within the closet">View your clothes</a></li>
            </ul>
        </nav>
        <fieldset>
            <label for="clothesID">Clothes Type </label>
            <select name="clothesID" id="clothesID" required>
                <?php
                        // connect
                $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');

                // set up query to fetch categories
                $sql = "SELECT * FROM clothes ORDER BY closetType";

                // set up & execute command
                $cmd = $db->prepare($sql);
                $cmd->execute();
                $categories = $cmd->fetchAll();

                // loop through the results adding each category to the dropdown list
                foreach ($clothes as $c) {
                    echo '<option value="' . $c['clothesID'] . '">' . $c['closetType'] . '</option>';
                }
                ?>
        </fieldset>
    </body>
</html>
