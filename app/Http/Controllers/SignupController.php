<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Sentinel;
use App\User;
use App\Http\Requests\UserRequest;

class SignupController extends Controller
{
    public function signup(){
    	return view('sessions.signup');
    }

    public function signup_store(UserRequest $request){
    	
        $tanggal = $request->birth;
        $thn = explode("-", $tanggal);
        $today = date('Y') - $thn[0];
        /*dd($today);*/

        if($today < 17){
            Session::flash('error', 'Birth must be more than 17');
            return redirect()->back();    
        }else{
            $userrole = Sentinel::findRoleByName('User');
            $storeuser = Sentinel::registerAndActivate($request->all());
            $storeuser->roles()->attach($userrole);
            Session::flash('notice', 'Success create new user');
            return redirect('login');    
        }

        
    }
}
