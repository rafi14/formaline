<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Mymatkul;
use App\Mypertanyaan;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Collection;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index($id)
    {
        if (Auth::check() === true) {
            $id_user = Auth::user()->id;
        } else {
            return redirect()->route('login.index');
        }
        

        $question = Mypertanyaan::where('pertanyaan.id_user', $id_user)
            ->join('matkul', 'pertanyaan.id_matkul', '=', 'matkul.id')
            ->select('*', 'matkul.name as name_matkul')
            ->get();
        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        $pertanyaan = Mypertanyaan::where('pertanyaan.id', $id)
            ->join('matkul', 'pertanyaan.id_matkul', '=', 'matkul.id')
            ->select('*', 'matkul.name as name_matkul')
            ->get();



        $matkul = Mymatkul::paginate(4);
        $isSearch = 0;

        return view('modul.test', compact('matkul', 'pertanyaan', 'question', 'tag', 'isSearch'));
    }

    function index_search_tag(Request $request)
    {

        $input_popular_tag = $request->text_search_tag;



        $id = Auth::user()->id;
        $question = Mypertanyaan::where('tag', 'like', '%' . $input_popular_tag . '%')->paginate(6);
        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        $pertanyaan = Mypertanyaan::where('id_user', $id)->paginate(1);
        $matkul = Mymatkul::paginate(4);
        $isSearch = 1;
        return view('modul.home', compact('matkul', 'pertanyaan', 'question', 'tag', 'isSearch'));
        //  return redirect()->back()->with(compact('matkul', 'pertanyaan', 'question', 'tag','isSearch'));
    }

    function index_search_matkul(Request $request)
    {
        $input_popular_matkul = $request->text_search_matkul;
        Session::put("input_matkul", $input_popular_matkul);
        $id = Auth::user()->id;

        $matkul = Mymatkul::where('name', 'like', '%' . $input_popular_matkul . '%')->paginate(4);

        $question = Mypertanyaan::where('tag', 'like', '%' . $input_popular_matkul . '%')->paginate(6);

        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        $pertanyaan = Mypertanyaan::where('id_user', $id)->paginate(1);

        $isSearch = 1;
        return view('modul.home', compact('matkul', 'pertanyaan', 'question', 'tag', 'isSearch'));
    }

    function index_set_matkul(Request $request)
    {

        $input_popular_matkul = $request->text_search_matkul;
        $input_index_matkul = $request->index_matkul;
        $id = Auth::user()->id;
        $matkul = Mymatkul::where('name', 'like', '%' . $input_popular_matkul . '%')->paginate(4);
        $question = Mypertanyaan::where('id_matkul', '=', $input_index_matkul)->paginate(6);
        $tag = Mypertanyaan::orderBy('created_at', 'desc')->limit(3)->get();
        $pertanyaan = Mypertanyaan::where('id_user', $id)->paginate(1);

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
