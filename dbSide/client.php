<?php

namespace dbSide;

use dbSide;

include_once('database.php');

use PDO;
use PDOException;

class Client extends Database
{
    protected $idKlientit;
    protected $emri;
    protected $mbiemri;
    protected $email;
    protected $dataLindjes;
    protected $passwordi;
    protected $role;
    protected $numriTel;

    public function getIDK()
    {
        return $this->idKlientit;
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
    public function getPasswordi()
    {
        return $this->passwordi;
    }
    public function setPasswordi($passwordi)
    {
        $this->passwordi = $passwordi;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getNumriTelefonit()
    {
        return $this->numriTel;
    }
    public function setNumriTel($numriTel)
    {
        $this->numriTel = $numriTel;
    }


    public function create_client()
    {
        try {
            $sql = "INSERT INTO client(emri,mbiemri,dataLindjes,email,passwordi,numriTel) VALUES(:emri,:mbiemri,:dataLindjes,:email,:passwordi,:numriTel)";
            $res = $this->prepare($sql);

            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':mbiemri', $this->mbiemri);
            $res->bindParam(':email', $this->email);
            $res->bindParam(':dataLindjes', $this->dataLindjes);
            $res->bindParam(':passwordi', $this->passwordi);
            $res->bindParam(':numriTel', $this->numriTel);
            $res->execute();
            echo "<script>alert('Regjistrimi u be me sukses!');</script>";
        } catch (PDOException $e) {
            echo "Error in user registration process! " . $e->getMessage();
        }
    }

    public function get_all_clients()
    {
        $sql = "SELECT * from client";
        $result = $this->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, __NAMESPACE__ . "\\client");
    }

    public function get_user_id($idKlientit)
    {
        $this->idKlientit = $idKlientit;
        $sql = "SELECT * FROM client WHERE idKlientit=:idKlientit";
        $result = $this->prepare($sql);
        $result->bindParam(':idKlientit', $this->idKlientit);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\client");
        return $result->fetch();
    }

    public function update_client()
    {
        try {
            $sql = "UPDATE client SET emri=:emri,mbiemri=:mbiemri,dataLindjes=:dataLindjes,email=:email,passwordi=:passwordi,numriTel=:numriTel,role=:role WHERE idKlientit=:idKlientit";
            $res = $this->prepare($sql);
            $res->bindParam(':idKlientit', $this->idKlientit);
            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':mbiemri', $this->mbiemri);
            $res->bindParam(':dataLindjes', $this->dataLindjes);
            $res->bindParam(':email', $this->email);
            $res->bindParam(':passwordi', $this->passwordi);
            $res->bindParam(':numriTel', $this->numriTel);
            $res->bindParam(':role', $this->role);
            $res->execute();
            echo "<script>alert('Client succesfully updated!');</script>";
        } catch (PDOException $e) {
            echo "<script>Error in updating the client " . $e->getMessage() . "</script>";
        }
    }

    public function delete_client()
    {
        try {
            $sql = "DELETE FROM client WHERE idKlientit=:idKlientit ";
            $res = $this->prepare($sql);
            $res->bindParam(':idKlientit', $this->idKlientit);
            $res->execute();

            echo "<script>alert('Client succesfully deleted!');</script>";
        } catch (PDOException $e) {
            echo "ERROR IN DELETING CLIENT " . $e->getMessage();
        }
    }
}
