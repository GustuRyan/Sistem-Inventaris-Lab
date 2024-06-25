<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index($id)
    {
        $transactions = Transaction::where('user_id', $id)->get();

        $details = collect();

        foreach ($transactions as $trans) {
            $detail = TransactionDetail::where('trans_id', $trans->id)->get();
            $details = $details->merge($detail);
        }

        return view('user.pages.borrows', compact('transactions', 'details'));
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validasi input
        $request->validate([
            'status' => 'required|string',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
            'user_id' => 'required|exists:users,id',
            'details' => 'required|array',
            'details.*.tool_id' => 'nullable|integer|exists:tools,id',
            'details.*.material_id' => 'nullable|integer|exists:materials,id',
            'details.*.amount' => 'required|integer|min:1',
        ]);

        // Create Transaction
        $transaction = Transaction::create([
            'status' => $request->status,
            'borrow_date' => Carbon::parse($request->borrow_date),
            'return_date' => Carbon::parse($request->return_date),
            'user_id' => $request->user_id,
        ]);

        // Loop through details and create TransactionDetail
        foreach ($request->details as $detail) {
            // Ensure tool_id and material_id validation
            if (($detail['material_id'] != 0 && $detail['tool_id'] == 0) || ($detail['material_id'] == 0 && $detail['tool_id'] != 0)) {
                TransactionDetail::create([
                    'tool_id' => $detail['tool_id'] ?? 0,
                    'material_id' => $detail['material_id'] ?? 0,
                    'trans_id' => $transaction->id,
                    'amount' => $detail['amount'],
                ]);
            } else {
                // Return an error if validation fails
                return back()->withErrors('Invalid tool_id or material_id combination.');
            }
        }

        // Hapus seluruh isi cart dengan user_id pembuat transaction
        Cart::where('user_id', $request->user_id)->delete();

        return redirect()->route('peminjaman', )->with('success', 'Transaction created successfully!');
    }
    //
}


