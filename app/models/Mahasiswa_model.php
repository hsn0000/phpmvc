<?php

class Mahasiswa_model {
//    private $mhs = [
//        [
//           "nama" => "Ahmad Saogi",
//           "nrp" => "082363636",
//           "email" => "saogi@gmail",
//           "jurusan" => "Teknik Mesin"
//        ],
//        [
//            "nama" => "Ratna Sari",
//            "nrp" => "09876543",
//            "email" => "ratna@gmail",
//            "jurusan" => "Tataboga"
//        ],
//        [
//            "nama" => "Josua Perdinan",
//            "nrp" => "214536578",
//            "email" => "josua@gmail",
//            "jurusan" => "Teknik Informatika"
//        ]
//    ];
  
//    private $dbh; // database handler
//    private $stmt; // statement
      private $table = 'mahasiswa';
      private $db;

      public function __construct() {
          $this->db = new Database;
      }

    public function getAllMahasiswa() {
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();

    }
    public function getMahasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . 'WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data) {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id) {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $query->db->query($query);
        $query->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data) {

        $query = "UPDATE mahasiswa SET nama = : nama, nrp = nrp, email = email, jurusan = jurusan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        
        return $this->db->rowCount();
    }



}

