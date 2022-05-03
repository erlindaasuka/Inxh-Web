<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/">
    <title>Appointment</title>
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


    $client = new Client();

    if (isset($_GET['id'])) {
        $client = $client->get_user_id($_GET['id']);
    }

    if (isset($_POST['app'])) {
        $client->setEmri($_POST['emri']);
        $client->setMbiemri($_POST['mbiemri']);
        $client->setEmail($_POST['email']);
        $client->setDataLindjes($_POST['data']);
        $client->setNumriTel($_POST['numriTel']);
        $client->setPasswordi($_POST['passwordi']);
        $client->setRole($_POST['roli']);
        $client->update_client();
    }
    //emri=:emri,mbiemri=:mbiemri,dataLindjes=:dataLindjes,email=:email,passwordi=:passwordi,numriTel=:numriTel,role=:role WHERE idKlientit=:idKlientit
    ?>

    <form method="post" action="">
        <legend>
            <h1>Edit client!</h1>
        </legend>
        <br>


        <input type="text" name="emri" value="<?php echo $client->getEmri(); ?>" required>
        <br>


        <input type="text" name="mbiemri" value="<?php echo $client->getMbiemri(); ?>" required>
        <br>


        <input type="email" name="email" value="<?php echo $client->getEmail(); ?>" required>
        <br>
        <input type="date" name="data" value="<?php echo $client->getDataLindjes(); ?>" required>
        <br>
        <input type="number" name="roli" value="<?php echo $client->getRole(); ?>">
        <br>
        <input type="password" name="passwordi" value="<?php echo $client->getPasswordi(); ?>">
        <br>
        <input type="number" name="numriTel" value="<?php echo $client->getNumriTelefonit(); ?>" required>
        <br>
        <br>
        <button name="app">Edit Client!</button>
    </form>


</body>

</html>