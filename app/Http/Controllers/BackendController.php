<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BackendController extends Controller
{
    private $names = [
        1 => ["name" => "Cristian", "age" => 29],
        2 => ["name" => "Juan", "age" => 28],
        3 => ["name" => "Valentin", "age" => 18],
        4 => ["name" => "Dafne", "age" => 26],
    ];

    public function getAll(){
        return response()->json($this->names);
    }

    public function get(int $id = 0){
        if(isset($this->names[$id])){
            return response()->json($this->names[$id]);
        } else {
            return response()->json(["error" => "Person not found"], Response::HTTP_NOT_FOUND);
        }
    }
}
