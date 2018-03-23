<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $addresses = Address::orderby('name')->get();



        return view('address.create',compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $addresses = Address::orderby('name')->get();

     return view('address.create',compact('addresses'));

 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // die();
        //Validating title and body field
        $this->validate($request, [
            'name'=>'required|max:100',
            'city'=>'required|max:100',
            'area'=>'required|max:100',
            ]);

        // die($request);
//         var_dump( $request->all()); 
// die();
        Address::create($request->all());
        // $post = Post::create($request->only('title', 'body'));

    //Display a successful message upon save
        return redirect()->route('address.index')
        ->with('flash_message', 'New Address,
           '. $request->name.' created');
        // return redirect('address/index');
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

        $address = Address::findOrFail($id);
        $address->delete();

        return redirect()->route('address.index')->with('flash_message','Address succesfully deleted!');
    }
}
