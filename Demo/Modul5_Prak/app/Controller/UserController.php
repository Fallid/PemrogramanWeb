<?php

namespace app\Controller;  

include"app/Traits/ApiResponseFormatter.php";
include"app/Models/Users.php";

use app\Models\Users;
use app\Traits\ApiResponseFormatter;

class UsersController{
    use ApiResponseFormatter;
    public function index(){
        $usersModel = new Users();
        $response = $usersModel->findAllWithMatkul();
        return $this->apiResponse(200,"Success",$response);
    }
    public function indexMahasiswa(){
        $usersModel = new Users();
        $response = $usersModel->findAllMahasiswa();
        return $this->apiResponse(200,"Success",$response);
    }
    public function indexMatakuliah(){
        $usersModel = new Users();
        $response = $usersModel->findAllMatakuliah();
        return $this->apiResponse(200,"Success",$response);
    }
    public function getById($id){
        $productModel = new Users();
        $response = $productModel->findById($id);
        return $this->apiResponse(200, "success", $response);
    }

    public function insert(){
        $jsonInput = file_get_contents("php://input");
        $inputData = json_decode($jsonInput, true);
        if(json_last_error()){
            return $this->apiResponse(400,"error invalid input", null);
        }

        $productModel = new Users();
        $response = $productModel->create([
            "nama_lengkap"=> $inputData["nama_lengkap"],
            "nim"=> $inputData["nim"],
            "semester"=> $inputData["semester"],
            "id_matkul"=> $inputData["id_matkul"],
        ]);
        return $this->apiResponse(200, "success", $response);
    }

    public function update($id) {
        // Tangkap input JSON
        $jsonInput = file_get_contents("php://input");
        $inputData = json_decode($jsonInput, true);
        // Validasi apakah input valid
        if (json_last_error()) {
            return $this->apiResponse(400, "error invalid input", null);
        }
        $productModel = new Users();
        $response = $productModel->update([
            "nama_lengkap"=>$inputData["nama_lengkap"],
            "nim"=>$inputData["nim"],
            "semester"=>$inputData["semester"],
            "id_matkul"=>$inputData["id_matkul"],
        ], $id);

        return $this->apiResponse(200, "success", $response);
    }

    public function delete($id){
        $productModel = new Users();
        $response = $productModel->delete($id);
        return $this->apiResponse(200, "success", $response);
    }
}
