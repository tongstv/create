<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;

use App\Helpers\Elastic;
use Illuminate\Http\Request;

use App\{{Name}}Model;
use Yajra\Datatables\Datatables;
class {{Name}}Controller extends Controller
{

    public function getIndex()
{
    return view('datatables.index');
}
    public function getData()
{
    return Datatables::of({{Name}}Model::query())->make(true);
}
    public function index()
{
    $rows = {{Name}}Model::all();
        $submit = 'Thêm mới';
        return view('{{name}}.list', compact('rows'));
}

    public function create()
{

        $submit = 'Thêm mới';
        return view('{{name}}.add', compact('submit'));
    }

    public
    function store(Request $request)
{


    try {
        $input = $request->all();
        {{Name}}Model::create($input);

          response()->json(['success' =>true, 'redirect' => '/{{name}}/create']);

    } catch (Exception $e) {

        $e->message='Lỗi không thể xóa dữ liệu';
        response()->json($e);

    }

    return redirect('/{{name}}/create');
}

    public function edit($id)
{
    $row = {{Name}}Model::findOrFail($id);


       return view('{{name}}.edit', compact('row'));
    }

    public function update(Request $request,$id)
{
    try {

        $input = $request->all();
        $row = {{Name}}Model::findOrFail($id);
        $row->update($input);


      return  response()->json(['success' =>true, 'redirect' => '/{{name}}/create']);

    } catch (Exception $e) {


        $e->message='Lỗi không thể cập nhật dữ liệu';
        return  response()->json($e);

    }

    }

    public function destroy($id)
{
    try {
        $row = {{Name}}Model::findOrFail($id);
        $row->delete();

        return  response()->json(['success' =>true, 'redirect' => '/{{name}}/create']);

    } catch (Exception $e) {

        $e->message='Lỗi không thể xóa dữ liệu';
        return    response()->json($e);

    }


    }
}
