<?php

namespace dbSide;

use dbSide;

include_once('database.php');

use PDO;
use PDOException;

class Appointment extends Database
{


    protected $idAppointment;
    protected $emri;
    protected $mbiemri;
    protected $email;
    protected $dataLindjes;
    protected $numriTel;
    protected $idKlientit;

    public function getIDA()
    {
        return $this->idAppointment;
    }
    public function getEmri()
    {
        return $this->emri;
    }
    public function setEmri($emri)
    {
        $this->emri = $emri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }
    public function setMbiemri($mbiemri)
    {
        $this->mbiemri = $mbiemri;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getDataLindjes()
    {
        return $this->dataLindjes;
    }
    public function setDataLindjes($dataLindjes)
    {
        $this->dataLindjes = $dataLindjes;
    }
    public function getNumriTel()
    {
        return $this->numriTel;
    }
    public function setNumriTel($numriTel)
    {
        $this->numriTel = $numriTel;
    }
    public function setIdKlientit($idKlientit)
    {
        $this->idKlientit = $idKlientit;
    }
    public function getIdKlientit()
    {
        return $this->idKlientit;
    }
    public function create_appointment()
    {
        try {
            $sql = "INSERT INTO appointment(emri,mbiemri,dataLindjes,email,numriTel,idKlientit) VALUES(:emri,:mbiemri,:dataLindjes,:email,:numriTel,:idKlientit)";
            $res = $this->prepare($sql);
            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':mbiemri', $this->mbiemri);
            $res->bindParam(':email', $this->email);
            $res->bindParam(':dataLindjes', $this->dataLindjes);
            $res->bindParam(':numriTel', $this->numriTel);
            $res->bindParam(':idKlientit', $this->idKlientit);
            $res->execute();
            echo "<script>alert('Rezervimi u be me sukses!');</script>";
        } catch (PDOException $e) {
            echo "Error in user reservation process! " . $e->getMessage();
        }
    }
    public function get_all_appointments()
    {
        $sql = "SELECT * from appointment";
        $result = $this->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, __NAMESPACE__ . "\\appointment");
    }
    public function get_appointment_id($idAppointment)
    {
        $this->idAppointment = $idAppointment;
        $sql = "SELECT * FROM appointment WHERE idAppointment=:idAppointment";
        $result = $this->prepare($sql);
        $result->bindParam(':idAppointment', $this->idAppointment);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\appointment");
        return $result->fetch();
    }

    public function update_appointment()
    {
        try {
            $sql = "UPDATE appointment SET emri=:emri,mbiemri=:mbiemri,dataLindjes=:dataLindjes,email=:email,numriTel=:numriTel WHERE idAppointment=:idAppointment";
            $res = $this->prepare($sql);
            $res->bindParam(':idAppointment', $this->idAppointment);
            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':mbiemri', $this->mbiemri);
            $res->bindParam(':dataLindjes', $this->dataLindjes);
            $res->bindParam(':email', $this->email);

            $res->bindParam(':numriTel', $this->numriTel);

            $res->execute();
            echo "<script>alert('Appointment succesfully updated!');</script>";
        } catch (PDOException $e) {
            echo "<script>Error in updating the appointment " . $e->getMessage() . "</script>";
        }
    }

    public function delete_appointment()
    {
        try {
            $sql = "DELETE FROM appointment WHERE idAppointment=:idAppointment ";
            $res = $this->prepare($sql);
            $res->bindParam(':idAppointment', $this->idAppointment);
            $res->execute();

            echo "<script>alert('Appointment succesfully deleted!');</script>";
        } catch (PDOException $e) {
            echo "ERROR IN DELETING Appointment " . $e->getMessage();
        }
    }
}
