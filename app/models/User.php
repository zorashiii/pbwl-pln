<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_user";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_nama = $_POST['user_nama'];
            $user_alamat = $_POST['user_alamat'];
            $user_hp = $_POST['user_hp'];
            $user_pos= $_POST['user_pos'];
            $user_role = $_POST['user_role'];
            $user_aktif= $_POST['user_aktif'];

            $sql = "INSERT INTO tb_user
            SET user_email=:user_email, user_password=PASSWORD(:user_password), user_nama=:user_nama, 
            user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, 
            user_aktif=:user_aktif";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_nama", $user_nama);
            $stmt->bindParam(":user_alamat", $user_alamat);
            $stmt->bindParam(":user_hp", $user_hp);
            $stmt->bindParam(":user_pos", $user_pos);
            $stmt->bindParam(":user_role", $user_role);
            $stmt->bindParam(":user_aktif", $user_aktif);
            $stmt->execute();
      }

      public function edit($user_id)
      {
            $query = "SELECT * FROM tb_user WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":user_id", $user_id);
            $stmt->execute(); 

            return $this->select($stmt);
      }

      public function update()
      {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_nama = $_POST['user_nama'];
            $user_alamat = $_POST['user_alamat'];
            $user_hp = $_POST['user_hp'];
            $user_pos= $_POST['user_pos'];
            $user_role = $_POST['user_role'];
            $user_aktif= $_POST['user_aktif'];
            $user_id = $_POST['user_id'];

            if (!empty($user_password)) {
                  $sql = "UPDATE tb_user
                  SET user_email=:user_email, user_password=PASSWORD(:user_password), user_nama=:user_nama, 
                  user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, 
                  user_aktif=:user_aktif
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_user
                  SET user_email=:user_email, user_nama=:user_nama, 
                  user_alamat=:user_alamat, user_hp=:user_pos, user_role=:user_role, 
                  user_aktif=:user_aktif
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password); 
            $stmt->bindParam(":user_nama", $user_nama);
            $stmt->bindParam(":user_alamat", $user_alamat);
            $stmt->bindParam(":user_hp", $user_hp);
            $stmt->bindParam(":user_pos", $user_pos);
            $stmt->bindParam(":user_role", $user_role);
            $stmt->bindParam(":user_aktif", $user_aktif);
            $stmt->bindParam(":user_id", $user_id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_user WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}
