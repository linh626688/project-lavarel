<?php namespace App\Http\Controllers;

use App\Form;
use App\Http\Controllers\Controller;
use Input;

class SearchController extends Controller
{
    public function index()
    {

        return view('layout');
    }
    public function result()
    {
        $q = \Input::get('q');
        $students = Form::where(function ($query) use ($q) {
            $query->where('year', 'like', "%" . $q . "%")->orWhere('subject', 'like', "%" . $q . "%");
        })->get();
        return view('result')->with([
            'students' => $students,
        ]);
    }
    public function searchCustom()
    {
        return view('index.index');
    }

}
