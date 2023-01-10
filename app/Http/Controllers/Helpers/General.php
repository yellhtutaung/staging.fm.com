<?php

namespace App\Http\Controllers\Helpers;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
trait General
{
    public static function strGenerator($no)
    {
        return   Str::random($no); // how many str do u want to use
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

}
