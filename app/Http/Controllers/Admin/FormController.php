<?php namespace App\Http\Controllers\Admin;

use App\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Validator;

class FormController extends Controller
{

    //
    public function index()
    {
        $title = "Demo";
        return view('admin.forms', compact('title'));
    }

    public function add(PostRequest $request)
    {
        $v = Validator::make($request->all(), [
            'inputNamhoc' => 'required',
            'inputHocki' => 'required',
            'inputMamonhoc' => 'required|unique:bangdiem,idclass',
            'inputMonHoc' => 'required',
            'inputFile' => 'required',
        ],
            [
                'inputNamhoc.required' => 'Vui Lòng Nhập Năm Học',
                'inputHocki.required' => 'Vui Lòng Nhập Học Kì',
                'inputMamonhoc.required' => 'Vui Lòng Nhập Mã Môn Học',
                'inputMonHoc.required' => 'Vui Lòng Nhập Tên Môn Học',
                'inputFile.required' => 'Vui Lòng Nhập File',

            ]
        );
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }

        $file = $request->file('inputFile');
        $des = 'public\upload\diem';
        $fileupload = $file->getClientOriginalName();

        $form = new Form;
        $form->year = $request->inputNamhoc;
        $form->season = $request->inputHocki;
        $form->idclass = $request->inputMamonhoc;
        $form->subject = $request->inputMonHoc;
        $form->file = $fileupload;
        $form->save();

        $file->move($des, $fileupload);

        return redirect('/admin');
    }
}
