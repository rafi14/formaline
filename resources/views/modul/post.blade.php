@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <h3>Ajukan Pertanyaan</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h5 style="font-weight:normal;">Channel :</h5>
                    <p class="mt-2">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Teknik Informatika UG</option>
                            <option>Teknik Industri UG</option>
                            <option>Ilmu Komputer UI</option>
                        </select>
                    </p>
                </div>
                <div class="col-6">
                        <h5 style="font-weight:normal;">Mata Kuliah :</h5>
                        <p class="mt-2">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Algoritma Pemrograman Parallel</option>
                                <option>Rekayasa Perangkat Lunak 1</option>
                                <option>Pengantar Bisnis Informatika</option>
                            </select>
                        </p>
                </div>
            </div>
            <form action="" class="summernote">
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Judul</label>
                            <input type="judul" class="form-control" id="judul" aria-describedby="judulHelp" value="Paralelisasi Algoritma Sieve of Erathostenes">
                            <small id="emailHelp" class="form-text text-muted">Terdapat 20 pertanyaan serupa <a href="">Lihat</a></small>
                        </div>
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Isi</label>
                            <textarea id="my-summernote" name="pertanyaan"></textarea>
                        </div>  
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Tag</label>
                            <input type="tag" class="form-control" id="tag" aria-describedby="judulHelp" value="Paralelisasi Algoritma Sieve of Erathostenes">
                            <small id="emailHelp" class="form-text text-muted">Pisahkan Tag dengan koma. Ex : Komputer, Algoritma, Basis Data</small>
                        </div>
                        <button type="button" class="btn btn-primary" style="float:right; width:25%;">Tanyakan</button>      
                    </div>
                </div>
            </form>
            <div class="row mt-2">
                <a href="/home" class="btn btn-primary" style="float:right; width:25%;">Kembali</a>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection