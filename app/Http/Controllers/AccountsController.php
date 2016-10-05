<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Account;
use App\doctablepostv7;
use DB;

class AccountsController extends Controller
{
    public function listAll(){

    	return view('home');
    }

    public function showAccount($account_number){

    	$bank_account = Account::where('account_number','like', $account_number)->get();
    	return view('account.info', compact('bank_account'));

    }
}
