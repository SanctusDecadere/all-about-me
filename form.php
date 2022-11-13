<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Age and Favorite Color Form</title>
</head>
<body>
    <form action="process.php" method="post">

        <label for="">Name
            <input type="text" name="name" placeholder="name">
        </label><br><br>

        <label for="age">Age
            <input type="text" name="age" placeholder="age">
        </label><br><br>
        
        <label for="color">Color
            <input type="text" name="color" placeholder="favorite color">
        </label><br><br>

        <input type="submit" name="submit">
                   
    </form>
    
</body>
</html>