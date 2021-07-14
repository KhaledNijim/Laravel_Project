<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'in index';
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
         // مثال 
       // return view(view: 'welcome2')->with ('VarebleName', 'البيانات التي تريد إرسالها إما من قاعدة البيانات أم تريد إدخالها');

       $data=[];
       $data['name']="KhaledNijim";
       $data['id']="25";
       return view(view: 'welcome2')-> with ('$data');

      /* @obj = new \stdClass();

@obj ->name ='KhaledNijim';
@obj ->id ='411053325';
@obj ->gender ='male';
return view(view: 'welcome', compact (varname: 'obj'));*/


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
}
