<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #fff;
        text-align: center;
        padding: 8px;
        color: #3C7B9C;
    }

    #id {
        color: #3C7B9C;
    }
</style>
<?php include_once('include/navbar.php');

use dbSide\Appointment;
use dbSide\Client;

include_once('dbSide/client.php');
include_once('dbSide/appointment.php');



?>
<br>
<br>
<br>

<h1 style="text-align:center; color:#fff;">Clients</h1>
<table>
    <tr>
        <th>ID Klientit</th>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Datalindjes</th>
        <th>Email</th>
        <th>Numri Kont.</th>
        <th>Password</th>
        <th>Roli</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php $client = new Client();

    foreach ($client->get_all_clients() as $c) {

    ?>
        <tr>
            <td><?php echo $c->getIDK(); ?></td>
            <td><?php echo $c->getEmri(); ?></td>
            <td><?php echo $c->getMbiemri(); ?></td>
            <td><?php echo $c->getDataLindjes(); ?></td>
            <td><?php echo $c->getEmail(); ?></td>
            <td><?php echo $c->getNumriTelefonit(); ?></td>
            <td><?php echo $c->getPasswordi(); ?></td>
            <td><?php echo $c->getRole(); ?></td>
            <?php echo  "<td><a id='id' href='edit_client.php?id=" . $c->getIDK() . "'>Edit</a></td>"; ?>
            <?php echo  "<td><a id='id' href='delete_client.php?id=" . $c->getIDK() . "'>Delete</a></td>"; ?>


        </tr>
    <?php } ?>
</table>
<br>
<br>
<br>

<h1 style="text-align:center; color:#fff;">Appointment book</h1>
<table>
    <tr>
        <th>ID Rezervimit</th>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Datalindjes</th>
        <th>Email</th>
        <th>Numri Kont.</th>
        <th>Id Klientit</th>

        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php $client = new Appointment();

    foreach ($client->get_all_appointments() as $c) {

    ?>
        <tr>
            <td><?php echo $c->getIDA(); ?></td>
            <td><?php echo $c->getEmri(); ?></td>
            <td><?php echo $c->getMbiemri(); ?></td>
            <td><?php echo $c->getDataLindjes(); ?></td>
            <td><?php echo $c->getEmail(); ?></td>
            <td><?php echo $c->getNumriTel(); ?></td>
            <td><?php echo $c->getIdKlientit(); ?></td>

            <?php echo  "<td><a id='id' href='edit_appointment.php?id=" . $c->getIDA() . "'>Edit</a></td>"; ?>
            <?php echo  "<td><a id='id' href='delete_appointment.php?id=" . $c->getIDA() . "'>Delete</a></td>"; ?>


        </tr>
    <?php } ?>
</table>