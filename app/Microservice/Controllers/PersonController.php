<?php

namespace App\Microservice\Controllers;

use App\Microservice\Exceptions\MicroserviceException;
use App\Microservice\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonController extends \App\Http\Controllers\Controller
{


    public function Create(Request $request): array
    {
        $res = ['CREATED'=>false];
        $username = $request->get('username', 'default');
        $password = $request->get('password', 'default');
        $confirmPassword = $request->get('confirm_password', 'default');

        if($password==$confirmPassword)
        {
            $res['CREATED'] = Person::query()->insert(['username'=>$username, 'password'=>$password]);
        }

        return $res;
    }
}
