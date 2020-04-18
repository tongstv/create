<?php

namespace {{Name}}\{{Package}};

use App\Http\Controllers\Controller;
use  Illuminate\Http\Request;
use {{Name}}\{{Package}}\{{Package}}Model;
use Yajra\Datatables\Datatables;
class {{Package}}Controller extends Controller
{
    public function getIndex()
    {
        return view('datatables.index');
    }
    public function getData()
    {
        return Datatables::of({{Package}}Model::query())->make(true);
    }
    public function index()
    {
        $rows = {{Package}}Model::all();
        $submit = 'Add';
        return view('{{package}}::{{package}}_list', compact('rows', 'submit'));
    }

    public function create()
    {
        $rows = {{Package}}Model::all();
        $submit = 'Add';
        return view('{{package}}::{{package}}_list', compact('rows', 'submit'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        {{Package}}Model::create($input);
        return redirect('/{{package}}/create');
    }

    public function edit($id)
    {
        $rows = {{Package}}Model::all();
        $row = $rows->find($id);
        $submit = 'Update';
        return view('{{package}}::{{package}}_list', compact('rows', 'row', 'submit'));
    }

    public function view($id)
    {
          $rows = {{Package}}Model::all();
        $row = $rows->find($id);
        $submit = 'Update';
        return view('{{package}}::{{package}}_list', compact( 'row', 'submit'));
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $row = {{Package}}Model::findOrFail($id);
        $row->update($input);
        return redirect('/{{package}}/create');
    }

    public function destroy($id)
    {
        $row = {{Package}}Model::findOrFail($id);
        $row->delete();
        return redirect('/{{package}}/create');
    }
}
