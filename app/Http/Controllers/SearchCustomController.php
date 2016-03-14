<?php namespace App\Http\Controllers;

use App\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;

class SearchCustomController extends Controller
{
    public function index()
    {
        return view('searchCustom');
    }
    public function result(Request $request)
    {
        //dd($request->all());
        $namhoc = \Input::get('namhoc');
        $hocki = \Input::get('hocki');
        $mamonhoc = \Input::get('mamonhoc');
        $tenmonhoc = \Input::get('tenmonhoc');

        $students = Form::where('year', 'like', "%" . $namhoc . "%")
            ->where('season', 'like', "%" . $hocki . "%")
            ->where('idclass', 'like', "%" . $mamonhoc . "%")
            ->where('subject', 'like', "%" . $tenmonhoc . "%")->get();

        return view('resultCustom')->with([
            'custom' => $students,
        ]);
    }

}
