<?php

namespace App\Models;

use App\Core\Model;

class Menu extends Model
{

      public function show()
      {
            $query = "SELECT * FROM menu";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            $detail = $_POST['detail'];
            $kategori = $_POST['kategori'];

            $sql = "INSERT INTO menu
            SET nama=:nama, harga=:harga, detail=:detail, kategori=:kategori";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":detail", $detail);
            $stmt->bindParam(":kategori", $kategori);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM menu WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            $detail = $_POST['detail'];
            $kategori = $_POST['kategori'];
            $id = $_POST['id'];

            if (!empty($nama)) {
                  $sql = "UPDATE menu
                  SET nama=:nama, harga=:harga, detail=:detail, kategori=:kategori
                  WHERE id=:id";
            } else {
                  $sql = "UPDATE menu
                  SET nama=:nama, harga=:harga, detail=:detail, kategori=:kategori
                  WHERE id=:id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":detail", $detail);
            $stmt->bindParam(":kategori", $kategori);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM menu WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
