<?php

namespace Controller;

abstract class AbstractController
{
    var $controllerName;
    var $fucntionName;
    var $HTTPMenthod;
    abstract public function getAttribute($function, $method);
}
