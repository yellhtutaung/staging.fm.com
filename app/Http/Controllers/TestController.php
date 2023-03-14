<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\General;
use App\Models\Permission;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use General;
    public function test()
    {
        $get = Permission::orderBy('order_sort_id', 'desc')->first();
        return $get->order_sort_id;
        return $this->findIdWithModelIndex(2,1,'hide_show',0);
    }
}
