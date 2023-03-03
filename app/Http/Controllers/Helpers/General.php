<?php

namespace App\Http\Controllers\Helpers;
use App\Models\OtpVerify;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
trait General
{

    public static function strGenerator($no)
    {
        return   Str::random($no); // how many str do u want to use
    }

    public function generateOTP($incomingPhone)
    {
        $generateOtp = mt_rand(100000,999999);
        $otpDb = new OtpVerify();
        $otpDb->phone = $incomingPhone;
        $otpDb->otp = $generateOtp;
        $otpDb->is_verify = 0;
        if ($otpDb->save())
        {
            return $generateOtp;
        }else{
            return false;
        }
    }

    public static function chrGenerator($prefix)
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        $date = date("his");
        return $prefix.$UpperCase.$NewCase.$LowerCase.$date;
    }

    public static function sendSMS($phone,$otp,$message='is Your OTP Number')
    {
        $token=config('sms_poh.access_token');
        //send sms here
        try {
            $client = new Client();
            $response=$client->request('POST', 'https://smspoh.com/api/v2/send', [
                'headers'=>[
                    'Authorization'=>"Bearer $token",
                ],
                'json' =>[
                    'message'=> $otp.' '.$message ,
                    'to'=>$phone,
                    'sender'=>"",
                ]
            ] );
            $result=json_decode($response->getBody()->getContents(), true);
            return $result;
        } catch (ClientException $e) {
            if ($e->getCode()===401) {
                throw new AuthorizationException(
                    "Authorization failed. Please provide correct token for SmsPoh in configuration file.",
                    401
                );
            } elseif ($e->getCode()===403) {
                throw new BadRequestException(
                    $e->getMessage(),
                    403
                );
            }
        }
    }

    public static function findIdWithModelIndex($Index,$findId,$field,$on_off)
    {
        $modelArr = [
            \App\Models\Admin::find($findId),
            \App\Models\User::find($findId),
            \App\Models\FruitPriceList::find($findId),
            \App\Models\FruitPriceListTransition::find($findId),
            \App\Models\Country::find($findId),
            \App\Models\Permission::find($findId),
        ];
        $fetchOne = $modelArr[$Index];
        $fetchOne->$field = $on_off;
        if($fetchOne->save())
        {
            return true;
        }
    }


}
