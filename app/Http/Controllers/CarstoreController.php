<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductUpdateRequest;


class CarstoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $stock =DB::select('select * from stock where id = 2');

        // dd($stock);

        //return View("index");
        $store = DB::table("stock")->get();
        return view("carstores.index", ["data" => $store]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("carstores.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(["_token"]);
        if (DB::table("stock")->insert($data,)){
            return redirect("/carstores")->with("message","craeted");
        }
        
        $request->validate([
        'name' => 'required|unique:posts|min:5|max:50',
        'model' => 'required|unique:posts',
        'company' => 'required|unique:posts',
        'made' => 'required|unique:posts',
        'price' => 'required|unique:posts',
        'description' => 'required|unique:posts|max:255',
        'color' => 'bail|required|unique:posts|max:255'
        ]);
        

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = DB::table("stock")->find($id);
        return view("carstores.show",compact("store"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = DB::table("stock")->find($id);
        return view("carstores.edit",compact("store"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id,)
    {
         $data = $request->except(["_token","_method"]);
        if (DB::table("stock")->where("id",$id)->update($data)){
            return redirect("studentapp");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        if (DB::table("stock")->where("id",$id)->delete()){
            return redirect()->route("carstores.index");
            //return redirect("/authors");
        }
    }
    public function delete($id)
    {
        $store = DB::table("stock")->find($id);
        return view("carstores.delete",compact("store"));
    }
    
    
    
}
