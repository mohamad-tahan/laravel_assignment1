<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function countPalindromes()
    {
        $count = 0;
        $pal = ["redivider", "civic", "hello", "world", "level"];
        for ($i = 0; $i < count($pal); $i++) {
            if ($pal[$i] == strrev($pal[$i])) {
                $count++;
            }
            return response()->json([
                "success" => "hi",
                "pal" => $count
            ], 200);
        }
    }


    



}
