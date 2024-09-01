<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="includes/formhandler.php" method="post">
        <div>
        <label for="firstname">Firstname?</label>
        <input type="text" name="firstname" id="firstname" placeholder="firstname...."/>
        </div>
        <div>
        <label for="lastname">Lastname?</label>
        <input type="text" name="lastname" id="lastname" placeholder="lastname...."/>
        </div>
        <div>
        <label for="favouritepet">Favourite Pet?</label>
        <select name="favouritepet" id="favouritepet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select>
        </div>
        <button type="submit">Submit</button>



    </form>

</body>

</html>