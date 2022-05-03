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

        background-color: #3C7B9C;
        padding: 30px;
        position: absolute;
        left: 500px;
        top: 250px;
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


    global $dbcon;

    function login($email, $password)
    {
        $dbcon = mysqli_connect('localhost', 'root', '', 'dental');
        $sql = "SELECT * FROM client where email = '$email' and passwordi = '$password'";
        $login = mysqli_query($dbcon, $sql);
        if (mysqli_num_rows($login) == 1) {
            $login = mysqli_fetch_assoc($login);
            $client = array();
            $client['idKlientit'] = $login['idKlientit'];
            $client['emri'] = $login['emri'];
            $client['mbiemri'] = $login['mbiemri'];
            $client['dataLindjes'] = $login['dataLindjes'];
            $client['email'] = $login['email'];
            $client['passwordi'] = $login['passwordi'];
            $client['numriTel'] = $login['numriTel'];
            $client['role'] = $login['role'];
            $_SESSION['client'] = $client;
            header('Location: index.php');
        } else {
    ?>

            <script>
                alert('NUK KEMI PERDORUES ME KETO KREDINCIALE!');
            </script>

    <?php
        }
    }


    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        login($email, $password);
    }
    ?>

    <form method="post" action="">
        <legend>
            <h1>Log in form!</h1>
        </legend>
        <br>



        <input type="email" name="email" placeholder="Sheno email..." required>
        <br>


        <input type="password" name="password" placeholder="Sheno password..." required>
        <br>
        <br>
        <button name="login">Log in!</button>
    </form>


</body>

</html>