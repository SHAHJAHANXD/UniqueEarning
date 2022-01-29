<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function one_dollar()
    {
        return view('user.one');
    }
    public function two_dollar()
    {
        return view('user.two');
    }
    public function three_dollar()
    {
        return view('user.three');
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
    public function one_dollar_send(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'trx' => 'required',
        ]);
        $invest = new Investment();
        $invest->userid = Auth::guard('web')->user()->id;
        $invest->fname = Auth::user()->fname;
        $invest->lname = Auth::user()->lname;
        $invest->email = Auth::user()->email;
        $invest->minimum = $request->minimum;
        $invest->number = $request->number;
        $invest->trx = $request->trx;
        $invest->save();
        return redirect()->back()->with('success','Your Request Submitted. Wait for response from Admin!');
    }
    public function two_dollar_send(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'trx' => 'required',
        ]);
        $invest = new Investment();
        $invest->userid = Auth::guard('web')->user()->id;
        $invest->fname = Auth::user()->fname;
        $invest->lname = Auth::user()->lname;
        $invest->email = Auth::user()->email;
        $invest->minimum = $request->minimum;
        $invest->number = $request->number;
        $invest->trx = $request->trx;
        $invest->save();
        return redirect()->back()->with('success','Your Request Submitted. Wait for response from Admin!');
    }
    public function three_dollar_send(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'trx' => 'required',
        ]);
        $invest = new Investment();
        $invest->userid = Auth::guard('web')->user()->id;
        $invest->fname = Auth::user()->fname;
        $invest->lname = Auth::user()->lname;
        $invest->email = Auth::user()->email;
        $invest->minimum = $request->minimum;
        $invest->number = $request->number;
        $invest->trx = $request->trx;
        $invest->save();
        return redirect()->back()->with('success','Your Request Submitted. Wait for response from Admin!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invest()
    {
        $history = Investment::where('userid', Auth::guard('web')->user()->id)->get();
        return view('user.history', compact('history'));
    }
    public function dashboard()
    {
        $user = Investment::where('userid', Auth::guard('web')->user()->id)->get();
        return view('user.dashboard', compact('user'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function show(Investment $investment)
    {
        //
    }
    public function status_zero(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $user = Investment::find($update_id);
            $user->status = 0;
            $user->save();
            return redirect()->back()->with('success', 'Leave Updated Successfully!');
        }
    }
    public function status_one(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $user = Investment::find($update_id);
            $user->status = 1;
            $user->save();
            return redirect()->back()->with('success', 'Leave Updated Successfully!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function edit(Investment $investment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $investment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investment $investment)
    {
        //
    }
}
