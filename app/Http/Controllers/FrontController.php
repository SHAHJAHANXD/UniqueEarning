<?php

namespace App\Http\Controllers;
use Illuminate\Console\Scheduling\Schedule;
use App\Models\Front;
use App\Models\Investment;
use App\Models\PaidAdds;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WatchAdds;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\withdraw;
use App\Models\WithdrawHistory;
use Carbon;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->count();
        return view('user.index', compact('user'));
    }
    public function deposit()
    {
        return view('user.deposit');
    }
    public function dashboard()
    {
        $indexxx = PaidAdds::where('email', Auth::guard('web')->user()->email)->get();
        $index = User::where('id', Auth::guard('web')->user()->id)->get();
        $indexx = WatchAdds::where('email', Auth::guard('web')->user()->email)->get();
        $email = withdraw::where('email', Auth::guard('web')->user()->email)->get();
        $user = Investment::where('userid', Auth::guard('web')->user()->id)->latest()->first();
        $users = WithdrawHistory::where('user_id', Auth::guard('web')->user()->id)->latest()->first();
        return view('user.dashboard', compact('user', 'email', 'index','indexx','users','indexxx'));
    }
    public function login()
    {
        return view('user.login');
    }
    public function register()
    {
        return view('user.register');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function profile()
    {
        $id = Auth::guard('web')->user()->id ?? '';
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }
    public function password()
    {
        return view('user.password');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forget()
    {
        return view('user.reset');
    }
    public function reference()
    {
        return view('user.reference');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update_id = Auth::guard('web')->user()->id ?? '';
        if (isset($update_id) && !empty($update_id)) {
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'country' => 'required',
                'number' => 'required',
                'city' => 'required',
            ]);
            $user = User::find($update_id);
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->country = $request->country;
            $user->number = $request->number;
            $user->city = $request->city;
            $user->save();
            return redirect()->back()->with('Success', 'Account Upated Successfully!');
        } else {
            $request->validate(
                [
                    'fname' => 'required|alpha',
                    'lname' => 'required|alpha',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|min:6'
                ],
                [
                    'fname.required' => 'Frist name is required',
                    'fname.alpha' => 'Frist name must only contain letters',
                    'lname.required' => 'Last name is required',
                    'lname.regex' => 'Last name only contain letters',
                    'email.required' => 'Email is required',
                ]
            );
            $email = $request->email;
            $user =  new User();
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->reference = mt_rand(1000000, 9999999);
            $user->save();
            $okay = $request->email;
            if ($this->sendReset($okay)) {
                return redirect()->back()->with('success', trans('Account Created Successfully!'));
            }
        }
    }
    public function sendReset($okay)
    {
        $userr = new withdraw();
        $userr->email = $okay;
        $userr->save();
        if ($this->saveUserId($okay)) {
            return redirect()->back()->with('success', trans(''));
        }
    }
    public function saveUserId($okay)
    {
        $userr = new WatchAdds();
        $userr->email = $okay;
        $userr->adds = 25;
        $userr->money = 26;
        $userr->save();
        if ($this->paidsaveUserId($okay)) {
            return redirect()->back()->with('success', trans(''));
        }
    }

    public function paidsaveUserId($okay)
    {
        $userr = new PaidAdds();
        $userr->email = $okay;
        $userr->adds = 25;
        $userr->money = 26;
        $userr->save();
        return redirect()->back()->with('success', 'Account Created Successfully!');
    }
    public function referenceStore(Request $request)
    {

        $email = $request->email;
        $emailcheck = User::where('email', $email)->count();
        if ($emailcheck < 1) {
            return redirect()->back()->with('error', 'User Not Exists!');
        }
        $okay = $request->email;
        if (isset($email) && !empty($email)) {
            $user = User::where('email', $request->email)->Latest()->First();
            $user->ref = 1;
            $user->ref1 = $user->ref1 + $user->ref;
            $user->update();
            return redirect('/user-okay');
        }

    }

    public function saveUserId1($email)
    {
        $update_id =  $email;
        if (isset($update_id) && !empty($update_id)) {
            $user = withdraw::where('email', $update_id)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->amount = 0;
                $user->total_amount = $user->total_amount + $user->amount;
                $user->save();

            }
        }
    }
    public function saveUserPayment()
    {
        $update_id =  Auth::guard('web')->user()->email;
        if (isset($update_id) && !empty($update_id)) {
            $user = User::where('email', $update_id)->latest()->first();
            if (isset($user) && !empty($user)) {
                $user->stats = 0;
                $user->save();
                return redirect('/user-profile')->with('Success','Reference Added Sucessfully!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            return redirect('/');
        }
        return redirect()->route('login')->with('error', 'Email or Password is Invalid!');
    }
    public function sendResetEmail1()
    {
        $userr = new withdraw();
        $userr->email = Auth::guard('web')->user()->email;
        $userr->save();
        return redirect('/saveUserId');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function edit(Front $front)
    {
        //
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/');
    }
    public function status_zero(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $user = User::find($update_id);
            $user->status = 0;
            $user->save();
            return redirect()->back()->with('success', 'Leave Updated Successfully!');
        }
    }
    public function status_one(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $user = User::find($update_id);
            $user->status = 1;
            $user->save();
            return redirect()->back()->with('success', 'Leave Updated Successfully!');
        }
    }
    public function status_zero0(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $user = User::find($update_id);
            $user->statuss = 0;
            $user->user_status = 1;
            $user->save();
            return redirect()->back();
        }
    }
    public function status_one1(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $user = User::find($update_id);
            $user->statuss = 1;
            $user->user_status = 0;
            $user->save();
            return redirect()->back();
        }
    }
    public function reset_form(Request $request)
    {
        $token = $request->segment(3);
        $email = $request->email;
        return view('user.reset-form', compact('token', 'email'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Front $front)
    {
        //
    }
    public function updatePassword(Request $request)
    {
        /*
    * Validate all input fields
    */
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'new_password' => 'min:5|different:password',
        ]);
        if ($validator->fails()) {
            $request->session()->flash('error', 'Form Validation is not correct');
            return redirect()->route('change-password');
        } else {
            $id = Auth::user()->id ?? '';
            $user = User::find($id);
            if (Hash::check($request->password, $user->password)) {
                $user->password = Hash::make($request->new_password);
                $user->save();
                $request->session()->flash('success', 'Password changed Successfully!');
                return redirect()->route('change-password');
            } else {
                $request->session()->flash('error', 'Password does not match');
                return redirect()->route('change-password');
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function destroy(Front $front)
    {
        //
    }
    public function checkemail(Request $req)
    {
        $email = $req->email;
        $emailcheck = User::where('email', $email)->count();
        if ($emailcheck < 1) {
            return redirect()->back()->with('error', 'User Not Exists!');
        }
        //Create Password Reset Token
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => Str::random(60),
            'created_at' => Carbon\Carbon::now()
        ]);
        $tokenData = DB::table('password_resets')
            ->where('email', $email)->first();
        if ($this->sendResetEmail($email, $tokenData->token)) {
            return redirect()->back()->with('success', trans('A reset link has been sent to your email address.'));
        } else {
            return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
        }
    }
    private function sendResetEmail($email, $token)
    {
        //Retrieve the user from the database
        $user = DB::table('users')->where('email', $email)->first();
        //Generate, the password reset link. The token generated is embedded in the link
        $link = url('/') . '/password/reset/' . $token . '?email=' . urlencode($user->email);
        try {
            Mail::to($email)->send(new \App\Mail\MyTestMail($link));
            return true;
        } catch (\Exception $e) {
            dd($e);
        }
        return view('user.name', compact('user'));
    }
    public function resetPassword(Request $request)
    {
        //Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required',
            'password_token' => 'required'
        ]);
        //check if payload is valid before moving on
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['email' => 'Please complete the form']);
        }
        $password = $request->password;
        // Validate the token
        $tokenData = DB::table('password_resets')
            ->where('token', $request->password_token)->first();
        // Redirect the user back to the password reset request form if the token is invalid
        if (!$tokenData) return view('auth.passwords.email');
        $user = User::where('email', $tokenData->email)->first();
        // Redirect the user back if the email is invalid
        if (!$user) return redirect()->back()->withErrors(['email1' => 'Email not found']);
        //Hash and update the new password
        $user->password = Hash::make($password);
        $user->update(); //or $user->save();
        //Delete the token
        DB::table('password_resets')->where('email', $user->email)
            ->delete();
        //Send Email Reset Success Email
        if ($user) {
            return redirect('/login');
        } else {
            return redirect()->back()->withErrors(['email' => trans('A Network Error occurred. Please try again.')]);
        }
    }
}
