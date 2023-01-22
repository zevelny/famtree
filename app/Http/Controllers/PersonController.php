<?php

namespace App\Http\Controllers;

use App\Microservice\Exceptions\MicroserviceException;
use App\Microservice\Models\Person;
use App\Microservice\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;


class PersonController extends \App\Http\Controllers\Controller
{
    public function Workspace(Request $request)
    {
        $userId = Crypt::decryptString($request->get('session_id', ""));



        return view('workspace');

    }

    public function Create(Request $request)
    {

    }
}
