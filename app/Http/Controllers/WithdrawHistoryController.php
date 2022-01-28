<?php

namespace App\Http\Controllers;

use App\Models\WithdrawHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function storee(Request $request)
    {
        $request->validate([
            'platform' => 'required',
            'number' => 'required',
            'user_name' => 'required',
        ]);
            $user = new WithdrawHistory;
                $user->user_id = Auth::guard('web')->user()->id;
                $user->user_name = $request->user_name;
                $user->email = $request->email;
                $user->platform = $request->platform;
                $user->number = $request->number;
                $user->amount = $request->amount;
                $user->withdraw_amount = $request->withdraw_amount;
                $user->remaining_amount = $request->amount - $request->withdraw_amount;
                $user->save();
            return redirect()->back()->with('success', 'Payment Withdraw Sent Successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WithdrawHistory  $withdrawHistory
     * @return \Illuminate\Http\Response
     */
    public function show(WithdrawHistory $withdrawHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WithdrawHistory  $withdrawHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(WithdrawHistory $withdrawHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WithdrawHistory  $withdrawHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WithdrawHistory $withdrawHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WithdrawHistory  $withdrawHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(WithdrawHistory $withdrawHistory)
    {
        //
    }
}
