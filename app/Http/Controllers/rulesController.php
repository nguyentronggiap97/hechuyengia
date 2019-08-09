<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Rules;

class rulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = Rules::where('parent', '0')->get();
        $data2 = Rules::where('parent', '1')->get();
        // dd($data1);
        return view('index',[
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function addone(Request $request)
    {
        $rules = new Rules();
        $rules->title = $request->title;
        $rules->parent = 0;
        $rules->save();
        return Response("success",$rules->toArray());
    }
    
    public function addtwo(Request $request)
    {
        // dd($request->all());
        $rules = new Rules();
        $rules->title = $request->title;
        $rules->hypothesis =json_encode($request->arr);
        $rules->parent = 1;
        $rules->save();
        return Response::success('success',$rules);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
