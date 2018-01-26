<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hubungi;
use Input;

class Hubungicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['hubungi'] = Hubungi::all();
        return view('admin.hubungi.hubungi_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.hubungi.hubungi_create');
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
        $data = $request->all();
        Hubungi::create($data);
        return redirect()->route('hubungi1.index')->with('success', "<strong>Hubungi</strong> telah berhasil ditambahkan.");
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
        $data['hubungi'] = Hubungi::find($id);
        return view('admin.hubungi.hubungi_delete',$data);
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
        $data['hubungi'] = Hubungi::find($id);
        return view('admin.hubungi.hubungi_edit', $data);
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
        $data = $request->all();
        $hubungi = Hubungi::find($id);
        $hubungi -> update($data);
        return redirect()->route('hubungi1.index')->with('success', "<strong>Hubungi</strong> berhasil diperbaharui.");
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
        try{
            $hubungi = Hubungi::find($id);
            $hubungi->delete();

            return redirect()->route('hubungi1.index')->with('success', "<strong>Hubungi</strong> berhasil dihapus.");    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
