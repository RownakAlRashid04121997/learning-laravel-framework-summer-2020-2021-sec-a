<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getList(){
		 $users= [
		 ['id'=>1, 'username'=>'abc', 'email'=>'abc@gmail.com'];
		 ['id'=>2, 'username'=>'def', 'email'=>'def@gmail.com'];
		 ['id'=>3, 'username'=>'ghi', 'email'=>'def@gmail.com'];
		 ['id'=>4, 'username'=>'jkl', 'email'=>'jkl@gmail.com'];
		 ]
	}
}
