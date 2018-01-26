<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Input;

class Galericontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['galeri'] = Galeri::all();
        return view('admin.galeri.galeri_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.galeri.galeri_create');
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
        $file->move(public_path().'/uploads/galeri/',$filename);
        
        $data = $request-> all();
        $data['image']= $filename;
        // return $data;
        Galeri::create($data);
        return redirect()->route('galeri1.index')->with('success', "<strong>Galeri</strong> telah berhasil ditambahkan.");
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
        $data['galeri'] = Galeri::find($id);
        return view('admin.galeri.galeri_delete',$data);
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
        $data['galeri'] = Galeri::find($id);
        return view('admin.galeri.galeri_edit', $data);
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
        $filename=$file->getClientOriginalName();

        $file->move(public_path().'/uploads/galeri/',$filename);
        $data = $request-> all();
        $data['image']= $filename;

        $galeri = Galeri::find($id);

        $galeri -> update($data);
        return redirect()->route('galeri1.index')->with('success', "<strong>Galeri</strong> berhasil diperbaharui.");
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
            $galeri = Galeri::find($id);
            // return $product;
            $galeri->delete();

            return redirect()->route('galeri1.index')->with('success', "<strong>Galeri</strong> berhasil dihapus.");    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
