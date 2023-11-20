<?php

namespace Traits;

trait responseFormat
{
    public function responseFormat($code, $message, $data = null)
    {
        return json_encode(["code" => $code, "message" => $message, "data" => $data]);
    }
}
