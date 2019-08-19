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
 public function getMahasiswabyId($id) {
     $this->db->query('SELECT * FROM ' . $this->table . 'WHERE id=:id');
     $this->db->bind('id', $id);
     return $this->db->single();
 }

}

