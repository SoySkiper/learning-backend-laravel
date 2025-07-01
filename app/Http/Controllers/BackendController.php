<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
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
        if(isset($this->names[$id])){
            return response()->json($this->names[$id]);
        } else {
            return response()->json(["error" => "Person not found"], Response::HTTP_NOT_FOUND);
        }
    }

    public function create(Request $request){
        $person = [
            "id" => count($this->names) + 1,
            "name" => $request->input('name'),
            "age" => $request->input('age')
        ];

        $this->names[$person['id']] = $person;
        return response()->json(["message" => "Person created successfully", "person" => $person], Response::HTTP_CREATED);
    }
}
