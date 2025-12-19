<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // GET all students
    public function index()
    {
        return response()->json([
            [
                "id" => 1,
                "name" => "Juan Dela Cruz",
                "course" => "BSIT"
            ],
            [
                "id" => 2,
                "name" => "Maria Santos",
                "course" => "BSCS"
            ]
        ]);
    }

    // GET one student
    public function show($id)
    {
        return response()->json([
            "id" => $id,
            "name" => "Juan Dela Cruz",
            "course" => "BSIT"
        ]);
    }
}
