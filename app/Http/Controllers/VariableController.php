<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Variable;
use App\Http\Requests\StoreVariableRequest;
use App\Http\Requests\UpdateVariableRequest;
class VariableController extends Controller
{
    public function index()
    {
        $variables = Variable::latest()->paginate(8);
        return view('variables.index',
            compact('variables'));
    }




    public function store(StoreVariableRequest $request)
    {
        $validated = $request->validated();
        $variable = new Variable();
        $variable->name=$request['name'];
        $variable->measure=$request['measure'];
        $variable -> save();
        return redirect()->route('variables.index');
    }
    public function show()
    {
        $variables = Variable::all();
        return view('variables.show', [
            'variables' => $variables
        ]);
    }

    public function edit(int $id)
    {
        $variable = Variable::find($id);
       return view ('variables.edit', compact('variable'));

    }
    public function create()
    {
        $variable=new Variable();
        return view('variables.create',compact('variable'));
    }
    public function update(UpdateVariableRequest $request, int $id)
    {
        $validated = $request->validated();
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

