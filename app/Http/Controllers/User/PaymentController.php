<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class PaymentController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("America/New_York");
    }
    public function index()
    {
        // $type = Session::get('role_id');
        // if (!$type) {
        //     return redirect('/');
        // }

        // $arr = array();
        // $arr['title'] = "Dashboard | Hocky Gear Shop";
        // $arr['menu'] = "db";
        // //Session::put('amount', 120);
        // //	echo Session::get('amount');
        // $balence = DB::table("customers")
        //     ->select("quotes")
        //     ->where("id", "=", Session::get("role_id"))
        //     ->first();

        // $arr['quotes'] = $balence->quotes;
        return view('user.payment.paypal-payment');
    }

    public function buyConfirm(Request $request)
    {
        // $type = Session::get('id');
        // if (!$type) {
        //     return redirect('/');
        // }
        // if ($request->get('amount') <= 0) {
        //     return redirect("/purchase-ads")->with("error", "Invalid Amount");
        // }
        // dd($request);

        $tempArr = array(
            "user_id" => auth()->user()->id,
            "amount" => $request->get("amount"),
            "trx" => time() . rand(1111, 9999)
        );
        $data = array(
            "amount" => $request->get("amount"),
            //   "account" => "mystuff911@outlook.com",
            "account" => "sb-6dz6t3802717@business.example.com",
            "track" => $tempArr['trx']
        );
        DB::table("payment")->insert($tempArr);
        return view('user.paypal')->with($data);
    }

    public function ipnpaypal()
    {

        $raw_post_data = file_get_contents('php://input');
        $raw_post_array = explode('&', $raw_post_data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
            $keyval = explode('=', $keyval);
            if (count($keyval) == 2)
                $myPost[$keyval[0]] = urldecode($keyval[1]);
        }
        $req = 'cmd=_notify-validate';
        if (function_exists('get_magic_quotes_gpc')) {
            $get_magic_quotes_exists = true;
        }
        foreach ($myPost as $key => $value) {
            if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
                $value = urlencode(stripslashes($value));
            } else {
                $value = urlencode($value);
            }
            $req .= "&$key=$value";
        }
        
        
        $paypalURL = "https://www.sandbox.paypal.com/cgi-bin/webscr";
        //   $paypalURL = "https://secure.paypal.com/cgi-bin/webscr";
        $ch = curl_init($paypalURL);
        if ($ch == FALSE) {
            return FALSE;
        }

        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);

        // Set TCP timeout to 30 seconds
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name'));
        $res = curl_exec($ch);
        $tokens = explode("\r\n\r\n", trim($res));
        $res = trim(end($tokens));
        
        

        //if (strcmp($res, "VERIFIED") == 0 || strcasecmp($res, "VERIFIED") == 0) {
        $receiver_email = $_POST['receiver_email'];
        $mc_currency = $_POST['mc_currency'];
        $mc_gross = $_POST['mc_gross'];
        $track = $_POST['custom'];



        $pm = DB::table("payment")->where("trx", "=", $track)->first();
          $usr= DB::table("users")->where("id", "=", $pm->user_id)->first();

        
        
        if ($receiver_email == "sb-6dz6t3802717@business.example.com" && $mc_currency == "USD" && $mc_gross == $pm->amount && $pm->status == 0) {
           
            //   if ($receiver_email == "mystuff911@outlook.com" && $mc_currency == "CAD" && $mc_gross == $pm->amount && $pm->status == 0) {
            mail('tasfik1212@gmail.com', 'Payment Receive From Trust Agency', 'Amount Receive: ' . $pm->amount);

            //  $tempArr = array(
            //  	"quotes"=>$usr->quotes + floor(($pm->amount * 5) / 1.50)
            //  );
            //  DB::table("customers")
            //  	->where("id", "=", $pm->user_id)
            //  	->update($tempArr);

            DB::table("payment")
                ->where("id", "=", $pm->id)
                ->update(array("status" => 1));
        }
    }
}
