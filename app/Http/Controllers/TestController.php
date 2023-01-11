<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\General;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use General;
    public function test()
    {
        return $this->findIdWithModelIndex(2,1,'hide_show',0);
    }
}
