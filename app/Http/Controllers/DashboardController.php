<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Mymatkul;
use App\Mypertanyaan;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    function post_index(Request $request)
    {
        


            $input_text = $request->text_search_tag;
            
            $pertanyaan = Mypertanyaan::where('tag', 'like', '%' . $input_text . '%')->paginate(6);
            $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
            $question = Mypertanyaan::where('judul', 'like', '%' . $input_text . '%')
                ->Orwhere('isi', 'like', '%' . $input_text . '%')
                ->Orwhere('tag', 'like', '%' . $input_text . '%')
                ->paginate(10);
            $matkul = Mymatkul::paginate(4);
            $isSearch = 1;
            return view('modul.home', compact('matkul', 'pertanyaan', 'question', 'tag', 'isSearch'));
     
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
}
