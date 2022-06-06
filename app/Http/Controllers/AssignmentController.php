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
                "palindromes" => $count
            ], 200);
        }
    }

    public function countSeconds()
    {
        $dat1 = mktime(4, 14, 1732);
        $date2 = microtime(true);
        $diff = $dat1 - $date2;

        echo $diff;
    }

    public function callApi()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://icanhazdadjoke.com/slack");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 4);
        $json = curl_exec($curl);
        if (!$json) {
            echo curl_error($curl);
        }
        curl_close($curl);
        return response()->json([
            "status" => "Success",
            "api:" => json_decode($json)
        ], 200);
    }
}
