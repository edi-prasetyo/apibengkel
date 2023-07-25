<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
    {
        $test = ['Test 1', 'Test 2', 'Test 3'];
        return response()->json([
            'test' => $test,
        ]);
    }
}
