<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    public function indxe() {
        $data['companies'] = Company::orderBy('id','dese')->paginate (5);
        return view('companise.index', $data);
    }
    public function create() {
        return view('companies.create');
    }
}
