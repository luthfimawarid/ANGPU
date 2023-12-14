<?php

namespace App\Models;

use App\Core\Model;

class Customer extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_customers";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $username = $_POST['username'];
          $alamat = $_POST['alamat'];
          $email = $_POST['email'];
          $no_telepon = $_POST['no_telepon'];
          $jenis_kelamin = $_POST['jenis_kelamin'];

          $sql = "INSERT INTO tb_customers
            SET username=:username, alamat=:alamat, email=:email, no_telepon=:no_telepon, jenis_kelamin=:jenis_kelamin";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":username", $username);
          $stmt->bindParam(":alamat", $alamat);
          $stmt->bindParam(":email", $email);
          $stmt->bindParam(":no_telepon", $no_telepon);
          $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_customers WHERE id_cus=:id_cus";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id_cus", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
{
    $username = $_POST['username'];
    $id = $_POST['id'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "UPDATE tb_customers
            SET username=:username, alamat=:alamat, email=:email, no_telepon=:no_telepon, jenis_kelamin=:jenis_kelamin 
            WHERE id_cus=:id_cus";

    $stmt = $this->db->prepare($sql);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":alamat", $alamat);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":no_telepon", $no_telepon);
    $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
    $stmt->bindParam(":id_cus", $id);

    $stmt->execute();
}

     public function delete($id)
     {
           $sql = "DELETE FROM tb_customers WHERE id_cus=:id_cus";
           $stmt = $this->db->prepare($sql);

           $stmt->bindParam(":id_cus", $id);
           $stmt->execute();
     }
}
