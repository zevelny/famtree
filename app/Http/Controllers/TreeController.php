<?php

namespace App\Http\Controllers;

use App\Microservice\Exceptions\MicroserviceException;
use App\Microservice\Models\Person;
use App\Microservice\Models\Tree;
use App\Microservice\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class TreeController extends \App\Http\Controllers\Controller
{
    public function Index(Request $request)
    {
        $parameters = ['treeId'=>1, 'userId' => $request['userId'], 'people'=>[]];

        $people = Person::query()->where('user_id', $request['user_id'])->get();
        $trees = $people->unique('tree_id');
        $family = Person::query()->where('tree_id', $parameters['treeId'])->get();

        $parameters['people'] = $family;



        return view('new_tree', $parameters);
    }

    public function Create(Request $request)
    {
        $treeId = $request->get('tree_id', 'default');
        $userId = $request->get('user_id', 'default');
        $name = $request->get('name', 'default');
        $mother = $request->get('mother', 'default');
        $father = $request->get('father', 'default');
        $birth = $request->get('birth', 'default');
        $death = $request->get('death', 'default');
        $biography = $request->get('biography', 'default');

        if($mother=='-')
            $mother=null;

        if($father== '-')
            $father = null;

        Person::query()->insert
        (
            [
                'tree_id'=>$treeId,
                'user_id'=>$userId,
                'mother_id'=>$mother,
                'father_id'=>$father,
                'name'=>$name,
                'birth_date'=>$birth,
                'death_date'=>$death,
                'biography'=>$biography
            ]
        );

        $people = Person::query()->where('tree_id', $treeId)->get();
        $parameters = ['treeId'=>$treeId, 'userId' => $userId, 'people'=>$people];


        return redirect('/new_tree?'.http_build_query($parameters));
    }
}
