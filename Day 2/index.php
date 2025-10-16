<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" method="POST" onsubmit="return isvalid()" action="login.php">
            <label>Username : </label>
            <input type="text" id="user" name="user"><br><br>
            <label>Password : </label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass  = document.form.pass.value;
            if(user.length=="" && pass.length==""){
                alert("Username and password field is empty");
                return false;
            }
            else{
                if(user.length==""){
                alert("Username field is empty");
                return false;
                }
                if(pass.length==""){
                alert("Password field is empty");
                return false;
                }
            }
        }
    </script>
</body>
</html>