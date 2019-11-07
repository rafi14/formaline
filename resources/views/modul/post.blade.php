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
        <form class="form-horizontal" method="post" action="{{route('pertanyaan.store')}}" enctype="multipart/form-data">
        @csrf    
            <div class="row mt-3">
                <div class="col-6">
                    <h5 style="font-weight:normal;">Universitas :</h5>
                    <p class="mt-2">
                        <select name="universitas" class="form-control" id="exampleFormControlSelect1">
                            <option value="{{Auth::user()->universitas}}" selected>{{Auth::user()->universitas}}</option>
                        </select>
                    </p>
                </div>
                <div class="col-6">
                        <h5 style="font-weight:normal;">Mata Kuliah :</h5>
                        <p class="mt-2">
                            <select name="id_matkul" class="form-control" id="exampleFormControlSelect1">
                               @foreach($matkul as $matkulku) 
                                <option value="{{$matkulku->id}}">{{$matkulku->name}}</option>
                               @endforeach 
                            </select>
                        </p>
                </div>
            </div>
           
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Judul</label>
                            <input type="judul" class="form-control" name="judul" id="judul" aria-describedby="judulHelp">
                            <small id="emailHelp" class="form-text text-muted">Terdapat 20 pertanyaan serupa <a href="">Lihat</a></small>
                        </div>
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Image</label>
                            <input id="textinput" name="image" type="file" placeholder="Image" class="form-control input-md">
                        </div>  
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Isi</label>
                            <textarea name="isi"></textarea>
                        </div>  
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Tag</label>
                            <input type="tag" class="form-control" id="tag" aria-describedby="judulHelp" name="tag">
                            <small id="emailHelp" class="form-text text-muted">Pisahkan Tag dengan koma. Ex : Komputer, Algoritma, Basis Data</small>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Tanyakan</button>      
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