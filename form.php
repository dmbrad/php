<!doctype html>
<html lang="en">
<head>
    <style>
        form,h2{
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
<h2>Emobilis Student Registration Form</h2>
<form action="sendto.php"method="post">
    <label for="fname">First Name</label><br><br>
    <input type="text"id="fname"name="fname" maxlength="10"pattern="" placeholder="Enter First Name"><br><br>
    <label for="lname">Last Name</label><br><br>
    <input type="text"id="lname"name="lname" placeholder="Enter Last Name"><br><br>
    <label for="email">Email Address</label><br><br>
    <input type="email"id="email"name="email" placeholder="Enter Email Address"><br><br>
    <label for="dob">Date of Birth</label><br><br>
    <input type="date"id="dob"name="dob"><br><br>
    <input type="submit"value="Register!!!">
</form>
</body>
</html>
