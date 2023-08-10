<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Variable;
class VariableController extends Controller
{
    public function index()
    {
        $variables = Variable::all();
        return view('variables.index', [
            'variables' => $variables
        ]);
    }


    public function create()
    {
        return view('variables.create');
    }


    public function store(Request $request)
    {
        $request -> name;
        $variable = new Variable();
        $variable->name=$request['name'];
        $variable->measure=$request['measure'];
        $variable -> save();
        return redirect()->route('variables.index');
    }


    public function show(int $id)
    {

    }


    public function edit(int $id)
    {
        $variable = Variable::find($id);

       return view ('variables.edit', compact('variable'));

    }

    public function update(Request $request, int $id)
    {

        $variable = Variable::find($id);
        $variable -> name = $request -> name;
        $variable -> measure = $request -> measure;


        $variable->save();
        return redirect()->route('variables.index');
    }

    public function destroy(int $id)
    {

        $variable = Variable::find($id);
        $variable -> delete();
        return redirect() -> route('variables.index');
    }
}

