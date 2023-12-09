<?php

namespace App\Controllers;

use CodeIgniter\Restful\ResourceController;

class RestfulController extends ResourceController
{
    protected $format = 'json';

    protected function responseHasil($code, $status, $data)
    {
        return $this->respond([
            'code'=> $code,
            'status'=> $status,
            'data'=> $data
        ]);
    }
}