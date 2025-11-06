<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('accounts.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'type' => 'required|string|max:30',
            'balance' => 'nullable|numeric',
            'date_opened' => 'required|date',
            'status' => 'required|string',
        ]);

        $data['balance'] = $data['balance'] ?? 0;

        Account::create($data);

        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $account = Account::findOrFail($id);
        $customers = Customer::all();
        return view('accounts.edit', compact('account', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $account = Account::findOrFail($id);

        $data = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'type' => 'required|string|max:30',
            'balance' => 'nullable|numeric',
            'date_opened' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        $data['balance'] = $data['balance'] ?? 0;

        $account->update($data);

        return redirect()->route('accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $account = Account::findOrFail($id);
        $account->delete();
        return redirect()->route('accounts.index');
    }
}
