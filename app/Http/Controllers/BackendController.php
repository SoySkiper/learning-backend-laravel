<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return response()->json([
            'id' => $id,
            'success' => true,
            'message' => 'Todo un fullstack developer.',
        ]);
    }
}
