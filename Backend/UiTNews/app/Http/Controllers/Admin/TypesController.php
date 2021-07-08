<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Str;

class TypesController extends Controller
{
    public function Home()
    {
        return redirect()->route('types.index');
    }
    public function index()
    {
        $type = Type::all();
        //  dd($types);
        return view('admin.type.list', compact('type'));
    }

    public function store(Request $request) 
    {
        $types = $request->all();
        $types['slug'] =  Str::slug($request->TYPE_NAME);
        Type::create($types);
        return $this->Home();
    }

    public function edit($id)
    {
        $type = Type::find($id);
        return view('admin.type.edit', compact('type'));
    }
                                                                                                                                                                    
    public function update(Request $request, $id)
    {
        $types = $request->all();
        $types['slug'] =  Str::slug($request->TYPE_NAME);
        Type::find($id)->update($types);
        return $this->Home();
    }

    public function destroy($id)
    {
        Type::findOrFail($id)->delete();
        return $this->Home();
    }
}
