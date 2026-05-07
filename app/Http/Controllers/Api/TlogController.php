<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tlog;

class TlogController extends Controller
{
    public function index()
    {
        $tlog = Tlog::latest()->get();

        return response()->json($tlog);
    }
}
