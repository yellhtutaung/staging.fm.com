<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Models\ContactForm;
use App\Models\Country;
use App\Models\FruitPriceList;
use App\Models\FruitPriceListTransition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    use HasFactory;
    public function home ()
    {
        return view('frontend.pages.home');
    }

    public function employees ()
    {
        return view('frontend.pages.employees');
    }

    public function client ()
    {
        return view('frontend.pages.client');
    }

    public  function  partnerships ()
    {
        return view('frontend.pages.partnerships');
    }

    public function market ()
    {
        return view('frontend.pages.market');
    }

    public function coldchain ()
    {
        return view('frontend.pages.coldchain');
    }

    public function job ()
    {
        return view('frontend.pages.job');
    }

//    public function register ()
//    {
//        $countries = Country::where('hide_show',1)->where('status',1)->where('level', 1)->get();
//        $cities = Country::where('hide_show',1)->where('status', 1)->where('level', 2)->get();
//        return view('auth.register',compact('countries','cities'));
//        return abort(404);
//    }

    public function priceList()
    {
        $user = Auth::guard('web')->user();
        $fruitPriceList = FruitPriceList::where('hide_show',1)->where('status',1)->orderBy('id','DESC')->get();
        return view('frontend.pages.price_list',compact('fruitPriceList', 'user'));
    }

    public function priceListHistory($id,$limit=8)
    {
        $priceList = FruitPriceList::where('token',$id)->first();
        if ($priceList)
        {
            $priceListHistory = FruitPriceListTransition::select('depend_count','token','unit','created_at','price')
                ->where('f_id',$priceList->id)->orderBy('id','DESC')->take($limit)->get();
            foreach ($priceListHistory as $Index => $History)
            {
                $created_at = explode(' ',$History->created_at);
                $History->date = $created_at[0];
                $History->time = $created_at[1];
            }
            $user = Auth::guard('web')->user();
            return view('frontend.pages.price_logs',compact('priceListHistory','priceList', 'user'));
        }else{
            return abort(404);
        }
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [
            'name' => 'Fullname: '.$request->name,
            'email' => 'Email: '.$request->email,
            'message' => 'Message: '.$request->message
        ];

        $contact_mail = "freshmoe2021@gmail.com";

        Mail::to($contact_mail)->send(new ContactUs($details));
        return redirect()->back()->with('success', 'Send Contact Form Successfully!');
    }

    public function contactToFm(Request $In)
    {

        $validator = Validator::make($In->all(), [
            'name' => ['required','min:4','max:23'],
            'email' => ['required','email'],
            'message' => ['required','min:10'],
        ]);

        if ( $validator->fails() ) {
            return response()->json([
                'status' => 'fail',
                'message' =>  $validator->errors()->first()
            ]);
        }

        $contactDb = new ContactForm();
        $contactDb->name = $In->name;
        $contactDb->email = $In->email;
        $contactDb->message = $In->message;
        $contactDb->agent_info = $In->header('User-Agent');

        if ($contactDb->save())
        {
            if (Session::get('locale') == 'mm'){
                return response()->json([
                    'status' => 'success',
                    'message' =>  'သင့်ရဲ့မက်ဆေ့ဂ်ျကို ရရှိပါသည်'
                ]);
            }
            return response()->json([
                'status' => 'success',
                'message' =>  'We received your message'
            ]);
        }

    }
}
