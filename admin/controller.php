<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Helpers\Elastic;
use Illuminate\Http\Request;

use App\{{Name}}Model;
use Yajra\Datatables\Datatables;
use Maatwebsite\Excel\Facades\Excel;
class {{Name}}Controller extends Controller
{
    private $userInfo;

    public function __construct()
    {

        if(is_login())
        {
            $this->userInfo=is_login();
        }

    }
    public function export(Request $request)
    {

        return Excel::download(new {{Name}}Model(), '{{name}}.xlsx');
    }


    public function getIndex()
    {
        return view('datatables.index');
    }

    public function getData()
    {
        $data = {{Name}}Model::where("uid",$this->userInfo->userid);
        return Datatables::of($data)->make(true);
    }

    public function index()
    {

            $submit = 'Thêm mới';
            return view('admin.{{name}}.{{name}}_list');
    }

    public function create()
    {

            $submit = 'Thêm mới';
            return view('admin.{{name}}.{{name}}_add', compact('submit'));
    }



    public function store(Request $request)
    {


        try {
            $input = $request->all();
            {{Name}}Model::create($input);

          return    response()->json(['success' =>true, 'message' => 'Thêm dữ liệu thành công!','redirect' => url('admin/{{name}}')]);

        } catch (Exception $e) {

            $e->message='Lỗi không thể xóa dữ liệu';
            return  response()->json((array)$e);

        }

    }

    public function edit($id)
    {
       $row = {{Name}}Model::findOrFail($id);


       return view('admin.{{name}}.{{name}}_edit', compact('row'));
    }
    public function view($id)
    {
       $row = {{Name}}Model::findOrFail($id);


       return view('admin.{{name}}.{{name}}_view', compact('row'));
    }

    public function update(Request $request, $id)
    {
        try {

            $input = $request->all();
            $row = {{Name}}Model::findOrFail($id);
            $row->update($input);


          return  response()->json(['success' =>true,'message' =>'Cập nhật dữ liệu thành công', 'redirect' => url('admin/{{name}}')]);

        } catch (Exception $e) {


            $e->message='Lỗi không thể cập nhật dữ liệu';
            return  response()->json((array) $e);

        }

    }

    public function destroy($id)
    {
        try {
            $row = {{Name}}Model::findOrFail($id);
            $row->delete();

            return  response()->json(['success' =>true,'Xóa dữ liệu thành công', 'redirect' => url('admin/{{name}}')]);

        } catch (Exception $e) {

            $e->message='Lỗi không thể xóa dữ liệu';
            return    response()->json((array) $e);

        }


    }
}
