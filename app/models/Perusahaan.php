<?php

namespace App\Models;

use App\Core\Model;

class Perusahaan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_perusahaan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $per_namaperusahaan = $_POST['per_namaperusahaan'];
          $per_alamat = $_POST['per_alamat'];
          $per_notelephone = $_POST['per_notelephone'];

          $sql = "INSERT INTO tb_perusahaan
            SET per_namaperusahaan=:per_namaperusahaan,per_alamat=:per_alamat,per_notelephone=:per_notelephone";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":per_namaperusahaan", $per_namaperusahaan);
          $stmt->bindParam(":per_alamat", $per_alamat);
          $stmt->bindParam(":per_notelephone", $per_notelephone);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_perusahaan WHERE per_id=:per_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":per_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $per_namaperusahaan = $_POST['per_namaperusahaan'];
          $id = $_POST['id'];
          $per_alamat = $_POST['per_alamat'];
          $per_notelephone = $_POST['per_notelephone'];

          $sql = "UPDATE tb_perusahaan
          SET per_namaperusahaan=:per_namaperusahaan,per_alamat=:per_alamat,per_notelephone=:per_notelephone WHERE per_id=:per_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":per_namaperusahaan", $per_namaperusahaan);
          $stmt->bindParam(":per_id", $id);
          $stmt->bindParam(":per_alamat", $per_alamat);
          $stmt->bindParam(":per_notelephone", $per_notelephone);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_perusahaan WHERE per_id=:per_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":per_id", $id);
          $stmt->execute();
     }
}
