<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/">
    <title>Login</title>
</head>
<style>
    form {
        width: 500px;
        height: 500px;
        background-color: #3C7B9C;
        padding: 30px;
        position: absolute;
        left: 500px;
        top: 150px;
        border-radius: 10px;
    }

    legend h1 {
        color: #fff;
        text-align: center;
    }

    input {
        padding: 10px;
        width: 420px;
        border-radius: 10px;
        border: none;
        margin: 10px;
    }

    button {
        background-color: #fff;
        color: #3C7B9C;
        padding: 10px;
        border: none;
        border-radius: 10px;
        margin-left: 10px;
        width: 420px;
    }

    .h1 {
        color: #3C7B9C;
    }

    .imgg {
        position: relative;
        left: 500px;
        top: 50px;
    }
</style>

<body>
    <?php include_once('include/navbar.php'); ?>

    <center>
        <h1 class="h1">You have to log in to make a appointment!</h1>
        <img class="imgg" src="img/Sign up.gif" alt="">
    </center>


</body>

</html>