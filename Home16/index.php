<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        li {
            list-style: none;
            margin-bottom: 10px;

        }

        input {
            margin-left: 5px;
        }

        .title {
            margin-left: 25px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>


</head>
<body><?php
$serverName = "127.0.0.1";
$username = "root";
$password = null;
$database = "homework16p1";
$a = 3;


$conn = mysqli_connect($serverName, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

if (isset($_POST['submit'])) {
    $a++;
    $sql = "INSERT INTO users VALUES ($a, '{$_POST['username']}', '{$_POST['firstName']}', '{$_POST['lastName']}', '{$_POST['password']}', '{$_POST['email']}', '{$_POST['age']}', '{$_POST['gender']}')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);


?>
<form action="" method="post">
    <span class="title">Registration form</span>
    <ul>
        <li><label>Username:<input type="text" name="username"></label></li>
        <li><label>First name:<input type="text" name="firstName"></label></li>
        <li><label>Last name:<input type="text" name="lastName"></label></li>
        <li><label>Password:<input type="text" name="password"></label></li>
        <li><label>Repeat password:<input type="text" name="repeatPassword"></label></li>
        <li><label>E-mail:<input type="text" name="email"></label></li>
        <li><label>Age:<input type="text" name="age"</label></li>
        <li><label><input type="radio" name="gender" value="male">Male</label><label><input type="radio" name="gender"
                                                                                            value="female">Female</label>
        </li>
    </ul>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>