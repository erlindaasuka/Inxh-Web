<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/">
    <title>Register</title>
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
</style>

<body>
    <?php include_once('include/navbar.php');

    use dbSide\Client;

    include_once('dbSide/client.php');
    $c = new Client();

    if (isset($_POST['register'])) {
        $c->setEmri($_POST['emri']);
        $c->setMbiemri($_POST['mbiemri']);
        $c->setEmail($_POST['email']);
        $c->setDataLindjes($_POST['data']);
        $c->setNumriTel($_POST['numriTel']);
        $c->setPasswordi($_POST['password']);
        $c->create_client();
    }


    ?>

    <form method="post" action="">
        <legend>
            <h1>Register form!</h1>
        </legend>
        <br>


        <input type="text" name="emri" placeholder="Sheno emrin..." required>
        <br>


        <input type="text" name="mbiemri" placeholder="Sheno mbiemrin..." required>
        <br>


        <input type="email" name="email" placeholder="Sheno email..." required>
        <br>
        <input type="date" name="data" placeholder="Sheno datelindjen..." required>
        <br>
        <input type="number" name="numriTel" placeholder="Sheno numrin..." required>
        <br>
        <input type="password" name="password" placeholder="Sheno password..." required>
        <br>
        <br>
        <button name="register">Register!</button>
    </form>


</body>

</html>