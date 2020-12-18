<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment as Payment;
use DB;

class PaymentsController extends Controller
{
    public function post(Request $req)
	{
		$p = Payment::create([
	    	'payments_name' => $req->pn,
	     ]);

        return view('welcome', compact('p'));
	}

	public function add(Request $req)
	{
		return view('index');
	}

	public function get(Request $req)
	{
		$p = Payment::get();
		return view('welcome', compact('p'));
	}

	public function deleteAll(Request $req)
    {
        $ids = $req->ids;
        DB::table("paymnets")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Payments Deleted successfully."]);
    }
}
