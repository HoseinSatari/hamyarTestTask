<?php

namespace App\Http\Controllers\Auth;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // this method is only for login and not really
      $validData =  $this->validate($request, [
            'phone' => ['required']
        ]);


        $user = User::where('phone' , $validData['phone'])->first();

        $statusRegister = false;
        if (!$user) {
            $user = User::create([
                'phone' => $validData['phone']
            ]);

            $statusRegister = true;
        }

        $user->updateLastLogin()->updateIp();
//        $accessToken = $user->createToken('app')->plainTextToken;


        Auth::loginUsingId($user->id);


       return redirect('/');
    }
}
