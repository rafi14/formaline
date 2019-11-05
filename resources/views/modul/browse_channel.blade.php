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
                        <li style="margin:10px 0; font-weight:normal;">
                            <a href="/home" style="font-size:larger;">Teknik Informatika UG</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            <a href="" style="font-size:larger;">Analisis Kimia IPB D3</a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <a href="/create-channel">+ Tambah Baru</a>
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
                            <img src="http://localhost:8000/asset/img/icon/television.svg" aria-hidden="true" height="50" width="50">
                            Browse Channel
                        </h3>
                    </div>
                    <div class="col-4">
                        <div class="dropdown" style="text-align:right;">
                            <h6 style="font-weight:normal;">Urutkan Dari :</h6>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Jumlah Anggota</option>
                                <option>Tanggal dibuat</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Judul -->

            <!-- Post1 -->
                <div class="row">
                    <div class="col">
                        <div class="row" style="text-align:center;">
                            <div class="col">
                                <h3 style="text-align:center;">512</h3>
                                Anggota
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h5>
                                <a href="/home" style="font-weight:normal;">
                                    Psikologi UG S1
                                </a>
                            </h5>
                        </div>
                        <div class="row">
                            <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">UG</a>&nbsp;
                            <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Psikologi</a>&nbsp;
                            <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Fakultas Psikologi</a>&nbsp;
                        </div>
                        <div class="row">
                            <a href="/home" class="btn btn-outline-primary" style="margin:3px 0;">Lihat</a>&nbsp;
                            <a href="" class="btn btn-info" style="margin:3px 0;">Minta Bergabung</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="rowalign-items-end" style="text-align:right;">
                            <sup>Dibuat :<br>Sabtu, 02 November 2019</sup>
                        </div>
                        <div class="rowalign-items-end" style="text-align:right;">
                            Administrator : <br>
                            <a href="">Liliana Sadewa</a>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Post1 -->


            <!-- Post2 -->
                <div class="row">
                    <div class="col">
                        <div class="row" style="text-align:center;">
                            <div class="col">
                                <h3 style="text-align:center;">314</h3>
                                Anggota
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h5>
                                <a href="/home" style="font-weight:normal;">
                                    Analisis Kimia IPB D3
                                </a>
                            </h5>
                        </div>
                        <div class="row">
                            <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">IPB</a>&nbsp;
                            <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Vokasi</a>&nbsp;
                            <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Kimia</a>&nbsp;
                        </div>
                        <div class="row">
                            <a href="/home" class="btn btn-outline-primary" style="margin:3px 0;">Lihat</a>&nbsp;
                            <a href="" class="btn btn-secondary" style="margin:3px 0;">Batalkan Permintaan</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="rowalign-items-end" style="text-align:right;">
                            <sup>Dibuat :<br>Senin, 7 Oktober 2019</sup>
                        </div>
                        <div class="rowalign-items-end" style="text-align:right;">
                            Administrator : <br>
                            <a href="">Astadewi Ismadara</a>
                        </div>
                    </div>
                </div>
                    
                <hr>
            <!-- End Post2 -->


            <!-- Post3 -->
            <div class="row">
                <div class="col">
                    <div class="row" style="text-align:center;">
                        <div class="col">
                            <h3 style="text-align:center;">214</h3>
                            Anggota
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <h5>
                            <a href="/home" style="font-weight:normal;">
                                Teknik Informatika UG
                            </a>
                        </h5>
                    </div>
                    <div class="row">
                        <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">UG</a>&nbsp;
                        <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Teknik</a>&nbsp;
                        <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Fakultas Teknologi Industri</a>&nbsp;
                    </div>
                    <div class="row">
                        <a href="/home" class="btn btn-outline-primary" style="margin:3px 0;">Lihat</a>&nbsp;
                        <a href="" class="btn btn-danger" style="margin:3px 0;">Tinggalkan Channel</a>
                    </div>
                </div>
                <div class="col">
                    <div class="rowalign-items-end" style="text-align:right;">
                        <sup>Dibuat : <br>Rabu, 13 November 2019</sup>
                    </div>
                    <div class="rowalign-items-end" style="text-align:right;">
                        Administrator : <br>
                        <a href="">Lafi Zazuli</a>
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