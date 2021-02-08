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
        <!-- lets user input info then move to saveTheCloset.php -->
        <form method="post" action="saveTheCloset.php">
        <fieldset>
            <label for="closetType">Clothes Type </label>
            <select name="closetType" id="closetType" required>
                <?php
                $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');
                $sql = "SELECT * FROM clothes ORDER BY closetType";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                $clothes = $cmd->fetchAll();
                foreach ($clothes as $c) {
                    echo '<option value="' . $c['clothesID'] . '">' . $c['closetType'] . '</option>';
                }
                ?>
            </select>
        </fieldset>
        <fieldset>
            <label for="name">Clothing Name </label>
            <input name="name" id="name" required />
        </fieldset>
        <fieldset>
            <label for="colour">Colours </label>
            <input name="colour" id="colour" required/>
        </fieldset>
        <button>Enter</button>
        </form>
    </body>
</html>
