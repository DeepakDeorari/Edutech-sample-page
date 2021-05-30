<!DOCTYPE html>
<html>
<head>
<title> Login page </title>

<style>

.container {
text-align: center;
border: 1px solid black;
margin-left: 350px;
margin-right: 350px;
margin-top: 70px;
font-family: courier;
background-color: #d1d1d1;
color: #4a7980;
}

body{
background-color: #ababab;
}

h1 {
text-align: center;
color: #33107a;
margin-top: 50px;
}

</style>

</head>

<body>

<h1> Welcome to DeepakDeorari.com </h1>

<div class="container">

<h2 style="font-size: 30px;"> Login </h2>
<p> <i> Enter your credentials </i> </p>
</br>

<form method="post" action="/assignment2/login-data.php" enctype="multipart,form-data">

email id: <input type="text" name="email" required> </input>
</br> </br>
password: <input type="text" name="password" required> </input>
</br> </br>
<input type="submit" name="submit" value="login"> </input>
</br>
</form>

<p> <i> if new user <a href="/assignment2/registration.php/">Register</a> yourself </i> </p>
</div>

</body>
</html>
