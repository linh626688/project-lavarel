<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SearchCustomController extends Controller
{
    public function index()
    {

        return view('searchCustom');
    }
    public function result()
    {
        $namhoc = \Input::get('namhoc');
        $hocki = \Input::get('hocki');
        $mamonhoc = \Input::get('mamonhoc');
        $tenmonhoc = \Input::get('tenmonhoc');

        $students = Form::where(function ($query) use ($namhoc) {
            $query->where('year', 'like', "%" . $namhoc . "%")
                ->where('season', 'like', "%" . $hocki . "%")
                ->where('idclass', 'like', "%" . $mamonhoc . "%")
                ->where('subject', 'like', "%" . $tenmonhoc . "%");
        })->get();
        return view('resultCustom')->with([
            'custom' => $students,
        ]);
    }

}
