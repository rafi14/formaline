@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <!-- Channel & Mata Kuliah -->
        <div class="col">
            <div>
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/television.svg" aria-hidden="true" height="50" width="50">
                    Channel Ku
                </h5>
                <div>
                    <form action="#" class="search-wrap">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" style="width:40%;" placeholder="Cari Channel">
            
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
                        <li style="margin:10px 0;">
                            <a href="" style="font-size:larger;">Rekayasa Komputasional</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            <a href="" style="font-size:larger;">Sistem Basis Data 2</a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <a href="/create-channel">+ Tambah Baru</a>
                    </div>
                </h6>
            </div>
            <div class="mt-5">
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/college-graduation.svg" aria-hidden="true" height="50" width="50">
                    Mata Kuliah
                </h5>
                <div>
                    <form action="#" class="search-wrap">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" style="width:40%;" placeholder="Cari Channel">
            
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
                        <li style="margin:10px 0;">
                            <a href="" style="font-size:larger;">Sistem Keamanan Komputer</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            <a href="" style="font-size:larger;">Sistem Basis Data 2</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            <a href="" style="font-size:larger;">Algoritma Pemrograman Parallel</a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <a href="/create-matkul">Kelola Mata Kuliah (Admin)</a>
                    </div>
                    <div class="mt-3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </h6>
            </div>
        </div>

        <!-- Kumpulan Pertanyaan di Mata Kuliah -->
        <div class="col-6">
            <!-- Judul -->
                <div class="row">
                    <div class="col-8">
                        <h3>
                            <img src="http://localhost:8000/asset/img/icon/newspaper-report.svg" aria-hidden="true" height="50" width="50">
                            Teknik Informatika UG
                        </h3>
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
                
                <a class="btn btn-primary btn-sm" href="#" role="button">UG</a>
                <a class="btn btn-primary btn-sm" href="#" role="button">Teknik</a>
                <a class="btn btn-primary btn-sm" href="#" role="button">Fakultas Teknologi Industri</a>
                
                <hr>
            <!-- End Judul -->

            <!-- Post1 -->
                <div class="row">
                    <div class="col">
                        <div class="row" style="text-align:center;">
                            <div class="col-6">
                                <h3 style="text-align:center;">5</h3>
                                Jawaban
                            </div>
                            <div class="col-6">
                                <h3 style="text-align:center;">27</h3>
                                Dilihat
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h5>
                                <a href="/question/dvwa-gabisa-di-linux" style="font-weight:normal;">
                                    DVWA gak bisa diinstall di linux
                                </a>
                            </h5>
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
                        <div class="row align-items-end" style="text-align:right;">
                            Ditanyakan Oleh : <br>
                            <a href="">Dheo Prasetyo</a>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Post1 -->


            <!-- Post2 -->
                <div class="row">
                    <div class="col">
                        <div class="row" style="text-align:center;">
                            <div class="col-6">
                                <h3 style="text-align:center;">6</h3>
                                Jawaban
                            </div>
                            <div class="col-6">
                                <h3 style="text-align:center;">25</h3>
                                Dilihat
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h5>
                                <a href="" style="font-weight:normal;">
                                    Cara ambil cookie dari XSS-Reflected
                                </a>
                            </h5>
                        </div>
                        <div class="row">
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">DVWA</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Ethical Hacking</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Linux</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">SKK</a>&nbsp;
                        </div>
                    </div>
                    <div class="col">
                        <div class="rowalign-items-start" style="text-align:right;">
                            <sup>Kamis, 04 Juli 2019</sup>
                        </div>
                        <div class="row align-items-end" style="text-align:right;">
                            Ditanyakan Oleh : <br>
                            <a href="">Mochammad Fariz S</a>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Post2 -->


            <!-- Post3 -->
                <div class="row">
                    <div class="col">
                        <div class="row" style="text-align:center;">
                            <div class="col-6">
                                <h3 style="text-align:center;">4</h3>
                                Jawaban
                            </div>
                            <div class="col-6">
                                <h3 style="text-align:center;">21</h3>
                                Dilihat
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h5>
                                <a href="" style="font-weight:normal;">
                                    Perbedaan Enkripsi Sha12 dan MD5
                                </a>
                            </h5>
                        </div>
                        <div class="row">
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">DVWA</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Ethical Hacking</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Security</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">SKK</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">MD5</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">...</a>&nbsp;
                        </div>
                    </div>
                    <div class="col">
                        <div class="rowalign-items-start" style="text-align:right;">
                            <sup>Senin, 01 Juli 2019</sup>
                        </div>
                        <div class="row align-items-end" style="text-align:right;">
                            Ditanyakan Oleh : <br>
                            <a href="">M Guruh Ajinugroho</a>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Post3 -->
        </div>

        <!-- Profil & Pertanyaan-->
        <div class="col">
            <div>
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/graduate-student-avatar.svg" aria-hidden="true" height="50" width="50">
                    Profil Ku<br>
                    <a href="/profilku" style="font-size:smaller;font-weight:normal;">Klik untuk merubah</a>
                </h5>
                <hr>
                <ul type="square">
                    <li>Muhammad Guruh Ajinugroho</li>
                    <li>S1 - Jurusan Teknik Informatika Fakultas Teknologi Industri Universitas Gunadarma</li>
                    <li>Smester 7</li>
                </ul>

                <div style="text-align:right;">
                    <a class="btn btn-primary" href="/new-post" role="button">Ajukan Pertanyaan</a>
                </div>
            </div>
            <div class="mt-5">
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/form.svg" aria-hidden="true" height="50" width="50">
                    Pertanyaan Ku
                </h5>
                <hr>
                <h6>
                    <ul type="square">
                        <li style="margin:10px 0; font-weight:normal;">
                            Tanya Rumus Regresi <sup>(3 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Rekayasa Komputasional</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            Perbedaan Join dan Subquery <sup>(5 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Sistem Basis Data 2</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            Storing data xss-reflected <sup>(1 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Sistem Keamanan Komputer</a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </h6>
            </div>
        </div>
    </div>
</div>
@endsection