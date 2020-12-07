<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbclassController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select*from people');
        return view('db',['items'=>$items]);
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param=[
            'id'=>$request->id,
            'name'=>$request->name,
            'age'=>$request->age,
        ];
        DB::insert('insert into people(id,name,age)values(:id,:name,:age)',$param);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $param=['id'=>$request->id];
        $item=DB::select('select*from people where id=:id',$param);
        return view('edit',['form'=>$item[0]]);
    }
    public function update(Request $request)
    {
        $param=[
            'id'=>$request->id,
            'name'=>$request->name,
            'age'=>$request->age,
        ];
        DB::update('update people set name =:name,age =:age where id=:id',$param);
        return redirect('/');
    }
}
