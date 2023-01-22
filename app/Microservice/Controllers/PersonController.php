<?php

namespace App\Microservice\Controllers;

use Illuminate\Http\Request;

class PersonController extends \App\Http\Controllers\Controller
{
    public function Create(Request $request): array
    {
        $username = $request->get('username', 'default');
        $password = $request->get('password', 'default');
    }
}
