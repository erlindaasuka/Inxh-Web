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

    use dbSide\Client, dbSide\Appointment;

    include_once('dbSide/client.php');
    include_once('dbSide/appointment.php');

    $client = new Client();
    $appointment = new Appointment();

    if (isset($_GET['id'])) {
        $client = $client->get_user_id($_GET['id']);
    }

    if (isset($_POST['app'])) {
        $appointment->setEmri($_POST['emri']);
        $appointment->setMbiemri($_POST['mbiemri']);
        $appointment->setEmail($_POST['email']);
        $appointment->setDataLindjes($_POST['data']);
        $appointment->setNumriTel($_POST['numriTel']);
        $appointment->setIdKlientit($_POST['idKlientit']);
        $appointment->create_appointment();
    }

    ?>

    <form method="post" action="">
        <legend>
            <h1>Appointment form!</h1>
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
        <input type="hidden" name="idKlientit" value="<?php echo $client->getIDK(); ?>">
        <input type="number" name="numriTel" value="<?php echo $client->getNumriTelefonit(); ?>" required>
        <br>
        <br>
        <button name="app">Make Appointment!</button>
    </form>


</body>

</html>