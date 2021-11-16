<?php
$username = $_POST['username'];
$password = $_POST['password'];

?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ส่งข้อมูล POST</title>
    </header>
    <body>
        <h1>ส่งข้อมูลผ่าน Form (POST)</h1>
        <form action="postform.php" method="POST">
            Username : <input type="text" name="username"><br>
            Password : <input type="password" name="password"><br>
            <input type="submit" value="login"><br>
        </form>
    </body>
</html>
<?php
if(isset($username)){
    echo "$username <br>";
    echo "$password <br>";
} else{
    echo "ไม่มีข้อมูล";
}

?>