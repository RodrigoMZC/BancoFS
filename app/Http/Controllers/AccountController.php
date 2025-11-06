<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
{
    $accounts = Account::all();
    return view('accounts.index', compact('accounts'));
}


    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:30',
            'balance' => 'numeric|min:0',
            'date_opened' => 'required|date',
            'status' => 'string|max:50'
        ]);

        Account::create([
            'type' => $request->type,
            'balance' => $request->balance ?? 0,
            'date_opened' => $request->date_opened,
            'status' => $request->status ?? 'active'
        ]);

        return redirect()->route('accounts.index');
    }

    public function show(Account $account)
    {
        return view('accounts.show', compact('account'));
    }


    public function edit($id)
{
    $account = Account::findOrFail($id);
    $title = "Editar cuenta";
    return view('accounts.edit', compact('account', 'title'));
}

public function update(Request $request, $id)
{
    $account = Account::findOrFail($id);
    $account->update($request->only(['type', 'balance', 'date_opened', 'status']));
    return redirect()->route('accounts.index');
}


   public function destroy($id)
{
    $account = Account::Find($id);
    $account->delete();
    return redirect()->route('accounts.index');
}

}
