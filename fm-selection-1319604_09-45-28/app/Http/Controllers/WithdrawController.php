<?php

namespace App\Http\Controllers;

use App\Models\PaidAdds;
use App\Models\WatchAdds;
use App\Models\withdraw;
use App\Models\WithdrawHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wit = withdraw::where('email', Auth::guard('web')->user()->email)->get();

        return view('user.withdraw', compact('wit'));
    }
    public function view()
    {
        $user = WithdrawHistory::orderBy('id', 'desc')->get();
        return view('admin.withdraw.table', compact('user'));
    }
    public function payment()
    {

        return view('admin.withdraw.payment');
    }
    public function new()
    {
        return view('admin.withdraw.new');
    }
    public function history()
    {
        $history = WithdrawHistory::where('user_id', Auth::user()->id)->get();
        return view('user.withdraw_history', compact('history'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update_id = $request->email;
        if (isset($update_id) && !empty($update_id)) {
            $user = withdraw::where('email', $update_id)->latest()->First();
            $user->email = $update_id;
            $user->total_amount = $request->amount;
            $user->save();
            return redirect()->back()->with('Success', 'Withdraw Upated Successfully!');
        }
    }
    public function adds1(Request $request, $email)
    {
        $email = Auth::user()->email ?? '';
        if (isset($email) && !empty($email)) {
            $user = withdraw::find($email);
            $user->amount = 0.0005;
            $user->total_amount = $user->amount + $user->amount;
            $user->withdraw_amount = $user->total_amount;
            $user->update();
            return redirect()->back()->with('Success', 'Upated Successfully!');
        }
    }
    public function adds(Request $request, $email)
    {
        $update_id =  Auth::guard('web')->user()->email;
        if (isset($update_id) && !empty($update_id)) {
            $user = withdraw::where('email', $update_id)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->amount = 0.04;
                $user->total_amount = $user->total_amount + $user->amount;
                $user->withdraw_amount = $user->total_amount;
                $user->save();
                return redirect('/saveUser');
            }
        }
    }
    public function saveUser()
    {
        if (isset(Auth::guard('web')->user()->email) && !empty(Auth::guard('web')->user()->email)) {
            $user = PaidAdds::where('email', Auth::guard('web')->user()->email)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->money = $user->money - 1;
                $user->total_money = $user->money - 1;
                $user->save();
            }
            return redirect('/start-watchadds')->with('Success', 'Add Watched Successfully!');
        }
    }
    public function saveUserPayment()
    {
        $update_id =  Auth::guard('web')->user()->email;
        if (isset($update_id) && !empty($update_id)) {
            $user = WatchAdds::where('user_id', $update_id)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->money = 1;
                $user->total_money = $user->total_money + $user->money;
                $user->save();

            }
           return redirect()->back()->with('Success', ' Withdraw Sent Successfully!');
        }
    }
    public function adds_free(Request $request, $email)
    {
        $update_id =  Auth::guard('web')->user()->email;
        if (isset($update_id) && !empty($update_id)) {
            $user = withdraw::where('email', $update_id)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->amount = 0.001;
                $user->total_amount = $user->total_amount + $user->amount;
                $user->withdraw_amount = $user->total_amount;
                $user->save();
            }
            return redirect('/saveUser-free');
        }
    }

    public function saveUserFree()
    {
        if (isset(Auth::guard('web')->user()->email) && !empty(Auth::guard('web')->user()->email)) {
            $user = WatchAdds::where('email', Auth::guard('web')->user()->email)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->money = $user->money - 1;
                $user->total_money = $user->money - 1;
                $user->save();
            }
            return redirect('/start-watchadds-free')->with('Success', 'Add Watched Successfully!');
        }
    }
    public function storee(Request $request, $email)
    {
        $update_id =  Auth::user()->email ?? '';
        if (isset($update_id) && !empty($update_id)) {
            $user = withdraw::where('email', $update_id)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->user_id = Auth::user()->id;
                $user->user_name = $request->user_name;
                $user->email = $request->email;
                $user->amount = $request->amount;
                $user->withdraw_amount = $request->withdraw_amount;
                $user->remaining_amount = $request->amount - $request->withdraw_amount;
                $user->update();
            } else {
                return redirect()->back()->with('error', 'User Not Exist!');
            }
            return redirect()->back()->with('Success', 'Payment Withdraw Sent Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function show(withdraw $withdraw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $email)
    {
        $email = Auth::guard('web')->user()->email ?? '';
        $wit = withdraw::where('email', $email)->latest()->first();

        $user = withdraw::find($email);
        return view('user.withdraw', compact('user', 'wit'));
    }
    public function status0(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = WithdrawHistory::find($update_id);
            $userr->status = 0;
            $userr->save();
            return redirect()->back()->with('success', 'Leave Updated Successfully!');
        }
    }
    public function status1(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = WithdrawHistory::find($update_id);
            $userr->status = 1;
            $userr->save();
            return redirect()->back()->with('success', 'Leave Updated Successfully!');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, withdraw $withdraw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(withdraw $withdraw)
    {
        //
    }
}
