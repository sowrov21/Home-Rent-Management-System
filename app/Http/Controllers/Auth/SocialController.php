<?php
namespace App\Http\Controllers\Auth;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        //dd('aschi');
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {
            $userSocial = Socialite::driver('facebook')->stateless()->user();

           //dd($userSocial->name);
            $user = User::where(['email' => $userSocial->getEmail()])->first();
           // dd($user);
            if($user){
                //old user
                //dd('aschi');
                Auth::login($user);
                $msg='Login Success';
                Toastr::success($msg, 'Facebook Auth. success.!',["progressBar"=> true,"positionClass"=>"toast-top-right"]);
                return redirect('/dashboard')->with('msg',$msg);
            }else{
                //new user
                //dd('aschi new user');
                $createUser = User::create([
                    'name' => $userSocial->name,
                    'email' => $userSocial->email,
                    'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                $msg='Login Success';
                Toastr::success($msg, 'Facebook Aut. success.!',["progressBar"=> true,"positionClass"=>"toast-top-right"]);
                return redirect('/dashboard')->with('msg',$msg);
            }
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }
    }

}
