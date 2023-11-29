<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_golongan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $gol_kode = $_POST['gol_kode'];
          $gol_nama = $_POST['gol_nama'];

          $sql = "INSERT INTO tb_golongan
            SET gol_kode=:gol_kode, gol_nama=:gol_nama";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_nama", $gol_nama);

          $stmt->execute();
     }

     public function edit($gol_id)
     {
          $query = "SELECT * FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":gol_id", $gol_id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $gol_kode = $_POST['gol_kode'];
          $gol_nama = $_POST['gol_nama'];
          $gol_id = $_POST['gol_id'];

          $sql = "UPDATE tb_golongan
          SET gol_kode=:gol_kode, gol_nama=:gol_nama WHERE gol_id=:gol_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_nama", $gol_nama);
          $stmt->bindParam(":gol_id", $gol_id);

          $stmt->execute();
     }

     public function delete($gol_id)
     {
          $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_id", $gol_id);
          $stmt->execute();
     }
}
