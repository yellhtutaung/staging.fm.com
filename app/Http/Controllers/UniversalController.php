<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Helpers\General;

class UniversalController extends Controller
{
    use General;
    public function adminUniversalSwitch(Request $In)
    {
        try{
            $requestField = $In->data_obj;
            $updStatus = $this->findIdWithModelIndex($requestField['Index'],$requestField['findId'],$requestField['field'],$requestField['on_off']);
            if ($updStatus)
            {
                $switchStatus = $requestField['on_off']==1?"On":"Off";
                return response()->json(['status'=>200,'message'=>"Switch $switchStatus "]);
            }
        }catch (\Exception $e) {
            return response()->json(['status'=>500,'message'=>$e->getMessage()]);
        }
    }

}
