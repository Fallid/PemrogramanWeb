<?php
namespace app\Models;

include"app/Config/DatabaseConfig.php";

use app\Config\DatabaseConfig;
use mysqli;

class Users extends DatabaseConfig {
    public $conn;
    public function __construct() {
        $this->conn = new mysqli($this->host,$this->username,$this->password, $this->database, $this->port);
    }

    public function findAllWithMatkul(){
        $sql = "SELECT mahasiswa.nama_lengkap, mahasiswa.nim, mahasiswa.semester,matakuliah.nama_matkul, matakuliah.sks, matakuliah.semester_kurikulum 
        FROM mahasiswa INNER JOIN matakuliah ON mahasiswa.id_matkul = matakuliah.id_matkul";
        $result = $this->conn->query($sql);
        $this->conn->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    public function findAllMahasiswa(){
        $sql = "SELECT DISTINCT mahasiswa.nama_lengkap, mahasiswa.nim, mahasiswa.semester FROM mahasiswa";
        $result = $this->conn->query($sql);
        $this->conn->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    public function findAllMatakuliah(){
        $sql = "SELECT DISTINCT matakuliah.nama_matkul, matakuliah.sks, matakuliah.semester_kurikulum FROM matakuliah";
        $result = $this->conn->query($sql);
        $this->conn->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function findById($id){
        $sql = "SELECT mahasiswa.nama_lengkap, mahasiswa.nim, mahasiswa.semester, matakuliah.nama_matkul, matakuliah.sks, matakuliah.semester_kurikulum 
        FROM mahasiswa INNER JOIN matakuliah ON mahasiswa.id_matkul = matakuliah.id_matkul WHERE id_mhs = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->conn->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    public function create($data){
        $namaMahasiswa = $data["nama_lengkap"];
        $nimMahasiswa = $data["nim"];
        $semesterMahasiswa = $data["semester"];
        $id_matkul = $data["id_matkul"];
        $sql = "INSERT INTO mahasiswa (nama_lengkap, nim, semester, id_matkul ) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssii", $namaMahasiswa, $nimMahasiswa, $semesterMahasiswa, $id_matkul);
        $stmt->execute();
        $this->conn->close();
    }

    public function update($data, $id){
        $namaMahasiswa = $data["nama_lengkap"];
        $nimMahasiswa = $data["nim"];
        $semesterMahasiswa = $data["semester"];
        $id_matkul = $data["id_matkul"];
        $sql = "UPDATE mahasiswa SET nama_lengkap = ?, nim = ?, semester = ?, id_matkul = ? WHERE id_mhs = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssiii",$namaMahasiswa, $nimMahasiswa, $semesterMahasiswa, $id_matkul ,$id);
        $stmt->execute();
        $this->conn->close();
    }
    public function delete($id){
        $sql = "DELETE FROM mahasiswa WHERE id_mhs = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $this->conn->close();
    }
}