<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controllers/Controller.php";

use Traits\ResponseFormater;

class ProductController extends Controller
{
    use ResponseFormater;
    public function __construct()
    {
        $this->controllerName = "Get All Product";
        $this->controllerMethod = "Get";
    }
    public function getAllProduct()
    {
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu",
        ];
        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];
        return $this->responseFormat(200, "Success", $response);
    }
}
