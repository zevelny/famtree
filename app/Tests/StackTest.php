<?php

use App\Http\Controllers\PersonController;
use App\Microservice\Controllers\UserController;
use App\Microservice\Models\Person;
use App\Microservice\Models\Tree;
use App\Microservice\Models\User;
use App\Microservice\Models\Model;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;
use App\Http\Controllers\TreeController;

class StackTest extends TestCase
{
    public function testCreateUserModel()
    {
        $model = new User();
        $this->assertNotEmpty($model);
    }

    public function testCreatePersonModel()
    {
        $model = new Person();
        $this->assertNotEmpty($model);
    }

    public function testCreateTreeModel()
    {
        $model = new Tree();
        $this->assertNotEmpty($model);
    }

    public function testCreateUserController()
    {
        $controller = new UserController();
        $this->assertNotEmpty($controller);
    }

    public function testCreatePersonController()
    {
        $controller = new PersonController();
        $this->assertNotEmpty($controller);
    }

    public function testCreateTreeController()
    {
        $controller = new TreeController();
        $this->assertNotEmpty($controller);
    }

    public function testCreateUserInController()
    {
        $controller = new UserController();
        $request = new Request();
        $parameters = ['username'=>'testuser', 'password'=>'pswd123456', 'confirm_password'=>'pswd123456'];

        $res = $controller->Create($request->create('default','POST', $parameters));
        var_dump($res);
        $this->assertTrue($res['CREATED']);
    }

    public function testLoginInController()
    {
        $controller = new PersonController();
        $request = new Request();
        $parameters = ['username'=>'testuser', 'password'=>'pswd123456'];

        $res = $controller->Create($request->create('default','POST', $parameters));
        var_dump($res);
        $this->assertTrue($res['CREATED']);
    }

    public function testCreateDataModel()
    {
        $model = new Model();
        $this->assertNotEmpty($model);
    }

    public function testGetPersonDataFromDB()
    {
        $data = Person::query()->get();
        $this->assertNotEmpty($data);
    }


    public function testSetPersonDataFromDB()
    {
        $username = 'tester';
        $password= 'testpwd1234';
        $data = Person::query()->insert(['username'=>$username, 'password'=>$password]);

        $this->assertTrue($data);
    }
}
