<!doctype html>
<html>
    <head>
        <title>My Website</title>   
    </head>
    <body>
            <form action="adduser.php" method="post">
                Forename: <input type="text" name="forename" ><br>
                Surname:<input type="text" name="surname"><br>
                House: <input type="text" name="house" ><br>
                Year: <input type="number" name="year" ><br>
                Balance: <input type="number" name="balance"><br>
                Role: <input type="radio"name="role" value="student"> Student<br>
                <input type="radio"name="role" value="teacher"> Teacher<br>
                Password: <input type="password" name="password"><br>
                <input type="submit" value="Submit">
            </form>
    </body>
</html>