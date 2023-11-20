<?php

namespace Controller;

include "Controllers/Controller.php";
include "Traits/ResponseFormat.php";

use Traits\responseFormat;

class SongsController extends Controller
{
    use responseFormat;
    public function __construct()
    {
        $this->controllerName = "SongsController";
    }

    public function dataDummy()
    {
        $dummyData = [
            ["name" => "Satu-Satunya", "Artis" => "HiVi"],
            ["name" => "I Will Survive", "Artis" => "Gloria Gaynor"],
            ["name" => "Kisah Sebentar", "Artis" => "Tulus"],
        ];
        return $dummyData;
    }
    public function getAllSongs()
    {
        $data = $this->dataDummy();
        $response = [
            "controller_attribute " => $this->getAttribute("GetAllSongs", "GET"),
            "songs" => $data
        ];
        return $this->responseFormat(200, "Success", $response);
    }
    public function getSongs($index)
    {
        $data = $this->dataDummy();
        $response = [
            "controller_attribute " => $this->getAttribute("GetSongByID", "GET"),
            "songs" => "No Data Recieved"
        ];
        if ($index <= count($data)) {
            $response["songs"] = $data[$index - 1];
            return $this->responseFormat(200, "Success", $response);
        } else {
            return $this->responseFormat(400, "Failed", $response);
        }
    }
}
