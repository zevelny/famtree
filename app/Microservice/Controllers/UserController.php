<?php

namespace App\Microservice\Controllers;

use App\Microservice\Exceptions\MicroserviceException;
use App\Microservice\Models\Person;
use App\Microservice\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class UserController extends \App\Http\Controllers\Controller
{

    public function Create(Request $request): array
    {
        $res = ['CREATED'=>false];
        $username = $request->get('username', 'default');
        $password = $request->get('password', 'default');
        $confirmPassword = $request->get('confirm_password', 'default');

        if($password==$confirmPassword)
            $res['CREATED'] = User::query()->insert(['username'=>$username, 'password'=>$password]);


        return $res;
    }

    public function Login(Request $request)
    {
        $username = $request->get('username', 'default');
        $password = $request->get('password', 'default');

        $user = User::query()->where('username', $username)->where('password', $password)->first();

        if(!empty($user))
            return redirect('/welcome?session_id='.urlencode(Crypt::encryptString($user->id)));

        $message = "Неправильный логин или пароль";

        return redirect('/?message='.urlencode($message));
    }
}
