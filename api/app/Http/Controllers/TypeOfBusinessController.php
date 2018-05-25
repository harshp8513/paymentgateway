<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type_of_business;

class TypeOfBusinessController extends Controller
{
    public function getBusinessType(){
		return type_of_business::all('id','name');
	}
}
