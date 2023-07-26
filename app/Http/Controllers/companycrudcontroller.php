<?php

namespace App\Http\Controllers;
use App\Models\company;
use Illuminate\Http\Request;

class companycrudcontroller extends Controller
{
    //Create Index
    public function index(){
        $data['companies'] = company::orderBy('id','desc')->paginate(5);
        return view('companies.index',$data);
    }

    // Create resource
    public function create(){
        return view('companies.create');
    }
}
