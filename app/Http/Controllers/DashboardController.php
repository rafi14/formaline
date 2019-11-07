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
    
    public function awal()
    {
        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        $pertanyaan = Mypertanyaan::join('matkul', 'pertanyaan.id_matkul', '=', 'matkul.id')
        ->select('*', 'matkul.name as name_matkul','pertanyaan.id as id_pertanyaan')->paginate(4);
        $isSearch = 0;
        return view('dashboard',compact('tag','pertanyaan','isSearch'));
    }

    function post_index(Request $request)
    {
        


            $input_text = $request->text_search_tag;
            
            $pertanyaan = Mypertanyaan::where('judul', 'like', '%' . $input_text . '%')
            ->join('matkul', 'pertanyaan.id_matkul', '=', 'matkul.id')
            ->select('*', 'matkul.name as name_matkul','pertanyaan.id as id_pertanyaan')->paginate(4);
            $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
            $question = Mypertanyaan::where('judul', 'like', '%' . $input_text . '%')
                ->Orwhere('isi', 'like', '%' . $input_text . '%')
                ->Orwhere('tag', 'like', '%' . $input_text . '%')
                ->Orwhere('universitas', 'like', '%' . $input_text . '%')
                ->paginate(10);
            $matkul = Mymatkul::paginate(4);
            $isSearch = 1;
            return view('modul.home', compact('matkul', 'pertanyaan', 'question', 'tag', 'isSearch'));
     
    }

    function index_search_tag(Request $request)
    {

        $input_popular_tag = $request->text_search_tag;

       
        $question = Mypertanyaan::where('tag', 'like', '%' . $input_popular_tag . '%')->paginate(6);
        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        $pertanyaan = Mypertanyaan::where('judul', 'like', '%' . $input_popular_tag . '%')
        ->join('matkul', 'pertanyaan.id_matkul', '=', 'matkul.id')
        ->select('*', 'matkul.name as name_matkul','pertanyaan.id as id_pertanyaan')->paginate(4);
        $matkul = Mymatkul::paginate(4);
        $isSearch = 1;
        return view('modul.home', compact('matkul', 'pertanyaan', 'question', 'tag', 'isSearch'));
        // return redirect()->back()->with(compact('matkul', 'pertanyaan', 'question', 'tag','isSearch'));
    }

    function index_search_matkul(Request $request)
    {
        

        $input_popular_pertanyaan = $request->text_search_pertanyaan;
        Session::put("input_matkul", $input_popular_pertanyaan);
        $id = Auth::user()->id;

        $matkul = Mymatkul::where('name', 'like', '%' . $input_popular_pertanyaan . '%')->paginate(4);

        $question = Mypertanyaan::where('tag', 'like', '%' . $input_popular_pertanyaan . '%')->paginate(6);

        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        
        $pertanyaan = Mypertanyaan::where('name', 'like', '%' . $input_popular_pertanyaan . '%')->paginate(4);

        $isSearch = 1;
        return view('modul.test', compact('matkul', 'pertanyaan', 'question', 'tag', 'isSearch'));
    }

    function index_search_pertanyaan(Request $request)
    {
        

        $input_popular_pertanyaan = $request->text_search_pertanyaan;
        Session::put("input_matkul", $input_popular_pertanyaan);
       

        $matkul = Mymatkul::where('name', 'like', '%' . $input_popular_pertanyaan . '%')->paginate(4);
        $pertanyaan =  Mypertanyaan::where('judul', 'like', '%' . $input_popular_pertanyaan . '%')
        ->join('matkul', 'pertanyaan.id_matkul', '=', 'matkul.id')
        ->select('*', 'matkul.name as name_matkul','pertanyaan.id as id_pertanyaan')->paginate(4);
        

        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
       

        $isSearch = 1;
        return view('dashboard', compact('matkul', 'pertanyaan', 'tag', 'isSearch'));
    }

    function index_dashboard_set(Request $request, $id_pertanyaan)
    {
        
        $input_text = $id_pertanyaan;
            
        $get_judul = Mypertanyaan::where('id', '=', $input_text )->first();
        $pertanyaan = Mypertanyaan::where('judul', 'like', '%' . $get_judul->judul . '%')
        ->join('matkul', 'pertanyaan.id_matkul', '=', 'matkul.id')
        ->select('*', 'matkul.name as name_matkul','pertanyaan.id as id_pertanyaan')->paginate(4);
        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        $question = Mypertanyaan::where('judul', 'like', '%' . $get_judul->judul . '%')
            ->Orwhere('isi', 'like', '%' . $get_judul->judul . '%')
            ->Orwhere('tag', 'like', '%' . $get_judul->judul    . '%')
            ->paginate(10);
        $matkul = Mymatkul::where('id','=',$get_judul->id_matkul)->paginate(4);
        
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
