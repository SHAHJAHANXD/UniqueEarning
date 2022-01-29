<?php

namespace App\Http\Controllers;

use App\Models\adds;
use App\Models\WatchAdds;
use App\Models\withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class WatchAddsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function randomURL()
    {
        return view('user.watchadds');
    }
    function random()
    {

        return view('user.free_watchadds');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Auth::guard('web')->user()->email ?? '';
        $user = withdraw::find($email);
        $watch = WatchAdds::get()->all();
        return view('user.adds', compact('user','watch'));
    }
    public function free()
    {
        $email = Auth::guard('web')->user()->email ?? '';
        $user = withdraw::find($email);
        $link = adds::get()->all();
        return view('user.adds_free', compact('user','link'));
    }
    public function continue()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user =  new WatchAdds();
        $user->user_id = Auth::guard('web')->user()->id;
        $user->name = $request->name;
        $user->email =  Auth::user()->email;
        $user->save();
        $redirect = '/start-watchadds';
        return redirect($redirect);
    }
    public function store_free(Request $request)
    {
        $update_id =  Auth::guard('web')->user()->email;
        if (isset($update_id) && !empty($update_id)) {
            $user = WatchAdds::where('email', $update_id)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->stats = 0;
                $user->save();
            }
        }
        $redirect = '/start-watchadds-free';
        return redirect($redirect);
    }
    public function storee(Request $request)
    {
        $user = WatchAdds::new();
        $user->user_id = Auth::guard('web')->user()->id;
        $user->name = Auth::guard('web')->user()->fname;
        $user->email = Auth::guard('web')->user()->email;
        $user->adds = Auth::guard('web')->user()->id;
        $user->money = $request->money;
        $user->total_money = $request->money + '0.5';
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WatchAdds  $watchAdds
     * @return \Illuminate\Http\Response
     */
    public function show(WatchAdds $watchAdds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WatchAdds  $watchAdds
     * @return \Illuminate\Http\Response
     */
    public function edit(WatchAdds $watchAdds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WatchAdds  $watchAdds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WatchAdds $watchAdds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WatchAdds  $watchAdds
     * @return \Illuminate\Http\Response
     */
    public function destroy(WatchAdds $watchAdds)
    {
        //
    }
}
