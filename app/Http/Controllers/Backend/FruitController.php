<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function list()
    {
        return 'list';
    }

    public function add()
    {
        return view('backend.fruit.add');
    }

    public function createFruit(Request $In)
    {
        return $In;
    }
}
