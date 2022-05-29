<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class TransactionsController extends Controller
{
    //
    public function index()
    {
        $transactions = DB::table('transactions')
            ->join('accounts','transactions.account_id','=','accounts.id')
            ->select('transactions.*','accounts.name as account_name')
            ->get();
        $accounts = DB::table('accounts')
            ->join('users','accounts.user_id','=',"users.id")
            ->select('accounts.*','users.name as user_name',)
            ->get();
        return view('sections.transactions',[
            "handle" => "transactions",
            "transactions" => $transactions,
            "accounts" => $accounts
        ]);
    }

    public function create(Request $request){
        $validated = $request->validate([
            'account_id' => ['required', 'int'],
            'direction' => ['required', 'string','regex:(debit|credit)'],
            'ammount' => ['required', 'int'],
            'comment' => ['required', 'string', 'max:255'],
        ]);
        
        $transaction = new Transaction;
        $transaction->account_id = $validated['account_id'];
        if($validated['direction'] == 'debit'){
            $transaction->debit = $validated['ammount'];
        }
        if($validated['direction'] == 'credit'){
            $transaction->credit = $validated['ammount'];
        }
        $transaction->comment = $validated['comment'];
        $transaction->save();
        return redirect("/transactions");
    }
}
