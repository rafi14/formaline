@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <!-- Mata Kuliah -->
        <div class="col">
            <div class="row">
                <h5>
                    <img src="asset/img/icon/college-graduation.svg" aria-hidden="true" height="50" width="50">
                    Mata Kuliah
                </h5>
                <div>
                    <form method="post" action="{{ route ('search_by_matkul') }}" class="search-wrap">
                        @csrf
                        <div class="input-group w-100">
                            <input name="text_search_matkul" type="text" class="form-control" style="width:40%;" placeholder="Cari dasdsadas Pertanyaan by Mata Kuliah">

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <hr>
                <h6>
                    <ul type="square">
                        @foreach($matkul as $matkulku)
                        <li style="margin:10px 0;">
                            <a href="{{ route('search_by_matkul_set_question') }}?text_search_matkul={{ Session::get('input_matkul')}}&index_matkul={{$matkulku->id}}" style="font-size:larger;">{{$matkulku->name}}</a>
                        </li>
                        @endforeach


                    </ul>
                    <div class="mt-3">
                        <a href="{{route('matkul.index')}}">Kelola Mata Kuliah (Admin)</a>
                    </div>
                    <div class="mt-3">
                        {{$matkul->links()}}
                    </div>
                </h6>
            </div>
            <div class="row mt-5">
                <h5>
                    <img src="asset/img/icon/hastag.svg" aria-hidden="true" height="50" width="50">
                    Tag Popular
                </h5>
                <div>
                    <form action="{{ route('search_by_tag_question') }}" method="post" class="search-wrap">
                        @csrf
                        <div class="input-group w-100">
                            <input name="text_search_tag" type="text" class="form-control" style="width:40%;" placeholder="Cari Tag">

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <hr>
                {{-- <br> --}}
                <div class="row mt-2">
                    <div class="col-md-12">
                        @foreach($tag as $tags)
                        <a href="{{ route('search_by_tag_get_question')}}?text_search_tag={{$tags->tag}}"><span class="btn btn-primary btn-sm" style="margin:2px 0;">{{$tags->tag}}</span></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Kumpulan Pertanyaan di Mata Kuliah -->
        <div class="col-6">
            <!-- Judul -->
            <div class="row">
                <div class="col-8">
                
                    @if ($question->count() && $isSearch == true )
                    
                    <h3>
                        <img src="asset/img/icon/hastag.svg" aria-hidden="true" height="50" width="50">

                        Browse Tag : {{$question[0]->tag}}

                    </h3>
                    @endif
                </div>
                <div class="col-4">
                    <div class="dropdown" style="text-align:right;">
                        <h6 style="font-weight:normal;">Urutkan Dari :</h6>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Jumlah Dilihat</option>
                            <option>Paling Baru</option>
                            <option>Jumlah Jawaban</option>
                        </select>
                    </div>
                </div>
            </div>


            <hr>
            <!-- End Judul -->

            <!-- Post1 -->
        
            <div class="col-6">
            <!-- Judul -->
                <div class="row">
                    <div class="col align-items-center" style="text-align:center;">
                        <h1>27</h1>
                        <h4 style="font-weight:normal;">Dilihat</h4>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h4>
                                {{$pertanyaan[0]->judul}}
                            </h4>
                        </div>
                        <div class="row">
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">DVWA</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Linux</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">SKK</a>&nbsp;
                        </div>
                    </div>
                    <div class="col">
                        <div class="rowalign-items-start" style="text-align:right;">
                            <sup>Rabu, 03 Juli 2019</sup>
                        </div>
                        <div class="rowalign-items-end" style="text-align:right;">
                            Ditanyakan Oleh : <br>
                            <a href="">Dheo Prasetyo</a>
                        </div>
                    </div>
                </div>
                    
                <hr>
            <!-- End Judul -->

            <!-- Isi -->
                <div class="row">
                    <div class="col">
                        <p style="text-align:justify;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Mollitia id sed possimus? Maxime ea dicta fugiat, aperiam illum voluptatum,
                            totam commodi repellendus ducimus ipsam explicabo corrupti eos eaque? Minima,
                            quaerat?
                        </p>
                        <img src="asset/img/pictures/setup-page.png" aria-hidden="true" style="display: block;margin-left: auto;margin-right: auto;width: 100%;height: auto;">

                    <p style="text-align:justify;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Mollitia id sed possimus? Maxime ea dicta fugiat.
                    </p>
                    </div>
                </div>
                
                <hr>
            <!-- End Isi -->

            <!-- Sorting -->
            <div class="row">
                <div class="col-3 justify-content-start" style="text-align:center;">                
                    <h1>27</h1>
                    <h4 style="font-weight:normal;">Dilihat</h4>
                </div>
                <div class="col">
                    <div class="dropdown" style="text-align:right;">
                        <h6 style="font-weight:normal;">Urutkan Dari :</h6>
                        <select class="form-control col-5" style="float:right;" id="exampleFormControlSelect1">
                            <option selected>Jumlah Disukai</option>
                            <option>Jumlah Balasan</option>
                            <option>Paling Baru</option>
                        </select>
                    </div>
                </div>
            </div>
                
                <hr>
            <!-- End Sorting -->
            
            <!-- Jawaban1 -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p style="color:#25AE88;"><img src="asset/img/icon/success.svg" width="20">
                                    Jabawan Terbaik Oleh Penanya
                                </p>
                            </div>
                            <div class="col">
                                <p style="text-align:right;"><sup>Kamis, 04 Juli 2019<br>Pukul 00:16 WIB</sup></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="text-align:justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non architecto, dolorem doloribus rem esse minima eius saepe nisi repellendus iure dignissimos temporibus delectus at amet. Consectetur reiciendis odio rerum quam!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    <img src="asset/img/icon/heart-invert-01.svg" width="40">
                                    2 Suka&nbsp;
                                    <img src="asset/img/icon/add-comment-button-blue-01.svg" width="20">
                                    0 Balasan
                                </p>
                            </div>
                            <div class="col justify-content-end">
                                <p style="text-align:right;">
                                    Penjawab :<br>
                                    <a href="">Rafif Favian</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Jawaban1 -->


            <!-- Jawaban2 -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                
                            </div>
                            <div class="col">
                                <p style="text-align:right;"><sup>Jumat, 05 Juli 2019<br>Pukul 10:06 WIB</sup></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="text-align:justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non architecto, dolorem doloribus rem esse minima eius saepe nisi repellendus iure dignissimos temporibus delectus at amet. Consectetur reiciendis odio rerum quam!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                    <p>
                                        <img src="asset/img/icon/heart-invert-01.svg" width="40">
                                        0 Suka&nbsp;
                                        <img src="asset/img/icon/add-comment-button-blue-01.svg" width="20">
                                        0 Balasan
                                    </p>
                            </div>
                            <div class="col">
                                <p style="text-align:right;">
                                    Penjawab :<br>
                                    <a href="">Muhammad Guruh Ajinugroho</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Jawaban2 -->
        </div>
           
            <!-- End Post1 -->

                <a href="{{route('home.index')}}">Kembali</a>

            <!-- End Post3 -->
        </div>

        <!-- Profil & Pertanyaan-->
        <div class="col">
            <div class="row" style="text-align:start;">
                <div class="col-3">
                    <img src="asset/img/foto/guruhformal.jpg" aria-hidden="true" height="50" width="50" style="border-radius:50%;">
                </div>
                <div class="col">
                    <a href="/profilku">
                        <h5>M Guruh Ajinugroho</h5>
                        <div style="font-size:smaller;">Lihat Profil</div>
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <h5>
                    <img src="asset/img/icon/form.svg" aria-hidden="true" height="50" width="50">
                    Pertanyaan Ku
                </h5>
                <hr>
                <h6>
                    <ul type="square">
                        @foreach($question as $r)
                        <li style="margin:10px 0; font-weight:normal;">
                            {{$r->judul}} <sup>(3 Jawaban)</sup>
                            <br>
                            <a href="{{route('question_index',$r->id_pertanyaan)}}" style="font-size:smaller;">{{$r->name_matkul}}</a>
                        </li>
                        @endforeach
                        <!-- <li style="margin:10px 0; font-weight:normal;">
                            Perbedaan Join dan Subquery <sup>(5 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Sistem Basis Data 2</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            Storing data xss-reflected <sup>(1 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Sistem Keamanan Komputer</a>
                        </li> -->
                    </ul>
                    <div class="mt-3">
                        <ul class="pagination justify-content-end">
                            {{$question->links()}}
                        </ul>
                    </div>
                </h6>
            </div>
            <div style="text-align:right;">
                <a class="btn btn-primary" href="{{route('pertanyaan.index')}}" role="button">Ajukan Pertanyaan</a>
            </div>
        </div>
    </div>
</div>
@endsection