<?php namespace App\Http\Controllers\Admin;

use App\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Validator;

class FormController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = "Demo";
        return view('admin.forms', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
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
                'inputNamhoc.required' => 'Vui L?ng Nh?p Năm H?c',
                'inputHocki.required' => 'Vui L?ng Nh?p H?c K?',
                'inputMamonhoc.required' => 'Vui L?ng Nh?p M? Môn H?c',
                'inputMonHoc.required' => 'Vui L?ng Nh?p Tên Môn H?c',
                'inputFile.required' => 'Vui L?ng Nh?p File',

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
