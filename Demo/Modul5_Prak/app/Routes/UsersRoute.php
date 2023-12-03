<?php
namespace app\Routes;  

include"app/Controller/UserController.php";

use app\Controller\UsersController;

class UsersRoute{
    public function handle($method,$path){
        $controller = new UsersController();
        if($method== "GET" && $path== "/api/mahasiswa_with_matkul"){
            echo $controller->index();
        }
        if($method== "GET" && $path== "/api/mahasiswa"){
            echo $controller->indexMahasiswa();
        }
        if($method== "GET" && $path== "/api/matakuliah"){
            echo $controller->indexMatakuliah();
        }
        if($method== "GET" && strpos($path,"/api/mahasiswa_with_matkul/") === 0){
            $pathParts = explode("/",$path);
            $id = $pathParts[count($pathParts)-1];
            echo $controller->getById($id);
        }
        if($method== "POST"&& $path == "/api/mahasiswa_with_matkul"){
            echo $controller->insert();
        }
        if($method== "PUT"&& strpos($path,"/api/mahasiswa_with_matkul/") === 0){
            $pathParts = explode("/",$path);
            $id = $pathParts[count($pathParts)-1];
            echo $controller->update($id);
        }
        if($method== "DELETE"&& strpos($path,"/api/mahasiswa_with_matkul/") === 0){
            $pathParts = explode("/",$path);
            $id = $pathParts[count($pathParts)-1];
            echo $controller->delete($id);
        }
    }
}