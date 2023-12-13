<?php

namespace App\Models;

use App\Core\Model;

class Pesanan extends Model
{

      public function show()
      {
            $query = "SELECT * FROM pesanan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $rasa = $_POST['rasa'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['jumlah'];
            $waktu = $_POST['waktu'];

            $sql = "INSERT INTO pesanan
            SET nama=:nama, rasa=:rasa, harga=:harga, jumlah=:jumlah, waktu=:waktu";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":rasa", $rasa);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":jumlah", $jumlah);
            $stmt->bindParam(":waktu", $waktu);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM pesanan WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $rasa = $_POST['rasa'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['jumlah'];
            $waktu = $_POST['waktu'];
            $id = $_POST['id'];

            if (!empty($nama)) {
                  $sql = "UPDATE pesanan
            SET nama=:nama, rasa=:rasa,harga=:harga, jumlah=:jumlah, waktu=:waktu
                  WHERE id=:id";
            } else {
                  $sql = "UPDATE pesanan
            SET nama=:nama, rasa=:rasa,harga=:harga, jumlah=:jumlah, waktu=:waktu
                  WHERE id=:id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":rasa", $rasa);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":jumlah", $jumlah);
            $stmt->bindParam(":waktu", $waktu);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM pesanan WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
