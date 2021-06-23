<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
         $types = Type::all();
        return view('/types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Loadtypeall()
    {
        $types= Type::all();
        return view('types.all', compact('types'));
    }
    public function Showcreatetypeform()
    {   
        return view('types.create');
    }
    public function create()
    {   
        $type =new Type();
        $type ->id='1';
        $type ->TYPE_NAME='The Thao';
        $type ->save();


    }
    public function createalltype()
    {
        $type=[
        [
            'TYPE_NAME'=>"Thể thao",
        ],
        [
            'TYPE_NAME'=>"Âm nhạc",
        ],
        [
             'TYPE_NAME'=>"Sức khỏe",
        ],
        [
            'TYPE_NAME'=>"Giáo dục",
        ],
    ];
    Type::insert($type);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type();
        $type->TYPE_NAME = $request->title;
        $type->save();
        return redirect('types');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $type = Type::find($id);
        $type->save();
        return view("types.show", [
            'type' => $type,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $type = Type::find($id);
        return view("types.edit", [
            'type' => $type,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type =  Type::find($id);
        $type->TYPE_NAME = $request->title;
        $type->save();
        return redirect('/types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);

        $type->delete();
        return redirect('/types');
    }
}
