<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Countries;
use App\States;

class LocationController extends Controller
{
    public function GetCountries(){
		return Countries::all();
	}
	
	public function GetStates(){
		return States::all();
	}
	
	public function GetStatesByID($CountryID){
		return States::where('CountryID', $CountryID)->get();
	}
}
