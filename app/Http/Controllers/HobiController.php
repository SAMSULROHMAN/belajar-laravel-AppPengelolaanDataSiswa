<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobi;
use App\Http\Requests\HobiRequest;
use Illuminate\Support\Facades\Session;

class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi_list = Hobi::all();
        return view('hobi.index',compact('hobi_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HobiRequest $request)
    {
        Hobi::create($request->all());
        Session::flash('flash_message','Data hobi berhasil disimpan.');
        return redirect('hobi');
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
    public function edit(Hobi $hobi)
    {
        return view('hobi.edit',compact('hobi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HobiRequest $request, Hobi $hobi)
    {
        $hobi->update($request->all());
        Session::flash('flash_message','Data berhasil diupdate');
        return redirect('hobi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hobi $hobi)
    {
        $hobi->delete();
        Session::flash('flash_message','Data hobi berhasil dihapus');
        Session::flash('penting',true);
        return redirect('hobi');
    }
}
