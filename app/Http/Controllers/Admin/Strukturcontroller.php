<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Struktur;
use Input;

class Strukturcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['struktur'] = Struktur::all();
        return view('admin.struktur.struktur_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.struktur.struktur_create');
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
        $file=$request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);
        
        $data = $request-> all();
        $data['image']= $filename;

        Struktur::create($data);
        return redirect()->route('struktur1.index')->with('success', "<strong>Struktur</strong> telah berhasil ditambahkan.");
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
        $data['struktur'] = Struktur::find($id);
        return view('admin.struktur.struktur_delete',$data);
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
        $data['struktur'] = Struktur::find($id);
        return view('admin.struktur.struktur_edit', $data);
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
        $file=$request->file('image');
        $filename = $file->getClientOriginalName();

        $file->move(public_path().'/uploads/',$filename);
        $data = $request-> all();
        $data['image']= $filename;

        $struktur = Struktur::find($id);

        $struktur -> update($data);
        return redirect()->route('struktur1.index')->with('success', "<strong>Struktur</strong> berhasil diperbaharui.");
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
            $struktur = Struktur::find($id);
            $struktur->delete();

            return redirect()->route('struktur1.index')->with('success', "<strong>Struktur</strong> berhasil dihapus.");    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
