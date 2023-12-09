<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkController extends Controller
{
    public function getAll(Response $response)
    {
        $works = Work::paginate(6);
        return response()->json($works);
    }
}
