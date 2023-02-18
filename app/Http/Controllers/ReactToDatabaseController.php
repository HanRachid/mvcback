<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Database\DB;

class ReactToDatabaseController
{
    public function handle()
    {
        $db = DB::getInstance();
        $Products = (new ProductRepository($db));


        $data = json_decode(file_get_contents('php://input'), true);

        $data = array_values($data);

        $Products->addProduct(...$data);
        echo  json_encode($data);
    }
}
