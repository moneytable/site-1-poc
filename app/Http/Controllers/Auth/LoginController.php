<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function test(){
        $users = DB::table('test')->get();

        dd($users);
    }

    public function getUpload(){
        return view('upload');
    }

    public function postUpload(Request $request){
        $path =  $request->file('file')->store('testfile');
        $url = 'https://' . config('filesystems.disks.azure.name'). '.azureedge.net/' . config('filesystems.disks.azure.container') . '/' . $path;
        return $url;
    }
}
