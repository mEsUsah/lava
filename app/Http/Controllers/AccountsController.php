<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 
class AccountsController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return string
     */
    public function index()
    {
        $users = DB::table('users')->get(['id','name']);
        $accounts = DB::table('accounts')->get();
        return view('sections.accounts',[
            "handle" => "accounts",
            "accounts" => $accounts,
            "users" => $users
        ]);
    }

    public function create(Request $request){
        $account = new Account;
        $account->name = $request->input('name');
        $account->user = $request->input('user');
        $account->save();
        return redirect("/accounts");
    }
}