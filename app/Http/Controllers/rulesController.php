<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
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

    
    public function addone(Request $request)
    {
        $rules = new Rules();
        $rules->title = $request->title;
        $rules->parent = 0;
        $rules->save();
        return Response::success('success',$rules);
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


    public function getone(Request $request)
    {
        return Response::success('success', Rules::where('id', $request->id)->get());
    }


    public function editone(Request $request)
    {
        $data = Rules::where('id', $request->id)->first();
        $data->title = $request->title;
        $data->save();
        return Response::success('success', $data);
    }

    
    public function gettwo(Request $request)
    {
        // dd($request->all());
        $data = Rules::where('id', $request->id)->first();
        $data = $data->toArray();
        $data['hypothesis'] = json_decode($data['hypothesis']);
        return Response::success('success',$data);
    }


    public function edittwo(Request $request)
    {
        // dd($request->all());
        $data = Rules::where('id', $request->id)->first();
        $data->title = $request->title;
        $data->hypothesis =json_encode($request->arr);
        $data->save();gh
        return Response::success('Chỉnh sửa thành công', $data);
    }

    
    public function remove(Request $request)
    {
        $rules = Rules::find($request->id)->get();
        $check = Rules::where('hypothesis', 'like', '%"'.$request->id.'"%')->first()->toArray();
        
        if(!empty($check)){
            return Response::response(100,'Không thể xóa được do triệu chứng hoặc luật vẫn đang được sử dụng để suy diễn.');
        }
        return Response::success('Xóa thành công');
    }


    static public function checkArrayChild($arrChild, $arrParent)
    {
        return count(array_intersect($arrChild, $arrParent)) == count($arrChild);
    }
    

    public function process(Request $request)
    {
        $qeury1 = Rules::where('parent', '0')->get()->toArray();
        $query2 = Rules::where('parent', '1')->get()->toArray();
        $_r = [];
        $_t1 = $_t = $request->arr;
        $check = true;

        foreach ($query2 as $key => $value) {
            $_r[$value['id']] = json_decode($value['hypothesis']);
        }

        while($check == true){
            $check = false;
            foreach ($_r as $key => $value) {
                if(self::checkArrayChild($value, $_t) == true){    
                    unset($_r[$key]); 
                    $_t[] = $key; 
                    $check = true;
                }
            }
        }

        $res2 = Rules::whereIn('id', $request->arr)->get()->toArray();
        $res1 = Rules::whereIn('id', $_t)->where('parent', '1')->get()->toArray();
        foreach ($res1 as $key => $value) {
            if(in_array($value['id'], $_t1)){
                unset($res1[$key]);
            }
        }
        $res = [$res1, $res2];
        
        if(empty($res1)){
            return Response::success('Không chuẩn đoán được bệnh của bạn, mau đi đến phòng khám bác sĩ Giáp để tìm hiểu thêm về bệnh tình của bạn.', $res);
        }

        return Response::success('Bạn đã bị bệnh, mau đi đến phòng khám bác sĩ Giáp để tư vấn thêm về bệnh tình.',$res);
    }


}
