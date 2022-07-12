<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
    <style>
        #loginbutton:hover {
            background-color: rgb(102, 131, 102);
        }
    </style>
</head>

<body>
    <main class="logincontainer" id="logincontainer">
        <img src="https://tse1.mm.bing.net/th?id=OIP.01bQlL7FMpc4aVcjOC29AQHaE8&pid=Api&P=0&w=271&h=181" alt="image">
        <h1>Log In</h1>
        <div id="error" style="color:red;"></div>

        <form class="contentcontainer" action="personalized.php" method="GET" id="loginform">
            <label for="firstname">Name: </label>
            <input type="name" id="firstname" name="firstname" placeholder="firstname" required />

            <label for="email">Email Adress: </label>
            <input type="email" id="email" name="emailaddress" placeholder="@gmail.com" required />

            <label for="password">Password: </label>
            <input type="password" id="password" name="password" placeholder="password" />

            <div class="buttoncontainer"> <a href="./personalized.php"></a>
                <button type="submit" id="loginbutton" onclick="loginbutton"> <strong>login </strong></button>
            </div>
            <div class="forgotpassword" id="forgotpassword">
                <a href="./forgotpass.html" target="_blank">
                    <h5>Forgot Password?</h5>
                </a>
            </div>
        </form>
    </main>

</body>
<script src="./login.js"></script>

</html>